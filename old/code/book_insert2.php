
<?php   
$link=mysql_connect("localhost","root","") or die("error".mysql_error());  
 mysql_select_db("bookonline",$link);  
?>  
<select name="ID_Book" id="province">  
<?php  
    $q="select * from bso_book_category ";  
    $qr=mysql_query($q);  
    while($rs=mysql_fetch_array($qr)){  
?>  
  <option value="<?=$rs['ID_Ca']?>"><?=$rs['Na_Ca']?></option>  
<?php }  mysqli_close($link); ?>      
</select> 

<html><head>
<?php
include('config.php');
if (isset($_POST["send"]))
  process_form();
else
  show_form();

//ฟังก์ชั่นที่ใช้แสดงฟอร์ม
function show_form() {
 ?> <h3>เพิ่มข้อมูลหนังสือใม่</h3>
<form method="POST" action="{$_SERVER['PHP_SELF']}">
  หมายเลข ID_Book: <input type="text" name="ID_Book" size="13" maxlength="13"><br>
  ชื่อเรื่อง: <input type="text" name="Na_Book" size="30"><br>
  หมวดหมู่: <select name"ID_Book">
           <option value="">ค่าที่1</option>
  </select><br>
  
  ราคา: <input type="text" name="Va_Book" size="10"><br>
  <input type="submit" name="send" value="เพิ่มข้อมูล">
  </form>
}
<?

//ฟังก์ชั่นที่ใช้ประมวลผลฟอร์ม
function process_form() {
  $ID_Book = trim($_POST["ID_Book"]);
  $Na_Book = trim($_POST["Na_Book"]);
  $ID_Ca = trim($_POST["ID_Ca"]);
  $Va_Book = trim($_POST["Va_Book"]);
  if (($ID_Book == "") or ($Na_Book == "") or ($Va_Book == "")) {
    echo "<font color=\"red\">เกิดข้อผิดพลาด: คุณป้อนข้อมูลไม่ครบ</font><br>";
    show_form();
    exit;
  }
  $ID_Book = addslashes($ID_Book);
  $Na_Book = addslashes($Na_Book);
  $ID_Ca   = doubleval($ID_Ca);
  $Va_Book = doubleval($Va_Book);
  $sql = "INSERT INTO bso_book (`ID_Book`, `Na_Book`, `Va_Book`, ID_Ca) VALUES ('{$ID_Book}', '{$Na_Book}', '{$Va_Book}','{ID_Ca}');";	
  $result = mysqli_query($con, $sql);

  echo "<h3>ผลการเพิ่มข้อมูลหนังสือ</h3>\n";
  if ($result) {
    echo "เพิ่มข้อมูลหนังสือเข้าสู่ฐานข้อมูลจำนวน " . mysqli_affected_rows($con) . " รายการ<br>";
    echo "<a href=\"book_list.php\">แสดงรายการหนังสือทั้งหมด</a><br>";
  }
  else {
    echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล<br>";
  }

  mysqli_close($con);
}
</html>
?> 

