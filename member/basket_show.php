<?php include('members_only.php'); ?>
<html>
<!-- แสดงรายชื่อหนังสือ -->
<?php include('../config.inc');
$user = $_SESSION["valid_user"];
$bgc = 0;
$result = mysqli_query($con, "SELECT bso_basket.ID_Basket ,bso_basket.ID_Book,bso_basket.ID_Member,bso_basket.Number ,bso_book.Na_Book, bso_basket.ID_Basket
FROM bso_basket,bso_member,bso_book
WHERE bso_member.Us_Member = '{$user}' AND bso_member.ID_Member = bso_basket.ID_Member AND bso_basket.ID_Book = bso_book.ID_Book ");
	 
echo "<h3 align=\"center\">ตะกร้าสินค้า</h3>\n";
echo "<table align=\"center\" border=\"0\" cellpadding=\"5\" cellspacing=\"1\"  width=\"100%\">\n";
echo "<tr style=\"background-color:#C2D9FE\">
<th>รหัสหนังสือ</th><th>ชื่อหนังสือ</th><th>จำนวน</th><th>ลบออกจากตะกร้า</th></tr>\n";
while ($row = mysqli_fetch_array($result)) {
$bgc = ($bgc=="beige")?"white":"beige";
  echo "<tr bgcolor=$bgc>";
 
  echo "<td> {$row['ID_Book']} </td>";
  echo "<td>"; echo "<a href=\"../book_detail.php?ID_Book={$row['ID_Book']}\">{$row['Na_Book']}</a>"; echo" </td>";
  echo "<td> {$row['Number']} </td>";
  echo "<td width =\"10%\"> <a href =\"delete.php?ID_Basket={$row['ID_Basket']}\">x</a> </td>";
echo "</tr>";
  
}
echo "<tr style=\"background-color:#F2F2F2\">";
/*
  echo "<td> รหัส</td>";
  $sql =  mysqli_query($con,"SELECT SUM(Va_Book) AS VailTotal FROM bso_basket WHERE ID_Member = '{$user}'  ");
  $rows = mysqli_fetch_array($sql);
  echo "<td> ผลรวม ={$rows['VailTotal']}</td>";
*/
echo "</tr>";

echo "</table>\n";
echo"<br/><br/><br/>";
echo "<a href=\"../book_list_all.php\">เลือกหนังสือเพิ่ม</a> | ";
echo "<a href=\"../member/order_process.php?status=ยังไม่ได้ชำระเงิน\">ยืนยันการสั่งสินค้า</a>";  //************************

mysqli_close($con);
?>
 
 </html>

  
    
    