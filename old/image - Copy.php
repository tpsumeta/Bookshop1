<?
if($hidAction == "Add") { //เช็คค่า hidden ที่่ส่งมา ถ้าเท่ากับ Add ให้โปรแกรมทำงาน
$date = date("U"); //สร้างเลข 10 หลักมาจากเวลา เพื่อเอาไปใช้เป็นชื่อของรูป ป้องกันชื่อรูปซ้ำ 
if($file != "") {
$type = getimagesize($file); //หาประเภทของรูปภาพ 
if($type[2] == 1) { //เมื่อรูปภาพเป็นชนิด gif 
$image = $date."_img.gif";
} else if($type[2] == 2) { //เมื่อรูปภาพเป็นชนิด jpg 
$image = $date."_img.jpg";
}
copy($file, "images/$image"); //ก๊อปปี้รูปภาพไปยังโพลเดอร์ images 
chmod("images/$image", 0664); //ทำการ changmode 
}

$host="localhost";
$db_username="root";
$db_password="";
$dbname="bookonline"; //ชื่อฐานข้อมูล 
$connect = mysql_connect($host,$db_username,$db_password);
if(!$connect){
echo "ไม่สามารถติดต่อฐานข้อมูลได้"; exit();
}

$sql = "insert into image (id, image) values ('', '$image') "; //เพิ่มข้อมูลลงดาต้าเบส โดนเอาชื่อของรูปไปเก็บไว้ 
$dbquery = mysql_db_query($dbname, $sql);
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
<input type="file" name="file" />
<input type="submit" name="Submit" value="อัปรูป" />
<input name="hidAction" id="hidAction" type="hidden" value="Add">
</form>
</body>
</html>