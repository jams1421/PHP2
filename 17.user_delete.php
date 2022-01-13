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
        $conn=mysqli_connect("localhost","root","","mydb");
        $sql="delete from user where id='{$_GET[id]}'";
        #echo $sql;
        if (!mysqli_query($conn,$sql)){
            echo "使用者刪除錯誤";
        }else{
            echo "使用者刪除成功";
        }
        echo "<meta http-equiv=REFRESH content='3, url=user.php'>";
    }#3秒後返回使用者畫面
?>