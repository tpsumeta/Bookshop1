<?php include('members_only.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>โปรไฟล์ผู้ใช้</title>
</head>

<body>
<?php
$user = $_SESSION["valid_user"];
$result = mysqli_query($con, "SELECT *
FROM bso_member WHERE Us_Member =  '{$user}' " );
$row = mysqli_fetch_array($result);
echo "<h3 align=\"center\" >รายละเอียด User</h3>";
echo"<table width=\"100%\"  border=\"0\" align=\"center\" cellpadding=\"5\" cellspacing=\"1\">";
echo"<tr align=\"center\" style=\"background-color:#C2D9FE\">";
echo"<td width= \"20%\">";
?>
<?php
include('../config.inc');
$connection = mysql_connect($db_ad,$db_user,$db_pass) or trigger_error(mysql_error(),E_USER_ERROR);  
// ดึงข้อมูลจากฐานข้อมูล ไม่มีโค้ดการแบ่งหน้านะจ๊ะ  ไปเพิ่มเติมเอง
mysql_select_db($db_name,$connection);  
$query_rs_image = "SELECT * FROM bso_member WHERE Us_Member = '{$user}'";  
$rs_image = mysql_query($query_rs_image, $connection) or die(mysql_error());  
$row_rs_image = mysql_fetch_assoc($rs_image);  
$totalRows_rs_image = mysql_num_rows($rs_image);  
 
  if ($totalRows_rs_image > 0) { 
  // แสดงผลถ้ามีข้อมูลในฐานข้อมูล 
  ?>
  <?php echo "<img height= 150 width= 150 src=\"../member/images/{$row_rs_image['Im_Member']}\" />";?>  
    <?php } ?>
<?php
echo"    <p></p>";
echo"    <p></p>";
echo"    <td width=\"94\"><a href=\"basket_show.php\">ตะกร้าสินค้า</a></td>";
echo"    <td width=\"93\"><a href=\"order_list.php\">รายการสังซื้อ</a></td>";
echo" </tr>";
echo"  <tr style=\"background-color:#F2F2F2\">";
echo"  <td colspan=\"3\"> User:  {$row['Us_Member']} </td>";
echo" </tr>";
echo"<tr style=\"background-color:#F2F2F2\">";
echo"    <td colspan=\"3\">ชื่อ: {$row['Na_Member']}</td>";
echo"  </tr>";
echo"  <tr style=\"background-color:#F2F2F2\">";
echo"    <td colspan=\"3\">ที่อยู่: {$row['Ad_Member']}</td>";
echo"  </tr>";
echo"  <tr style=\"background-color:#F2F2F2\">";
echo"    <td colspan=\"3\">เบอร์โทร: {$row['Te_Member']}</td>";
 echo" </tr>";
echo"<tr style=\"background-color:#F2F2F2\">";
echo"<td colspan=\"3\">อีเมล์ : {$row['Em_Member']}</td>";
echo"<tr>";
 echo" </tr>";
echo"</table>";
echo "<a href=member_edit.php?Us_Name={$user}>แก้ไข</a>";
?>
</body>
</html>