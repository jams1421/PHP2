<html>
    <head><title>新增使用者</title></head>
    <body>
<?php        
    error_reporting(0);
    #error_reporting(0);為不顯示錯誤
    session_start();
    #session_start();為啟用一個新的或開啟正在使用中的session,其一定要放在網頁最上面否則會出錯
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
          #登入失敗3秒後返回登入畫面
    }
    else{    
        echo "
            <form action=user_add.php method=post>
                帳號：<input type=text name=id><br>
                密碼：<input type=text name=pwd><p></p>
                <input type=submit value=新增> <input type=reset value=清除>
                
            </form>
        ";#在登入後顯示新增使用者和清除使用者

    }
?>
    </body>
</html>