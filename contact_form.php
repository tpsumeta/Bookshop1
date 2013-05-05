<?php include('menubar.php'); 
include('config.inc');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ติดต่อผู้ดูแลระบบ</title>
</head>

<body>
<?php

echo "<h3 align=\"center\" >ติดต่อผู้ดูแลระบบ</h3>";
echo"<table width=\"100%\"  border=\"0\" align=\"center\" cellpadding=\"5\" cellspacing=\"1\">";
echo"<tr align=\"center\">";
echo"<td width= \"20%\">";
?>   
<form method="POST" action="contact_process.php">

<?php
echo" </tr>";
echo"  <tr>";
echo"  <td colspan=\"3\">ชือเรื่อง:<input  name=\"title\" type=\"text\" >   </td>";
 echo" </tr>";
echo"<tr>";
echo"    <td colspan=\"3\">รายละเอียด: <textarea name=\"detail\" rows=\"5\" cols=\"40\" ></textarea></td>";
echo"  </tr>";
echo"  <tr >";
echo"    <td colspan=\"3\">ชื่อ: <input size=\"20\" name=\"name\" type=\"text \" ></td>";
echo"  </tr>";
echo"  <tr>";
echo"    <td colspan=\"3\">อีเมล์: <input size=\"50\" name =\"email\" type=\"\" ></td>";
 echo" </tr>";
echo"</table>"."<br>";
echo "<input type=\"submit\" name=\"send\" value=\"ส่งแบบฟอร์ม\">" ;
echo "</form>" ;

  mysqli_close($con);

?>

</body>
</html>