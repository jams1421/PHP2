<?php
    session_start();
    #session_start();為啟用一個新的或開啟正在使用中的session,其一定要放在網頁最上面否則會出錯
    unset($_SESSION["counter"]);

    echo "counter重置成功....";
    echo "<meta http-equiv=REFRESH content='2; url=counter.php'>";
    #為刪除$_SESSION["counter"]並會在2秒後跳轉至url=counter.php網頁
?>