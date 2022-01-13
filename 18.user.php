<html>
    <head><title>使用者管理</title></head>
    <body>
    <?php
        error_reporting(0);
        #error_reporting(0);為不顯示錯誤
    session_start();
    #session_start();為啟用一個新的或開啟正在使用中的session,其一定要放在網頁最上面否則會出錯
        if (!$_SESSION["id"]) {
            echo "請登入帳號";
            echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
        } #登入失敗3秒後返回登入畫面
        else{   
            echo "<h1>使用者管理</h1>
                [<a href=bulletin.php>回佈告欄列表</a>]<br>
                <table border=1>
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";
             #登入管理者帳號
            $conn=mysqli_connect("localhost","root","","mydb");
            $result=mysqli_query($conn, "select * from user");
            while ($row=mysqli_fetch_array($result)){
                echo "<tr><td><a href=user_edit_form.php?id={$row['id']}>修改</a>||<a href=user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
            }#可修改和刪除某使用者帳號
            echo "</table>";
        }
    ?> 
    </body>
</html>