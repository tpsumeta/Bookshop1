<?
//�������ҹ����� Session
session_start();
?>
<html>
<head><title>˹�� Admin �ͧ��纺���</title></head>
<body style="font-family:'MS Sans Serif';font-size=12pt">
<?
//�������õԴ��͡Ѻ�ҹ������ PHPProject � MySQL
include("StartConnect.inc");

//��ҹ��Ң���������� MyPermission ���ç�Ѻ
//���ͼ����㹵���� $_SESSION["r_username"]
$SQL = "SELECT p.permission_name, p.permission_status FROM MyPermission p WHERE p.username = '" . $_SESSION['r_username'] . "' AND p.permission_name = 'AdminWebboard'";
$table = mysql_query($SQL,$Conn) or die ("�������ö���¡�٢���������� MyPermission ��");

//��Ǩ�ͺ��Ҿ������������ MyPermission ������� ? 
//��Ҿ����红����������������� $row
if($row = mysql_fetch_array($table))
{
	//��Ǩ�ͺ�Է�Ԣͧ���ͼ����
	if($row["permission_status"] == "Y")
	{
		//�纤������ش�ͧ�Է�Ԣͧ��������ʶҹ��Է�Ԣͧ��������㹵���� Session
		$_SESSION["r_permission_name"] = $row["permission_name"];
		$_SESSION["r_permission_status"] = $row["permission_status"];
				
		//�ʴ�����������ش㹵���� Session
		print "<font color=#0000FF><b>˹�� Admin �ͧ��纺���</b></font><br>";
		print "���ͼ����ͧ��ҹ��� : " . $_SESSION["r_username"] . "<br>";
		print "���ʼ�ҹ�ͧ��ҹ��� : " . $_SESSION["r_password"] . "<br>";
		print "ʶҹТͧ��ҹ��� : " . $_SESSION["r_status"] . "<br>";
		print "�����Է�Ԣͧ��ҹ��� : " . $_SESSION["r_permission_name"] . "<br>";
		print "ʶҹ��Է�Ԣͧ��ҹ��� : " . $_SESSION["r_permission_status"] . "<br>";
	}
	else
	{
		print "<font color=#FF0000><b>���ͼ������١�ЧѺ�Է��㹡�������ҹ��к����Ǥ���</b></font><br>";
		print "��سҡ�Ѻ��ѧ���ྨ��͹˹�ҹ�� -> <a href=# onclick='history.back()'>��ԡ�����</a>";
	}
}
else
{
	print "<font color=#FF0000><b>��辺���ͼ����㹰ҹ������</b></font><br>";
	print "��سҡ�Ѻ��ѧ���ྨ��͹˹�ҹ�� -> <a href=# onclick='history.back()'>��ԡ�����</a>";
}

//�Դ��õԴ��͡Ѻ�ҹ������ PHPProject � MySQL
include("EndConnect.inc");
?>
</body>
</html>
