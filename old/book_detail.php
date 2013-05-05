<?php 
include('menubar.php'); 

$hostname_connection = "localhost";  
$database_connection = "bookonline";  
$username_connection = "root";  
$password_connection = "";  
$connection = mysql_pconnect($hostname_connection, $username_connection, $password_connection)
															or trigger_error(mysql_error(),E_USER_ERROR);  
 
mysql_query( "SET NAMES UTF8" ) ;  
 
// ดึงข้อมูลจากฐานข้อมูล ไม่มีโค้ดการแบ่งหน้านะจ๊ะ  ไปเพิ่มเติมเอง
 
mysql_select_db($database_connection, $connection);  
$query_rs_image = "SELECT * FROM tbl_image ORDER BY image_id ASC";  
$rs_image = mysql_query($query_rs_image, $connection) or die(mysql_error());  
$row_rs_image = mysql_fetch_assoc($rs_image);  
$totalRows_rs_image = mysql_num_rows($rs_image);  

?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
 include('config.php'); 
$ID = $_GET["ID_Book"];
$result = mysqli_query($con, "SELECT *FROM bso_book WHERE ID_Book = '{$ID}' " );
$row = mysqli_fetch_array($result);
echo  "<h3  align =\"center\" >รายละเอียดหนังสือ</h3>";
echo"<table width=\"100%\"  border=\"0\" align=\"center\" cellpadding=\"5\" cellspacing=\"1\">";
echo"<tr align=\"center\" style=\"background-color:#C2D9FE\">";
echo"<td width=\"30%\"> ";  
?>

  <?php if ($totalRows_rs_image > 0) { 
  // แสดงผลถ้ามีข้อมูลในฐานข้อมูล 
  ?>
    
      <?php do { ?>
        <?php 
        // รูปภาพให้เอาค่าจากฐานข้อมูลมาต่อ ให้ชี้ไปยังภาพที่อัปโหลดมา
        ?>
        <?php echo "<img height= 100 width=100 src=\"upload_images/{$row_rs_image['image_name']}\" />";?>
        <?php  
        // กำหนดว่า จะให้ตาราง แสดงกี่คอลัมน์ ง่ายๆ ด้วยคำสั่งแค่ 2 บรรทัด  
		
        $iLoop=+1 ;  
 
        if ( $iLoop % 3 == 0 ) {echo "" ;}  
 
		} while ($row_rs_image = mysql_fetch_assoc($rs_image));
       ?>
    
    <?php } ?>

<?php
echo"</td>";
echo"    <p></p>";
echo"    <p></p>";
echo"    <td width=\"94\"><a href=member/basket_process.php?ID_Book={$ID}>เก็บใส่ตระกร้าสินค้า</a></td>";
echo"    <td width=\"93\"><a href=#>สั่งซื้อ</a></td>";
echo" </tr>";
echo"  <tr style=\"background-color:#F2F2F2\">";
echo"  <td colspan=\"3\"> ID:  {$row['ID_Book']} </td>";
echo" </tr>";
echo"<tr style=\"background-color:#F2F2F2\">";
echo"    <td colspan=\"3\">ชื่อหนังสือ: {$row['Na_Book']}</td>";
echo"  </tr>";
echo"  <tr style=\"background-color:#F2F2F2\">";
echo"    <td colspan=\"3\">ราคา: {$row['Va_Book']}</td>";
echo"  </tr>";
echo"</table>";
?>


</body>
</html>