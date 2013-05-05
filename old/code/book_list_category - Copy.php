<html>
<!-- แสดงรายชื่อหนังสือ -->
<?php include('config.php');
$result = mysqli_query($con, "SELECT * FROM bso_book_category;");
while ($row = mysqli_fetch_array($result)) {
  echo "รหัส{$row['ID_Ca']}";
  echo "ชื่อ{$row['Na_Ca']}<br>";
}
mysqli_close($con);
?>
 </html>

  
    
    