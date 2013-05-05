<?php include('config.inc');
$title = $_POST['title'] ;
$detail = $_POST['detail'] ;
$name = $_POST['name'] ;
$email = $_POST['email'] ;

if($title =="" or $detail=="" or $name ==""){ echo " คุณกรอบกข้อมูลไม่ครบ "; exit;}
?>
<?php 

$sql = "INSERT INTO `bso_contact`(`title`, `detail`, `name`, `email`) VALUES ('{$title}','{$detail}','{$name}','{$email}')";

$result = mysqli_query($con, $sql);

  echo "<h3>ผลการแจ้งการชำระเงิน</h3>\n";
  if ($result) {
    echo "แจ้งข้อมูลสำเร็จ " ."<br>กรุณารอรับการตอบกลับทางอีเมล์ ครับ";
    
  }
  else {
    echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล กรุณตรวจข้อมของท่านอีกครั้ง<br>";
  }

  mysqli_close($con);
  
?>