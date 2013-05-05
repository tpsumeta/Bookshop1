<?php
include('../config.inc');
session_start();

if (!isset($_SESSION["valid_user"])) {
  echo "คุณไม่มีสิทธิดูเนื้อหาในเพจนี้ เนื่องจากยังไม่ได้เข้าสู่ระบบ<br>";
  echo '<a href="login.php">เข้าสู่ระบบ</a>';
  exit;
}
$user =  $_SESSION["valid_user"];
?>
<h1 align="center">Bookshop Online Version <?php echo "$version"; ?></h1>
<p align="right">
ยินดีต้อนรับคุณ <?php echo "<font color=\"red\" size=\"+1\" >$user</font><br />"; 
include('../menu.php');
echo $home_member.$book_all_member.$basket_member.$order_list_member.$payment_member.$profile_member.$logout_member;
?>

<hr></p>
