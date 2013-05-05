<?php include('members_only.php');  include('../config.inc');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>โปรไฟล์ผู้ใช้</title>
</head>

<body>
<?php
$user = $_SESSION["valid_user"];
$result = mysqli_query($con, "SELECT * FROM bso_member WHERE Us_Member =  '{$user}' " );
$row = mysqli_fetch_array($result);
echo "<h3 align=\"center\" >รายละเอียด User</h3>";
echo"<table width=\"100%\"  border=\"0\" align=\"center\" cellpadding=\"5\" cellspacing=\"1\">";
echo"<tr align=\"center\" style=\"background-color:#C2D9FE\">";
echo"<td width= \"20%\">";
?>
<?php
$connection = mysql_pconnect($db_ad,$db_name,$db_pass) or trigger_error(mysql_error(),E_USER_ERROR);  
mysql_query( "SET NAMES UTF8" ) ;  

mysql_select_db($db_name, $connection);  
$query_rs_image = "SELECT * FROM bso_member WHERE Us_Member = '{$user}'";  
$rs_image = mysql_query($query_rs_image, $connection) or die(mysql_error());  
$row_rs_image = mysql_fetch_assoc($rs_image);  
$totalRows_rs_image = mysql_num_rows($rs_image);  
 
  if ($totalRows_rs_image > 0) { 
  // แสดงผลถ้ามีข้อมูลในฐานข้อมูล 
  ?>
  <?php echo "<img height= 150 width= 150 src=\"../member/images/{$row_rs_image['Im_Member']}\" />";?>  
    <?php } ?>
    
<form method="POST" action="member_edit_process.php">
<?php
echo"    <p></p>";
echo"    <p></p>";
echo"    <td width=\"94\"><a href=\"basket_show.php\">ตะกร้าสินค้า</a></td>";
echo"    <td width=\"93\"><a href=\"order_list.php\">รายการสังซื้อ</a></td>";
echo" </tr>";
echo"  <tr style=\"background-color:#F2F2F2\">";
echo"  <td colspan=\"3\"> User: {$row['Us_Member']} </td>";
 echo" </tr>";
  echo"<tr style=\"background-color:#F2F2F2\">";
echo"    <td colspan=\"3\">ชื่อ: <input  name=\"na_member\" type=\"text\" value= {$row['Na_Member']}></td>";
echo"  </tr>";
echo"  <tr style=\"background-color:#F2F2F2\">";
echo"    <td colspan=\"3\">ที่อยู่: <input size=\"100\" name=\"ad_member\" type=\"text \" value= {$row['Ad_Member']}></td>";
echo"  </tr>";
echo"  <tr style=\"background-color:#F2F2F2\">";
echo"    <td colspan=\"3\">เบอร์โทร: <input  name =\"te_member\" type=\"\" value= {$row['Te_Member']}></td>";
 echo" </tr>";
echo"<tr style=\"background-color:#F2F2F2\">";
echo"<td colspan=\"3\">อีเมล์ : <input  name=\"em_member\" type=\"email\" value= {$row['Em_Member']}></td>";
echo"<tr>";
 echo" </tr>";
echo"</table>"."<br>";
echo "<input type=\"submit\" name=\"send\" value=\"แก้ไขข้อมูล\">" ;
echo "</form>" ;

  mysqli_close($con);

?>
<input  type="/>

</body>
</html>



