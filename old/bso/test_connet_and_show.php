
<?php    include('dbcon.php');   // เชื่อต่อกรับ dbcon.php
        
        $result = mysqli_query($con,"SELECT * FROM bso_book;");
		while($row = mysqli_fetch_array($result)){
		echo $row[0];
		echo $row[1];
		echo $row[2]."<br>";
		}
mysqli_close($con);
    ?>
	
    
    