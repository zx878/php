<?php

echo"
//顯示新增布告欄
<h1>新增布告欄</h1>
//連結方式post 
<form method=post action=bulletin_add.php>
佈告標題<input type=text name=title size=200><p>//設定佈告標題
佈告內容<p><textarea cols=100 rows=20 name=content></textarea><p>//設定佈告內容

//設定佈告類型1 2 3 checked勾選
佈告類型<input type=radio name=type value=1 checked>系上公告 
<input type=radio name=type value=2>系上訊息
<input type=radio name=type value=3>企業徵才
<p>

發佈時間<input type=date name=time><p>
<input type=submit value=發佈公告>

"



?>