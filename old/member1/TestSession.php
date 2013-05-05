<?
session_register('myweb');
session_register('myurl');
//$_SESSION["myweb"] = "ฉันคือPHP";
//$_SESSION["myurl"] = "http://www.iamphp.com/";

//print "<b>ชื่อเว็บไซต์ : " . $_SESSION["myweb"] . "</b><br>";
//print "<b>URL : " . $_SESSION["myurl"] . "</b><br>";

print "<b>ชื่อเว็บไซต์ : " . $myweb . "</b><br>";
print "<b>URL : " . $myurl . "</b><br>";
?>
