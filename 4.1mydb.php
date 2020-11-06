<?php
error_reporting(0);#關閉警訊
#mysqli_connect 要設定ip(本地端localhost)
#帳號 密碼 及連結資料庫 要設定mydb資料庫 
$conn =mysqli_connect("localhost","root","","mydb");

#mysqli_query從我們設定資料庫mydb中的user中找出資料
$result=mysqli_query($conn, "select * from user");

#=mysqli_fetch_array從result中抓資料
$row=mysqli_fetch_array($result);#每fetch一次抓一筆
#印出id 和 pwd
echo $row[id] ." " . $row[pwd]; 

echo "<br>";#換行

#在抓一次 印出id 和 pwd
echo $row[id] ." " . $row[pwd];

?>