<?php
session_start();
include('../config.inc');
if (isset($_SESSION["valid_user"])) {
  session_destroy();
  echo "ออกจากระบบแล้ว<br>";
  echo '<a href="login.php">เข้าสู่ระบบ</a> ';
  echo ' <a href="../index.php">หน้าแรก</a><hr>';
}
else {
  echo "คุณยังไม่ได้เข้าสู่ระบบ จึงไม่มีความจำเป็นต้องออกจากระบบ<br>";
  echo '<a href="login.php">เข้าสู่ระบบ</a><hr>';
}
?>
