<?
//��˹� ���ʹҵ������������� , ���Ͱҹ������ , ��͡�Թ ��� ���ʼ�ҹ ����Ѻ�Դ��͡Ѻ�ҹ���������Ѻ�����
$ServerName = "localhost";
$DatabaseName = "bookonline";
$User = "root";
$Password = "";

//�Դ��͡Ѻ�ҹ�����ż�ҹ�ѧ��ѹ MySQL
$Conn = mysql_connect($ServerName,$User,$Password) or die ("�������ö�Դ��͡Ѻ�����������");

//���͡���Ͱҹ������ ��� PHPProject
mysql_select_db($DatabaseName,$Conn) or die ("�������ö�Դ��͡Ѻ�ҹ��������");
?>