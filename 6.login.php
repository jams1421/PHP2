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
   if ($login==TRUE)
     echo "welcome!!";
     #為顯示welcome!!
  else
     echo "id/pwd wrong!!";
     #如果錯誤則顯示id/pwd wrong!!
?>