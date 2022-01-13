<?php 
    if (($_POST[id] == "B09090073") && ($_POST[pwd]=="123456"))
        echo "welcome";
        #登入帳號密碼成功
    else
        echo "fail login";
        #登入帳號密碼失敗
