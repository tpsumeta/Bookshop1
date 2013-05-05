<!-- แสดงรายชื่อหนังสือ
<?php    include('code/dbcon.php');   // เชื่อต่อกรับ dbcon.php
        
        $result = mysqli_query($con,"SELECT * FROM bso_book_category;");
		while($row = mysqli_fetch_array($result)){
		echo $row[0];
		echo $row[1]."<br>";
		}
mysqli_close($con);  // ปิดการเชื่อมต่อกับฐานข้อมูล
    ?>
    
  