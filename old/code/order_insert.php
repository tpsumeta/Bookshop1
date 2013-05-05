<?php
include('config.php');
if (isset($_POST["send"]))
  process_form();
else
  show_form();

//ฟังก์ชั่นที่ใช้แสดงฟอร์ม
function show_form() {
  echo <<<HTMLBLOCK
<h3>รายการสั่งซื้อ</h3>
<form method="POST" action="{$_SERVER['PHP_SELF']}">
  
  รหัสหนังสือ: <input type="text" name="ID_Book" size="30"><br>
  จำนวนหนังสือ: <input type="text" name="Nu_Order" size="30"><br>
  <input type="submit" name="send" value="เพิ่มข้อมูล">
  </form>
HTMLBLOCK;
}

//ฟังก์ชั่นที่ใช้ประมวลผลฟอร์ม
function process_form() {
  $ID_Book =  trim($_POST["ID_Book"]);
  $Nu_Order = trim($_POST["Nu_Order"]);
  $Va_Order = trim($_POST["Va_Order"]);
  if (($ID_Book == "") or ($Va_Order == "")) {
    echo "<font color=\"red\">เกิดข้อผิดพลาด: คุณป้อนข้อมูลไม่ครบ</font><br>";
    show_form();
    exit;
  }


  $ID_Book = addslashes($ID_Book);
  $Nu_Order = doubleval($Nu_Order);
  $Va_Order = doubleval($Va_Order);

  include('config.php');
  $sql = "INSERT INTO bso_order ( `ID_Book`, `Va_Order`, Nu_Order) VALUES ( '{$ID_Book}', '{$Va_Order}','{Nu_Order}');";	
  $result = mysqli_query($con, $sql);

  echo "<h3>ผลการเพิ่มข้อมูลหนังสือ</h3>\n";
  if ($result) {
    echo "เพิ่มข้อมูลหนังสือเข้าสู่ฐานข้อมูลจำนวน " . mysqli_affected_rows($con) . " รายการ<br>";
    echo "<a href=\"order_list.php\">แสดงรายการหนังสือทั้งหมด</a><br>";
  }
  else {
    echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล<br>";
  }

  mysqli_close($con);
}
?>
