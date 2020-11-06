<?php 
     error_reporting(0);#關閉警訊
    #假如id輸入為john pwd為john1234
    if (($_GET[id] == "john") && ($_GET[pwd]=="john1234"))
        echo "Welcome";#正確 顯示Welcome
    else
        echo "fail login";#錯誤 顯示fail login
?>