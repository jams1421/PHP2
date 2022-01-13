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
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){
            echo "修改錯誤";
            echo "<meta http-equiv=REFRESH content='3, url=user.php'>";
            #修改失敗將在3秒後返回帳號網頁
        }else{
            echo "修改成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=user.php'>";
        }#修改成功將在3秒後返回帳號網頁
    }

?>