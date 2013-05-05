<!--เชื่อมต่อกับฐานข้อมุล-->
<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8"/>
<meta http-equiv=Content-Type content="text/html; charset=utf-874"/> 
<meta http-equiv="Content-language" content="th" /> 
</head>
</html>
<?php    
$con = @mysqli_connect("localhost","root","")or die ("Can not connect MySQL");
mysqli_select_db($con,"bookonline")or die ("Can not connect database");
mysql_query("SET NAMES utf8");
         /***
        $result = mysqli_query($con,"SELECT * FROM bso_book;");
		$row = mysqli_fetch_array($result);
		echo $row[1];
		*/
?>


