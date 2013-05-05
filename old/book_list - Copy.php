<html>
<meta http-equiv=Content-Type content="text/html; charset=utf-8"/>
<meta http-equiv="content-language" content="th" /> 
<meta http-equiv=Content-Type content="text/html; charset=utf-874"/>
<!-- แสดงรายชื่อหนังสือ -->
<?php    include('../code/config.php'); // เชื่อต่อกรับ dbcon.php
        echo"<h3>รายการหนังสือ</h3>";
		echo "<table>";
		echo "<tr><th>รหัส</th><th>เชื่อเรื่อง</th><th>ราคา</th>";
		echo "</table>";
        $result = mysqli_query($con,"SELECT * FROM bso_book;");
		while($row = mysqli_fetch_array($result)){
		echo $row[0];
		echo $row[1];
		echo $row[2]."<br>";
		}
mysqli_close($con);  // ปิดการเชื่อมต่อกับฐานข้อมูล
    ?>
 
 </html>

  
    
    