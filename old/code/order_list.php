<html>
<!-- แสดงรายชื่อหนังสือ -->
<?php include('config.php');
 $result = mysqli_query($con, "SELECT * FROM bso_order;");
/*$result = mysqli_query($con,"SELECT * FROM bso_order JOIN bso_member ON (bso_order.ID_Order=bso_member.ID_Member);");*/
echo "<h3 align=\"center\">รายการสั่งซื้อ</h3>\n";
echo "<table align=\"center\" border=\"1\" cellpadding=\"3\" width=\"100%\">\n";
echo "<tr><th>รหัสสั่งสินค้า</th><th>รหัสหนังสือ</th><th>จำนวนหนังสือ</th><th>ราคา</th><th>วันที่</th><th>รหัสโปร</th><th>รหัสสมาชิก</th></tr>\n";
while ($row = mysqli_fetch_array($result)) {
  echo "<tr><td> {$row['ID_Order']} </td>";
  echo "<td> {$row['ID_Book']} </td>";
  echo "<td> {$row['Nu_Order']} </td>";
  echo "<td> {$row['Va_Order']} </td>";
  echo "<td> {$row['Da_Order']} </td>";
  echo "<td> {$row['ID_Pro']} </td>";
  echo "<td> {$row['ID_Member']} </td>";
}
echo "</table>\n";

mysqli_close($con);
?>
 
 </html>

  
    
    