<?php
include('config.inc');
session_start();
if (isset($_SESSION["valid_user"])) {
	
  echo "คุณไม่มีสิทธิดูเนื้อหาในเพจนี้ เนื่องจากได้เข้าสู่ระบบแล้ว<br>";
  echo '<a href="member/logout.php">ออกจากระบบ</a>';
  exit;
} 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>สมัครสมาชิก</title>
</head>

<body>
<?php

echo "<h3 align=\"center\" >กรอกข้อมูลสำหรับสมัครสมาชิก</h3>";
echo"<table width=\"100%\"  border=\"0\" align=\"center\" cellpadding=\"5\" cellspacing=\"1\">";
echo"<tr align=\"center\">";
echo"<td width= \"20%\">";
?>   
<form method="POST" action="register_process.php">

<?php
echo" </tr>";
echo"  <tr style=\"background-color:#F2F2F2\">";
echo"  <td colspan=\"3\"> User <input  name=\"us_member\" type=\"text\" value= USER>   </td>";
 //   รูปภาพ <input  name=\"im_member\" type=\"file\" ></td>";
 echo" </tr>";
  echo"<tr style=\"background-color:#F2F2F2\">";
echo"    <td colspan=\"3\">Password: <input  name=\"pa_member\" type=\"password\" ></td>";
echo"  </tr>";
echo"<tr style=\"background-color:#F2F2F2\">";
echo"    <td colspan=\"3\">ชื่อ: <input  name=\"na_member\" type=\"text\" value= ชื่อ - นามสกุล></td>";
echo"  </tr>";
echo"  <tr style=\"background-color:#F2F2F2\">";
echo"    <td colspan=\"3\">ที่อยู่: <input size=\"100\" name=\"ad_member\" type=\"text \" value= ที่อยู่></td>";
echo"  </tr>";
echo"  <tr style=\"background-color:#F2F2F2\">";
echo"    <td colspan=\"3\">เบอร์โทร: <input  name =\"te_member\" type=\"\" value= เบอร์โทร></td>";
 echo" </tr>";
echo"<tr style=\"background-color:#F2F2F2\">";
echo"<td colspan=\"3\">อีเมล์ : <input  name=\"em_member\" type=\"email\" value= อีเมล์></td>";
echo"<tr>";
 echo" </tr>";
echo"</table>"."<br>";
echo "<input type=\"submit\" name=\"send\" value=\"สมัครสมาชิก\">" ;
echo "</form>" ;

  mysqli_close($con);

?>


</body>
</html>



