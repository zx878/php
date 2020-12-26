<?php
error_reporting(0);
session_start();#定義session
//
//session_destroy();
unset($_SESSION["id"]);#取消登入id
echo "登出中..";
echo "<meta http-equiv=REFRESH content='1;url=login.html'>";#跳回login.html

?>