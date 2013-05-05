<?php include('config.inc');

$us_member = $_POST['us_member'] ;
$pa_member = $_POST['pa_member'] ;
$na_member = $_POST['na_member'] ;
$ad_member = $_POST['ad_member'] ;
$te_member = $_POST['te_member'] ;
$em_member = $_POST['em_member'] ;
if($us_member =="" or $pa_member =="" or $na_member =="" or $te_member =="" or $em_member =="" ){ echo " คุณกรอบกข้อมูลไม่ครบ "; exit;}

?>

<?php 

$sql = "INSERT INTO `bso_member`(`Us_Member`, `Pa_Member`, `Na_Member`, `Ad_Member`, `Te_Member`, `Em_Member`) VALUES ('{$us_member}','{$pa_member}','{$na_member}','{$ad_member}','{$te_member}','{$em_member}')";

$result = mysqli_query($con, $sql);

  echo "<h3>ผลการสมัคร</h3>\n";
  if ($result) {
    echo "สมัครสมาชิกสำเร็จ " ."<br>";
    
	echo "User ของคุณคือ : ".$us_member."<br>";
	echo "Password คือ : ".$pa_member."<br>";
	echo "<a href=\"member/login.php\">เข้าสู่ระบบ</a><br>";
  }
  else {
    echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล กรุณตรวจข้อมของท่านอีกครั้ง<br>";
  }

  mysqli_close($con);
  
?>