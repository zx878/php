<?php
    error_reporting();
    //連結資料庫
    $conn = mysqli_connect("localhost","root","", "mydb");
    if (mysqli_connect_error($conn))
        die("資料庫連線錯誤");

    //mysqli_set_charset($conn, "utf8");

   
   #mysqli_query從我們設定資料庫mydb中的user中找出資料
    $result=mysqli_query($conn, "select * from user");
    $login=false;
  #迴圈 把所有$result的資料印出來前不結束 
    while ($row=mysqli_fetch_array($result)) {

       //假如輸入$_POST [id][pwd]等於$row [id][pwd] login改true
            if ($_POST["id"] == $row["id"] && $_POST["pwd"]==$row["pwd"]) 
            $login=TRUE;
    }
    //當login等於ture
        if($login==TRUE){
            //echo "歡迎登入"; 

            session_start();//定義session來登入登出
           $_SESSION["id"]=$_POST["id"];//令session等於post
           //帳密輸入成功時 令頁面2秒後跳轉為bulletin.php
             echo "<meta http-equiv='refresh' content='2;url=bulletin.php'>"; 
             
            
          }
          else{
            echo "帳號密碼錯誤";
            //url=登入地  content=幾秒後顯示
            echo "<meta http-equiv='refresh' content='3;url=login.html'>";          
          }

        
    
?>
