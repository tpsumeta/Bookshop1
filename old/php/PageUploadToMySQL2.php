<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
</head>
<body>
<?
	if(copy($_FILES["filUpload"]["tmp_name"], "../php/myfile/".$_FILES["filUpload"]["name"]))
	{
		echo "Copy Upload Complete ";

		$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
		$objDB = mysql_select_db("bookonline");
		$strSQL = "INSERT INTO files ";
		$strSQL .="(Name,FilesName) VALUES ('".$_POST["txtName"]."','".$_FILES["filUpload"]["name"]."')";
		$objQuery = mysql_query($strSQL);		
	}
?>
<a href="PageUploadToMySQL3.php">View files</a>
</body>
</html>