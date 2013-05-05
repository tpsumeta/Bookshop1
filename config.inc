
<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8"/>
<meta http-equiv=Content-Type content="text/html; charset=utf-874"/> 
<meta http-equiv="Content-language" content="th" /> 
</head>
</html>
<?php   
$db_ad ="localhost";
$db_user ="root";
$db_pass="";
$db_name="bookonline";
$con = @mysqli_connect($db_ad,$db_user,$db_pass)or die ("Can not connect MySQL");
mysqli_select_db($con,$db_name)or die ("Can not connect database");
       
         /***
        $result = mysqli_query($con,"SELECT * FROM bso_book;");
		$row = mysqli_fetch_array($result);
		echo $row[1];
		*/
 
$version = "1.3";    

?>


