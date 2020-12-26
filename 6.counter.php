<?php
 error_reporting();
 //宣告session
 session_start();
 //當$_SESSION["counter"]從沒被定義過時令他等於1
 if(!isset($_SESSION["counter"])){
  $_SESSION["counter"]=1;

 }
 //有時遞加
else{

    $_SESSION["counter"]++;
}
//印出登入人次
echo "登入{$_SESSION["counter"]}人次";



?>