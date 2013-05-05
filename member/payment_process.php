<?php include('../config.inc');

$id_order = $_POST['id_order'] ;
$number = $_POST['number'] ;
$date = $_POST['date'] ;
$comment = $_POST['comment'] ;

if($id_order =="" or $number =="" or $date ==""){ echo " คุณกรอบกข้อมูลไม่ครบ "; exit;}

?>

<?php 

$sql = "INSERT INTO `bso_payment`(`ID_Order`, `Nu_Pay`, `Da_Pay`, `Wh_Pay`) VALUES ('{$id_order}','{$number}','{$date}','{$comment}')";

$result = mysqli_query($con, $sql);

  echo "<h3>ผลการแจ้งการชำระเงิน</h3>\n";
  if ($result) {
    echo "แจ้งข้อมูลสำเร็จ " ."<br>ระบบจะทำการตรวจสอบผลการโอนเงินไม่เกิน 24 ชั่วโมง ครับ";
    
  }
  else {
    echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล กรุณตรวจข้อมของท่านอีกครั้ง<br>";
  }

  mysqli_close($con);
  
?>