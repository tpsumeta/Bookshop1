<html>
<head><title>��Ǩ�ͺ�����١��ͧ�ͧ���ͼ�����Է�Ԣͧ�����</title></head>
<body style="font-family:'MS Sans Serif';font-size=12pt">
<?
//�������õԴ��͡Ѻ�ҹ������ PHPProject � MySQL
include("StartConnect.inc");

//�Ӥ�ҷ�����Ѻ�ҡẺ����������Ը� POST �������㹵���ø�����
$user = $_POST["user"];
$pass = $_POST["pass"];

//��ҹ��Ң���������� MyUser/MyPermission ���ç�Ѻ
//���ͼ����㹵���� $user ����Ѻ�ҨҡẺ�����
$SQL = "SELECT u.username, u.password, u.status, p.permission_name, p.permission_status FROM MyUser u , MyPermission p WHERE u.username = p.username AND u.username = '$user' AND p.permission_name = 'ViewGuestBook'";
$table = mysql_query($SQL,$Conn) or die ("�������ö���¡�٢���������� MyUser/MyPermission ��");
	
//��Ǩ�ͺ��Ҿ������������ MyUser/MyPermission ������� ? 
//��Ҿ����红����������������� $row
if($row = mysql_fetch_array($table))
{
	//��Ǩ�ͺ������ʼ�ҹ�١��ͧ������� ?
	if($row["password"] == $pass)
	{
		//��Ǩ�ͺʶҹТͧ���ͼ����
		if($row["status"] == "Y")
		{
			//��Ǩ�ͺ�Է�Ԣͧ���ͼ����
			if($row["permission_status"] == "Y")
			{
				$r_username = $row["username"];
				$r_password = $row["password"];
				$r_status = $row["status"];
				$r_permission_name = $row["permission_name"];
				$r_permission_status = $row["permission_status"];
				
				print "<font color=#0000FF><b>�Թ�յ�͹�Ѻ ��й���ҹ��͡�Թ�������к�����!!!</b></font><br>";
				print "���ͼ����ͧ��ҹ��� : $r_username<br>";
				print "���ʼ�ҹ�ͧ��ҹ��� : $r_password<br>";
				print "ʶҹТͧ��ҹ��� : $r_status<br>";
				print "�����Է�Ԣͧ��ҹ��� : $r_permission_name<br>";
				print "ʶҹ��Է�Ԣͧ��ҹ��� : $r_permission_status<br>";
			}
			else
			{
				print "<font color=#FF0000><b>���ͼ������١�ЧѺ�Է��㹡����͡�Թ�������к�</b></font><br>";
				print "��سҡ�Ѻ仡�͡���ͼ�������᷹ -> <a href=# onclick='history.back()'>��ԡ�����</a>";
			}
		}
		else
		{
			print "<font color=#FF0000><b>���ͼ������١�ЧѺ���Ǥ���</b></font><br>";
			print "��سҡ�Ѻ仡�͡���ͼ�������᷹ -> <a href=# onclick='history.back()'>��ԡ�����</a>";
		}
	}
	else
	{
		print "<font color=#FF0000><b>��ҹ��͡���ʼ�ҹ���١��ͧ</b></font><br>";
		print "��سҡ�Ѻ仡�͡���ʼ�ҹ�ա���� -> <a href=# onclick='history.back()'>��ԡ�����</a>";
	}
}
else
{
	print "<font color=#FF0000><b>��辺���ͼ����㹰ҹ������</b></font><br>";
	print "��سҡ�Ѻ仡�͡���ͼ�����ա���� -> <a href=# onclick='history.back()'>��ԡ�����</a>";
}
	
//�Դ��õԴ��͡Ѻ�ҹ������ PHPProject � MySQL
include("EndConnect.inc");
?>
</body>
</html>
