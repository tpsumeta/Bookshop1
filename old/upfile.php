<html>
<head>
<BODY BGCOLOR="#000000" TEXT="#FFFFFF">
<title>NAK Upload</title>
</head>
<body>
<?php
echo "ชื่อไฟล์ = ".$_FILES["fileUpload"]["name"]."<br>";
echo "สกุลไฟล์ = ".$_FILES["fileUpload"]["type"]."<br>"; 
echo "ขนาด = ".$_FILES["fileUpload"]["size"]." bytes<br>"; 
echo "ความผิดพลาด(ไฟล์เสียหาย) = ".$_FILES["fileUpload"]["error"]."<br>"; 

if(copy($_FILES["fileUpload"]["tmp_name"],"book/".$_FILES["fileUpload"]["name"]))
{
	echo "<p>อับโหลดสำเร็จ<br><p/>";
	echo "<p>สามารถตลวจสอบได้ที่<br>";
	echo "<HR color=#FFFFFF>http://nakrpg.eu5.org/upload/".$_FILES["fileUpload"]["name"]."<HR color=#FFFFFF><br><p/>";
	echo "<HR color=#FFFFFF>newaxekub@hotmail.com<HR color=#FFFFFF><br>";
}else{
     echo "<p>อับโหลดไม่สำเร็จ ไม่สามารถอับโหลดได้<br>";
     }
?>
</body>

</html>