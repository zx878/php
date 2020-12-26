<?php

session_start();
if (!isset($_SESSION['id'])){   #當沒有$_SESSION['id']時
    echo "請登入系統";
    echo "<meta http-equiv='refresh' content='3;url=index.html''>"; 
}else{
    $conn = mysqli_connect("localhost", "root", "", "mydb");
    
    #INSERT INTO 是用來新增資料至某資料表 (table) 從bulletin中的title, content, type, time 字串須添加單引號
    $sql="insert into bulletin(title, content, type, time) values('{$_POST['title']}', '{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')"; 
    //echo $sql;
    
    if (!mysqli_query($conn, $sql)){ #當沒有$sql時新增失敗
        echo "新增失敗";   
       }
       else  
          echo "新增佈告成功";   
       
       echo "<meta http-equiv='refresh' content='1;url=bulletin.php''>"; 
       
}

?>>