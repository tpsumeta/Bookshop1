<html>
<head>
<BODY BGCOLOR="#000000" TEXT="#FFFFFF">
<title>NAK Upload</title>
</head>
<body>
<?php
echo "������� = ".$_FILES["fileUpload"]["name"]."<br>";
echo "ʡ����� = ".$_FILES["fileUpload"]["type"]."<br>"; 
echo "��Ҵ = ".$_FILES["fileUpload"]["size"]." bytes<br>"; 
echo "�����Դ��Ҵ(����������) = ".$_FILES["fileUpload"]["error"]."<br>"; 

if(copy($_FILES["fileUpload"]["tmp_name"],"book/".$_FILES["fileUpload"]["name"]))
{
	echo "<p>�Ѻ��Ŵ�����<br><p/>";
	echo "<p>����ö��Ǩ�ͺ����<br>";
	echo "<HR color=#FFFFFF>http://nakrpg.eu5.org/upload/".$_FILES["fileUpload"]["name"]."<HR color=#FFFFFF><br><p/>";
	echo "<HR color=#FFFFFF>newaxekub@hotmail.com<HR color=#FFFFFF><br>";
}else{
     echo "<p>�Ѻ��Ŵ�������� �������ö�Ѻ��Ŵ��<br>";
     }
?>
</body>

</html>