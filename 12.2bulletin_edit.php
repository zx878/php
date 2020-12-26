<?php
session_start();
if (!isset($_SESSION['id'])){   
    echo "請登入系統";
    echo "<meta http-equiv='refresh' content='3;url=index.html''>"; 
}else{
    $conn = mysqli_connect("localhost", "root", "", "mydb");
     
   #如果我們要修改資料表中的資料我們就會需要用到 update 從bulletin中找資料
    $sql = "update bulletin set title='{$_POST['title']}', content='{$_POST['content']}', type={$_POST['type']}, time='{$_POST['time']}' where bid={$_POST['bid']}"; 
  
    #當沒有$sql的值時 修改失敗
    if (!mysqli_query($conn, $sql)){
        echo "修改失敗";   
       }
       else  #當有$sql的值時 修改佈告成功
          echo "修改佈告成功";   
       
       echo "<meta http-equiv='refresh' content='1;url=bulletin.php''>"; 
       
}
?>