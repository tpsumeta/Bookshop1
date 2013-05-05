<html>
<!-- แสดงรายชื่อหนังสือ -->
<?php include('config.php'); 
$result = mysqli_query($con, "SELECT * FROM bso_book_category;");

echo "<h3 align=\"center\">รายการหนังสือ</h3>\n";
echo "<table align=\"center\" border=\"1\" cellpadding=\"3\" width=\"100%\">\n";
echo "<tr><th>หมายเลข</th><th>หมวดหมู่</th></tr>\n";
while ($row = mysqli_fetch_array($result)) {
  echo "<tr><td> {$row['ID_Ca']} </td>";
  echo "<td> {$row['Na_Ca']} </td>";
 
 
}
echo "</table>\n";

mysqli_close($con);
?>
 
 </html>

  
    
    