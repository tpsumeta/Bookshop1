<?php session_start(); include('config.inc'); 
 if (isset($_SESSION["valid_user"])) {
 $user =  $_SESSION["valid_user"];
}else{
	$user =" ผู้เยี่ยมชม";
}
$ver;
?>
<h1 align="center">Bookshop Online Version <?php echo "$version"; ?></h1>
<p align="right">
ยินดีต้อนรับคุณ  
<?php include('menu.php'); echo "<font color=\"red\" size=\"+1\" > $user </font> <br />";
echo $home.$book_all.$contact;

if (!isset($_SESSION["valid_user"])) {
echo $login.$regit;	 
}
 if (isset($_SESSION["valid_user"])) {
  echo $basket.$order_list.$payment.$profile.$logout;
} ?>
<hr></p>
