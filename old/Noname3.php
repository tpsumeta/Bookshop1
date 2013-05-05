<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title> New Document </title>
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <meta http-equiv=Content-Type content="text/html; charset=utf-8"/>
<meta http-equiv=Content-Type content="text/html; charset=utf-874"/> 
<meta http-equiv="Content-language" content="th" />
<?php    
$con = @mysqli_connect("localhost","root","")or die ("Can not connect MySQL");
mysqli_select_db($con,"bookonline")or die ("Can not connect database");
mysql_query("SET NAMES UFT8"); 
?>
 </head>

 <body>
 <?php
  $result = mysqli_query($con,"SELECT * FROM bso_book;");
		while($row = mysqli_fetch_array($result)){
		echo $row[0];
		echo $row[1];
		echo $row[2]."<br>";
		}
  ?>
 </body>
</html>
