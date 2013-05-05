<html>
<!-- แสดงรายชื่อหนังสือ -->
<?php include('config.php');
$result = mysqli_query($con, "SELECT *
     FROM bso_member, bso_order, bso_book
     WHERE bso_member.ID_Member = bso_order.ID_Member AND bso_book.ID_Book = bso_order.ID_Book");
 /*$result = mysqli_query($con, "SELECT * FROM bso_order, bso_member WHEN bso_order.ID_Member = bso_member.ID_Member;");
*/
echo "<h3 align=\"center\">รายการสั่งซื้อ</h3>\n";
echo "<table align=\"center\" border=\"0\" cellpadding=\"5\" cellspacing=\"1\"  width=\"100%\">\n";
echo "<tr style=\"background-color:#C2D9FE\"><th>รหัสสั่งสินค้า</th><th>ชื่อหนังสือ</th><th>จำนวนหนังสือ</th><th>ราคา</th><th>วันที่</th><th>รหัสโปร</th><th>รหัสสมาชิก</th><th>ชื่อสมาขิก</th></tr>\n";
while ($row = mysqli_fetch_array($result)) {
  echo "<tr style=\"background-color:#F2F2F2\"><td> {$row['ID_Order']} </td>";
  echo "<td> {$row['Na_Book']} </td>";
  echo "<td> {$row['Nu_Order']} </td>";
  echo "<td> {$row['Va_Order']} </td>";
  echo "<td> {$row['Da_Order']} </td>";
  echo "<td> {$row['ID_Pro']} </td>";
  echo "<td> {$row['ID_Member']} </td>";
  echo "<td> {$row['Na_Member']} </td></tr>";
  
}
echo "</table>\n";

mysqli_close($con);
?>
 
 </html>

  
    
    