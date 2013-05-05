<?php    
$con = @mysqli_connect("localhost","root","")or die ("Can not connect MySQL"); mysql_query("SET NAMES UTF8");
mysqli_select_db($con,"bookonline")or die ("Can not connect database");
		 
         /***
        $result = mysqli_query($cn,"SELECT * FROM bso_book;");
		$row = mysqli_fetch_array($result);
		echo $row[1];
		*/
?>