<?
if($hidAction == "Add") { //�礤�� hidden �������� �����ҡѺ Add ���������ӧҹ
$date = date("U"); //���ҧ�Ţ 10 ��ѡ�Ҩҡ���� �����������繪��ͧ͢�ٻ ��ͧ�ѹ�����ٻ��� 
if($file != "") {
$type = getimagesize($file); //�һ������ͧ�ٻ�Ҿ 
if($type[2] == 1) { //������ٻ�Ҿ�繪�Դ gif 
$image = $date."_img.gif";
} else if($type[2] == 2) { //������ٻ�Ҿ�繪�Դ jpg 
$image = $date."_img.jpg";
}
copy($file, "images/$image"); //��ͻ����ٻ�Ҿ��ѧ������ images 
chmod("images/$image", 0664); //�ӡ�� changmode 
}

$host="localhost";
$db_username="root";
$db_password="";
$dbname="bookonline"; //���Ͱҹ������ 
$connect = mysql_connect($host,$db_username,$db_password);
if(!$connect){
echo "�������ö�Դ��Ͱҹ��������"; exit();
}

$sql = "insert into image (id, image) values ('', '$image') "; //����������ŧ�ҵ���� ⴹ��Ҫ��ͧ͢�ٻ������ 
$dbquery = mysql_db_query($dbname, $sql);
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
<input type="file" name="file" />
<input type="submit" name="Submit" value="�ѻ�ٻ" />
<input name="hidAction" id="hidAction" type="hidden" value="Add">
</form>
</body>
</html>