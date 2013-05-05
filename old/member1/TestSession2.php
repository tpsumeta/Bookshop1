<?
//session_start();
session_destroy();
print "<b>ชื่อเว็บไซต์ : " . $_SESSION["myweb"] . "</b><br>";
print "<b>URL : " . $_SESSION["myurl"] . "</b><br>";
//session_destroy();
?>