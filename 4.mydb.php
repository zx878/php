<?php
    error_reporting(0);#關閉警訊
    
    #帳號 密碼 及連結資料庫
    $conn = mysqli_connect("localhost","root","", "mydb");
   
    if (mysqli_connect_error($conn))

        die("資料庫連線錯誤");

   #$conn文字類型
    mysqli_set_charset($conn, "utf8");

    #mysqli_query從user中找出資料
    $result=mysqli_query($conn, "select * from user");
    #迴圈 把所有$result的資料印出來前不結束 
    while ($row=mysqli_fetch_array($result)) {
        #印出id
        echo $row[id];
        echo " ";
        #印出pwd
        echo $row[pwd];
        echo "<br>";
    }
?>