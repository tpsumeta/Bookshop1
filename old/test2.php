<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>Untitled Document</title>
</head>

<body>

<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "bookonline";

$dbc = mysql_connect($dbhost,$dbuser,$dbpass) or die ("Can not connect MySQL");
$dbs = mysql_select_db($dbname) or die ("Can not connect database");
mysql_query("SET NAMES UTF8");//เพิ่มตรงนี้บรรทัดเดียว สบายแล้ว สากลๆ utf8


   
     ?>
</body>
</html>