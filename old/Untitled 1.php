<html>
<head>
</head>
<body>
<?php
$count="����Ţ ���ʹѡ�֡�Ңͧ����ͧ";
$c=substr($count,0,10);
$len=strlen($c);

echo "<br><br><br>Number: ";
for($n=0;$n<$len;$n++){
$digit=substr($c,$n,1);
echo "<IMG SRC=http://student.nu.ac.th/phonthep/$digit.png BORDER=0 >";
} ?>
<?php
$name=array("����� �ح��","���ѡ��� �����","�ǧ��� �շͧ","���� �آ��");
$color=array("#666","#FF0","#FCC");
echo "<table width='243' border='0' align='center'>";
for($i=0;$i<=count($name);$i++){
if($i!=0){
$n=$name[$i-1];
$l=$i;
$fc="red";
}
else{
$n="<center>���� - ���ʡ��</center>";
$l="�ӴѺ";
$fc="#FFF";
}
if($i==0)
$c=$color[0];
elseif($i%2!=0)
$c=$color[1];
else
$c=$color[2];
echo "<tr bgcolor=$c ><td align='center' width='55'><font face='Angsana New' size='+2' color=$fc> $l</font></td>";
echo "<td width='172'><font face='Angsana New' size='+2' color=$fc>$n</font></td></tr>";
}
echo "</table>";
?>
</body>
</html>