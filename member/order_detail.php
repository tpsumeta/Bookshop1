<?php include('members_only.php'); ?>
<html>
<!-- แสดงรายชื่อหนังสือ -->
<?php include('../config.inc');
$user = $_SESSION["valid_user"];
$ID_Order = $_GET["ID_Order"];
$result = mysqli_query($con, "SELECT *
     FROM bso_member, bso_order, bso_book
     WHERE bso_member.ID_Member = bso_order.ID_Member AND bso_book.ID_Book = bso_order.ID_Book  AND bso_member.Us_Member =  '{$user}' AND ID_order='{$ID_Order}' " );
echo "<h3 align=\"center\">รายการสั่งซื้อ</h3>\n";
$result1 = mysqli_query($con, "SELECT *
     FROM bso_member, bso_order, bso_book
     WHERE bso_member.ID_Member = bso_order.ID_Member AND bso_book.ID_Book = bso_order.ID_Book  AND bso_member.Us_Member =  '{$user}' AND ID_order='{$ID_Order}' " );
$row1 = mysqli_fetch_array($result1);
echo "รหัสสมาชิก "." {$row1['ID_Member']} ";
echo "ชื่อสมาชิก "." {$row1['Na_Member']}<br/>";
echo "รหัสสั่งสินค้า "." {$row1['ID_Order']}<br/>";
echo "สถานะ"." {$row1['Status']}<br/>";

echo "<table align=\"center\" border=\"0\" cellpadding=\"5\" cellspacing=\"1\"  width=\"100%\">\n";
echo "<tr style=\"background-color:#C2D9FE\">
<th>ชื่อหนังสือ</th>
<th>จำนวนหนังสือ</th>
<th>ราคาต่อหน่วย</th>
<th>ราคารวม</th>
</tr>\n";
while ($row = mysqli_fetch_array($result)) {
$Va_Book = $row['Va_Book']* $row['Number'];
  echo "<tr style=\"background-color:#F2F2F2\">";
  echo "<td> {$row['Na_Book']} </td>";
  echo "<td> {$row['Number']} </td>";
  echo "<td> {$row['Va_Book']} </td>";
  echo "<td> {$Va_Book} </td>";
  echo "</tr>";
}
  echo"<tr><td></td></tr>";
  $sql = mysqli_query($con,"SELECT SUM(Va_Book*Number) FROM `bso_order` WHERE ID_Order=$ID_Order");
$row2 = mysqli_fetch_array($sql);
$Total = $row2['SUM(Va_Book*Number)'];
  
  echo "<tr><td></td><td></td><td></td></td><td>ยอดรวม = $Total</td>
  </tr>";
echo "</table>\n";


mysqli_close($con);
?>
 
 </html>

  
    
    