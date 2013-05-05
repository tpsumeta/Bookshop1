<?
//เริ่มใช้งานตัวแปร Session
session_start();
?>
<html>
<head><title>หน้า Admin ของเว็บบอร์ด</title></head>
<body style="font-family:'MS Sans Serif';font-size=12pt">
<?
//เริ่มการติดต่อกับฐานข้อมูล PHPProject ใน MySQL
include("StartConnect.inc");

//อ่านค่าข้อมูลในเทเบิล MyPermission ที่ตรงกับ
//ชื่อผู้ใช้ในตัวแปร $_SESSION["r_username"]
$SQL = "SELECT p.permission_name, p.permission_status FROM MyPermission p WHERE p.username = '" . $_SESSION['r_username'] . "' AND p.permission_name = 'AdminWebboard'";
$table = mysql_query($SQL,$Conn) or die ("ไม่สามารถเรียกดูข้อมูลในเทเบิล MyPermission ได้");

//ตรวจสอบว่าพบข้อมูลในเทเบิล MyPermission หรือไม่ ? 
//ถ้าพบจะเก็บข้อมูลไว้ในอาร์เรย์ $row
if($row = mysql_fetch_array($table))
{
	//ตรวจสอบสิทธิของชื่อผู้ใช้
	if($row["permission_status"] == "Y")
	{
		//เก็บค่าล่าสุดของสิทธิของผู้ใช้และสถานะสิทธิของผู้ใช้ไว้ในตัวแปร Session
		$_SESSION["r_permission_name"] = $row["permission_name"];
		$_SESSION["r_permission_status"] = $row["permission_status"];
				
		//แสดงข้อมูลล่าสุดในตัวแปร Session
		print "<font color=#0000FF><b>หน้า Admin ของเว็บบอร์ด</b></font><br>";
		print "ชื่อผู้ใช้ของท่านคือ : " . $_SESSION["r_username"] . "<br>";
		print "รหัสผ่านของท่านคือ : " . $_SESSION["r_password"] . "<br>";
		print "สถานะของท่านคือ : " . $_SESSION["r_status"] . "<br>";
		print "ชื่อสิทธิของท่านคือ : " . $_SESSION["r_permission_name"] . "<br>";
		print "สถานะสิทธิของท่านคือ : " . $_SESSION["r_permission_status"] . "<br>";
	}
	else
	{
		print "<font color=#FF0000><b>ชื่อผู้ใช้นี้ถูกระงับสิทธิในการเข้าใช้งานในระบบชั่วคราว</b></font><br>";
		print "กรุณากลับไปยังเว็บเพจก่อนหน้านี้ -> <a href=# onclick='history.back()'>คลิกที่นี่</a>";
	}
}
else
{
	print "<font color=#FF0000><b>ไม่พบชื่อผู้ใช้ในฐานข้อมูล</b></font><br>";
	print "กรุณากลับไปยังเว็บเพจก่อนหน้านี้ -> <a href=# onclick='history.back()'>คลิกที่นี่</a>";
}

//ปิดการติดต่อกับฐานข้อมูล PHPProject ใน MySQL
include("EndConnect.inc");
?>
</body>
</html>
