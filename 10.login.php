<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("localhost","root","","mydb");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;
        #為如果輸入的資料和資料庫裡的資料一樣
     }
   } 
   if ($login==TRUE) {
    session_start();
    $_SESSION["id"]=$_POST["id"];
    echo "welcome!!";
     #如果登入正確其輸入與伺服器相同為顯示welcome!!
    echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";
    #並3秒後跳轉至bulletin.php網頁
   }

  else{
    echo "id/pwd wrong!!";
    #如果錯誤
    echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
    #則3秒後跳轉至login.html網頁
  }