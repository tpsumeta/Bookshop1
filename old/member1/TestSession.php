<?
session_register('myweb');
session_register('myurl');
//$_SESSION["myweb"] = "�ѹ���PHP";
//$_SESSION["myurl"] = "http://www.iamphp.com/";

//print "<b>�������䫵� : " . $_SESSION["myweb"] . "</b><br>";
//print "<b>URL : " . $_SESSION["myurl"] . "</b><br>";

print "<b>�������䫵� : " . $myweb . "</b><br>";
print "<b>URL : " . $myurl . "</b><br>";
?>
