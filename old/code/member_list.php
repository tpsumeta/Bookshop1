<html>
<!-- แสดงรายชื่อหนังสือ -->
<?php include('config.php'); 
$result = mysqli_query($con, "SELECT * FROM bso_member;");
echo "<h3 align=\"center\">รายการชื่อสมาชิก</h3>\n";
echo "<table align=\"center\" border=\"1\" cellpadding=\"3\" width=\"100%\">\n";
echo "<tr><th>รหัสสมาชิก</th><th>ชื่อสมาชิก</th><th>ที่อยู่</th><th>เบอร์โทร</th><th>อีเมล์</th></tr>\n";
while ($row = mysqli_fetch_array($result)) {
  echo "<tr><td> {$row['ID_Member']} </td>";
  echo "<td> {$row['Na_Member']} </td>";
  echo "<td> {$row['Ad_Member']} </td>";
  echo "<td> {$row['Te_Member']} </td>";
  echo "<td> {$row['Em_Member']} </td>";
}
echo "</table>\n";

mysqli_close($con);
?>
 
 </html>

  
    
    