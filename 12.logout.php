<?php
    session_start();
    #session_start();為啟用一個新的或開啟正在使用中的session,其一定要放在網頁最上面否則會出錯
   
    unset($_SESSION["id"]);
    echo "登出成功....";
    echo "<meta http-equiv=REFRESH content='3; url=login.html'>";
     #為刪除$_SESSION["id"],且顯示登出成功並在3秒後跳轉至login.html網頁