<html>
<head><title>ตรวจสอบความถูกต้องของชื่อผู้ใช้สิทธิของผู้ใช้</title></head>
<body style="font-family:'MS Sans Serif';font-size=12pt">
<?
//เริ่มการติดต่อกับฐานข้อมูล PHPProject ใน MySQL
include("StartConnect.inc");

//นำค่าที่ได้รับจากแบบฟอร์มด้วยวิธี POST มาเก็บไว้ในตัวแปรธรรมดา
$user = $_POST["user"];
$pass = $_POST["pass"];

//อ่านค่าข้อมูลในเทเบิล MyUser/MyPermission ที่ตรงกับ
//ชื่อผู้ใช้ในตัวแปร $user ซึ่งรับมาจากแบบฟอร์ม
$SQL = "SELECT u.username, u.password, u.status, p.permission_name, p.permission_status FROM MyUser u , MyPermission p WHERE u.username = p.username AND u.username = '$user' AND p.permission_name = 'ViewGuestBook'";
$table = mysql_query($SQL,$Conn) or die ("ไม่สามารถเรียกดูข้อมูลในเทเบิล MyUser/MyPermission ได้");
	
//ตรวจสอบว่าพบข้อมูลในเทเบิล MyUser/MyPermission หรือไม่ ? 
//ถ้าพบจะเก็บข้อมูลไว้ในอาร์เรย์ $row
if($row = mysql_fetch_array($table))
{
	//ตรวจสอบว่ารหัสผ่านถูกต้องหรือไม่ ?
	if($row["password"] == $pass)
	{
		//ตรวจสอบสถานะของชื่อผู้ใช้
		if($row["status"] == "Y")
		{
			//ตรวจสอบสิทธิของชื่อผู้ใช้
			if($row["permission_status"] == "Y")
			{
				$r_username = $row["username"];
				$r_password = $row["password"];
				$r_status = $row["status"];
				$r_permission_name = $row["permission_name"];
				$r_permission_status = $row["permission_status"];
				
				print "<font color=#0000FF><b>ยินดีต้อนรับ ขณะนี้ท่านล็อกอินเข้าสู่ระบบแล้ว!!!</b></font><br>";
				print "ชื่อผู้ใช้ของท่านคือ : $r_username<br>";
				print "รหัสผ่านของท่านคือ : $r_password<br>";
				print "สถานะของท่านคือ : $r_status<br>";
				print "ชื่อสิทธิของท่านคือ : $r_permission_name<br>";
				print "สถานะสิทธิของท่านคือ : $r_permission_status<br>";
			}
			else
			{
				print "<font color=#FF0000><b>ชื่อผู้ใช้นี้ถูกระงับสิทธิในการล็อกอินเข้าสู่ระบบ</b></font><br>";
				print "กรุณากลับไปกรอกชื่อผู้ใช้อื่นแทน -> <a href=# onclick='history.back()'>คลิกที่นี่</a>";
			}
		}
		else
		{
			print "<font color=#FF0000><b>ชื่อผู้ใช้นี้ถูกระงับชั่วคราว</b></font><br>";
			print "กรุณากลับไปกรอกชื่อผู้ใช้อื่นแทน -> <a href=# onclick='history.back()'>คลิกที่นี่</a>";
		}
	}
	else
	{
		print "<font color=#FF0000><b>ท่านกรอกรหัสผ่านไม่ถูกต้อง</b></font><br>";
		print "กรุณากลับไปกรอกรหัสผ่านอีกครั้ง -> <a href=# onclick='history.back()'>คลิกที่นี่</a>";
	}
}
else
{
	print "<font color=#FF0000><b>ไม่พบชื่อผู้ใช้ในฐานข้อมูล</b></font><br>";
	print "กรุณากลับไปกรอกชื่อผู้ใช้อีกครั้ง -> <a href=# onclick='history.back()'>คลิกที่นี่</a>";
}
	
//ปิดการติดต่อกับฐานข้อมูล PHPProject ใน MySQL
include("EndConnect.inc");
?>
</body>
</html>
