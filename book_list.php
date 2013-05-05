<?php include('menubar.php');  include('config.inc');  ?>
<html>

<?php
include('category_list.php');
$id_ca =$_GET['ID_Ca'];
echo "<h3 align=\"center\">รายการหนังสือ</h3>\n";
 if($id_ca == Null){
    $sel = "SELECT * FROM bso_book, bso_book_category  WHERE bso_book.ID_Ca=bso_book_category.ID_Ca";
    $result = mysqli_query($con,$sel);
}else{
 $result = mysqli_query($con, "SELECT * FROM bso_book, bso_book_category 
WHERE bso_book.ID_Ca=bso_book_category.ID_Ca AND bso_book.ID_Ca ='{$id_ca}'");
}

echo "<table align=\"center\" border=\"0\" cellpadding=\"5\" cellspacing=\"1\" width=\"100%\">\n";
echo "<tr style=\"background-color:#C2D9FE\"><th>รูปภาพ</th><th>หมายเลข</th><th>ชื่อหนังสือ</th><th>หมวดหมู่</th><th>ราคา</th><th>ดูรายละเอียด</th></tr>\n";
while ($row = mysqli_fetch_array($result)) {
  echo "<tr style=\"background-color:#F2F2F2\">";
  echo "<td><img height= 100 width=80 src=\"admin/images/{$row['images']}\" /> </td>";
 echo" <td> {$row['ID_Book']} </td>";
  echo "<td> {$row['Na_Book']} </td>";
  echo "<td> {$row['Na_Ca']} </td>";
  echo "<td align=\"right\"> {$row['Va_Book']} </td>";
  echo "<td align=\"center\"><a href=\"book_detail.php?ID_Book={$row['ID_Book']}\">คลิกที่นี่</a></td></tr>\n";
}
echo "</table>\n";

mysqli_close($con);
?>
 
 </html>

  
    
    