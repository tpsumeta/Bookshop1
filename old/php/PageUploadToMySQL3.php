
<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
<?php
	$objCon = mysqli_connect("localhost","root","") or die("Error Connect to Database");
	$objDB = mysqli_select_db($objCon,"bookonline");
	$objJ = "SELECT * FROM files WHERE Name = 'win'";
	$objQuery = mysql_query($objDB,$objJ);
?>
<table width="340" border="1">
<tr>
<th width="50"> <div align="center">Files ID </div></th>
<th width="150"> <div align="center">Picture</div></th>
<th width="150"> <div align="center">Name</div></th>
<th width="150"> <div align="center">Edit</div></th>
</tr>
<?php
	while($objResult = mysql_fetch_array($objQuery))
	{
?>
<tr>
<td><div align="center"><?=$objResult["FilesID"];?></div></td>
<td><center><img src="myfile/<?=$objResult["FilesName"];?>"></center></td>
<td><center><?=$objResult["Name"];?></center></td>
<td><center><a href="PageUploadToMySQL4.php?FilesID=<?=$objResult["FilesID"];?>">Edit</a>
</center></td>
</tr>
<?php
	}
?>
</table>

</body>
</html>