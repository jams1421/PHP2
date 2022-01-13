<?php
    session_start();
    #session_start();為啟用一個新的或開啟正在使用中的session,其一定要放在網頁最上面否則會出錯
    if (!isset($_SESSION["counter"]))
        $_SESSION["counter"]=1;
        #為如果$_SESSION["counter"不等於null,則$_SESSION["counter"]=1
    else
        $_SESSION["counter"]++;
    #為如果$_SESSION["counter"等於null,則$_SESSION["counter"]++
    echo "counter=".$_SESSION["counter"];
    #並顯示"counter=".$_SESSION["counter"]
    echo "<br><a href=reset_counter.php>重置counter</a>";
?>