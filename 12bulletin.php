<?php
 
 error_reporting(0);
  session_start();
  if(!isset($_SESSION["id"]))
  {
   echo "請登入";
   echo "<meta http-equiv='refresh' content='3;url=login.php'>";
  
  }

  else{
   #登入成功後印出歡迎id登入 從logout.php加入登出   從bulletin_add_form.php加入新增佈告
    echo "歡迎 {$_SESSION['id']} 登入 [<a href=logout.php>登出</a>]<p>[<a href=bulletin_add_form.php>新增佈告</a>]<p>";
   

   $conn = mysqli_connect("localhost", "root", "", "mydb");
    
   $result=mysqli_query($conn, "select * from bulletin");
 
   #設定布告欄格線
  echo "<table border=2><tr><td>佈告操作</td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發布時間</td></tr>";
   while($row=mysqli_fetch_array($result)){
   echo "<tr><td>";
   #從bulletin_edit_form.php的bid來加入修改 delete.php的bid加入刪除
   echo "<a href=bulletin_edit_form.php?bid={$row[bid]}>修改</a><a href=delete.php?bid={$row[bid]}>刪除</a>";
   echo "</td><td>";
   echo $row[bid];
   echo "</td><td>";
   echo $row[type];
   echo "</td><td>";
   echo $row[title];
   echo "</td><td>";
   echo $row[contant];
   echo "</td><td>";
   echo $row[time];
   echo "</td></tr>";
   
   
   }

  }
  
    
    

?>