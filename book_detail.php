<?php include('menubar.php');  include('config.inc');  ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>รายละเอียดหนังสือ</title>
</head>
<body>
<?php
$ID = $_GET["ID_Book"];
$result = mysqli_query($con, "SELECT *FROM bso_book WHERE ID_Book = '{$ID}' " );
$row = mysqli_fetch_array($result);
echo  "<h3  align =\"center\" >รายละเอียดหนังสือ</h3>";
echo"<table width=\"100%\"  border=\"0\" align=\"center\" cellpadding=\"5\" cellspacing=\"1\">";
echo"<tr align=\"center\" >";
echo"<td width=\"145\">";  ?>

 <?php
$connection = mysql_connect($db_ad,$db_user,$db_pass) or trigger_error(mysql_error(),E_USER_ERROR);  
mysql_query( "SET NAMES UTF8" ) ;  
mysql_select_db($db_name, $connection);  
$query_rs_image = "SELECT * FROM bso_book WHERE ID_Book = '{$ID}'";  
$rs_image = mysql_query($query_rs_image, $connection) or die(mysql_error());  
$row_rs_image = mysql_fetch_assoc($rs_image);  
$totalRows_rs_image = mysql_num_rows($rs_image);  
 
  if ($totalRows_rs_image > 0) { 
  // แสดงผลถ้ามีข้อมูลในฐานข้อมูล 
  ?>
  <?php echo "<img height= 400 width=300 src=\"admin/images/{$row_rs_image['images']}\" />";?>  
    <?php } ?>
<?php
echo" </tr>";
echo"  <tr style=\"background-color:#F2F2F2\">";
echo"  <td colspan=\"3\"> ID:  {$row['ID_Book']} </td>";
 echo" </tr>";
  echo"<tr style=\"background-color:#F2F2F2\">";
echo"    <td colspan=\"3\">ชื่อหนังสือ: {$row['Na_Book']}</td>";
echo"  </tr>";
  echo"<tr style=\"background-color:#F2F2F2\">";
echo"    <td colspan=\"3\">รายละเอียด: {$row['De_Book']}</td>";
echo"  </tr>";
echo"  <tr style=\"background-color:#F2F2F2\">";
echo"    <td colspan=\"3\">ราคา: {$row['Va_Book']}</td>";
echo"  </tr>";
echo"  <tr style=\"background-color:#F2F2F2\">";
echo"    <td colspan=\"3\"></td>";
echo"  </tr>";
echo"  <tr style=\"background-color:#F2F2F2\">";

echo "<form method=\"get\" action =\"member/basket_process.php\">";
echo"    <td colspan=\"3\"> เก็บใส่ตระกร้าสินค้า: <input name = \"Number\" type =\"number\" min =\"1\" max=\"20\" value=\"1\">เล่ม ";
echo "<input name = \"ID_Book\" type =\"hidden\" value={$row['ID_Book']}> ";
echo " <input type=\"submit\" value=\"ตกลง\" /> | <a href=\"order_list.php\">รายการสังซื้อ</a></td>";
echo "</form>";
echo"  </tr>";
echo"</table>";
?>
</body>
</html>