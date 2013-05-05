<?php include('members_only.php'); ?>
<?php
include('../config.inc');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>แจ้งการชำระเงิน</title>
</head>

<body>
<?php

echo "<h3 align=\"center\" >แจ้งการชำระเงิน</h3>";
echo"<table width=\"100%\"  border=\"0\" align=\"center\" cellpadding=\"5\" cellspacing=\"1\">";
echo"<tr align=\"center\">";
echo"<td width= \"20%\">";
?>   
<form method="POST" action="payment_process.php">

<?php
echo" </tr>";
echo"  <tr>";
echo"  <td colspan=\"3\">เลขที่ใบเสร็จ <input  name=\"id_order\" type=\"text\" value=รหัสสั่งสินค้า>   </td>";
 echo" </tr>";
echo"<tr>";
echo"    <td colspan=\"3\">จำนวนเงิน: <input  name=\"number\" type=\"text\" value=จำนวนเงิน>บาท</td>";
echo"  </tr>";
echo"  <tr >";
echo"    <td colspan=\"3\">วันทที่จ่าย: <input size=\"20\" name=\"date\" type=\"text \" value=วันที่></td>";
echo"  </tr>";
echo"  <tr>";
echo"    <td colspan=\"3\">หมายเหตุ: <input size=\"50\" name =\"comment\" type=\"\" value= หมายเหตุ></td>";
 echo" </tr>";

echo"</table>"."<br>";
echo "<input type=\"submit\" name=\"send\" value=\"ส่งแบบฟอร์ม\">" ;
echo "</form>" ;

  mysqli_close($con);

?>

</body>
</html>



