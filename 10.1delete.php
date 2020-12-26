<?php
error_reporting(0);
$conn=mysqli_connect("localhost","root","", "mydb");
//delete from bulletin where bid=?? 刪除命令

#從bullentin中取出[bid]來刪除
$sql="delete from bulletin where bid={$_GET[bid]}";
//echo $sql;
if(!mysqli_query($conn, $sql))#mysqli_query沒有找到$sqli
echo "刪除錯誤";
else{
    echo "刪除成功";
    echo "<meta http-equiv='refresh' content='1;url=bulletin.php'>"; #跳回bulletin.php
}


?>