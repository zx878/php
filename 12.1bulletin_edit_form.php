<?php
error_reporting(0);
$conn = mysqli_connect("localhost", "root", "", "mydb");
$sql="select * from bulletin where bid={$_GET[bid]}"; 
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);


echo"


<h1>修改布告欄</h1>

<form method=post action=bulletin_edit.php>
<input type=hidden name=bid value=$row[bid]>  #令value為bulletin的[bid]
佈告標題:<input type=text name=title size=200 value={$row[title]}><p> #令value為bulletin的[title]
佈告內容:<p><textarea cols=100 rows=20 name=content>{$row[content]}</textarea><p> #令value為bulletin的[content]
佈告類型:

<input name='type' value='1' ";
    if ($row['type']==1) echo "checked ";#假如type是1 checked勾選
    echo "type='radio'>系上公告 
    <input name='type' value='2' ";
    if ($row['type']==2) echo "checked  ";#假如type是2 checked勾選
    echo "type='radio'>招生訊息 
    <input name='type' value='3' ";
    if ($row['type']==3) echo "checked ";#假如type是3 checked勾選
    echo "type='radio'>企業徵才<p>      

發佈時間<input type=date name=time value={$row[time]}><p> #令value為bulletin的[time]
<input type=submit value=發佈公告>

</form>
"



?>