<html>
    <head><title>修改使用者</title></head>
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
        $conn=mysqli_connect("localhost", "root","","mydb");
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'");
        $row=mysqli_fetch_array($result);
        echo "
        <form method=post action=user_edit.php>
            <input type=hidden name=id value={$row['id']}>
            帳號：{$row['id']}<br> 
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>
            <input type=submit value=修改>
        </form>
        "; #修改原帳號的帳號密碼
    }
    ?>
    </body>
</html>