<?php
include('members_only.php');
 $ID_Book = $_GET["ID_Book"];
 $Number = $_GET["Number"];
include('../config.inc');
$user = $_SESSION["valid_user"];
$result = mysqli_query($con, "SELECT bso_member.ID_Member , bso_book.ID_Book 
FROM bso_member , bso_book
WHERE US_Member =  '{$user}'  AND ID_Book= '{$ID_Book}' " );
$row = mysqli_fetch_array($result);

$sql = "INSERT INTO bso_basket (`ID_Book`, `ID_Member`,Number) 
VALUES ('{$ID_Book}', '{$row['ID_Member']}','{$Number}');";	
$result = mysqli_query($con, $sql);
/*
  echo "<h3>ผลการเพิ่มหนังสือลงตะกร้า</h3>\n";
  if ($result) {
    echo "เพิ่มหนังสือจำนวน " .$Number. "เล่มลงในตะกร้าแล้ว<br>";
    echo "<a href=\"basket_show.php\">แสดงตะกร้าหนังสือของฉัน</a><br>";
  }
  else {
    echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล<br>";
  }
*/

header("location:basket_show.php");
 mysqli_close($con);
?>