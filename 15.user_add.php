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

   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("localhost","root","","mydb");
   #mysqli_query() 從資料庫查詢資料
   #新增資料SQL命令：insert into 表格名稱(欄位1,欄位2) values(欄位1的值,欄位2的值)
   $sql="insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')";
   #echo $sql;
   if (!mysqli_query($conn, $sql)) {
     echo "新增命令錯誤";
   }
   else{
     echo "新增使用者成功，三秒鐘後回到網頁";
     echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";
   }#三秒鐘後回到網頁
}
?>