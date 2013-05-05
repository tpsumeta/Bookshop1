<html>
<!-- แสดงรายชื่อหนังสือ -->
<?php  include('menubar.php'); include('config.php');  
$result = mysqli_query($con, "SELECT * FROM bso_book;");
echo "<h3 align=\"center\">รายการหนังสือ</h3>\n";
echo "<table align=\"center\" border=\"0\" cellpadding=\"5\" cellspacing=\"1\" width=\"100%\">\n";
echo "<tr style=\"background-color:#C2D9FE\"><th>หมายเลข</th><th>ชื่อเรื่อง</th><th>หมวดหมู่</th><th>ราคา</th><th>ดูรายละเอียด</th></tr>\n";
while ($row = mysqli_fetch_array($result)) {
  echo "<tr style=\"background-color:#F2F2F2\"><td> {$row['ID_Book']} </td>";
  echo "<td> {$row['Na_Book']} </td>";
  echo "<td> {$row['ID_Ca']} </td>";
  echo "<td align=\"right\"> {$row['Va_Book']} </td>";
  echo "<td align=\"center\"><a href=\"book_detail.php?ID_Book={$row['ID_Book']}\">คลิกที่นี่</a></td></tr>\n";
}
echo "</table>\n";

mysqli_close($con);
?>
 
 </html>

  
    
    