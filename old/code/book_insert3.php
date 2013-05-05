<?php   
$link=mysql_connect("localhost","root","") or die("error".mysql_error());  
 mysql_select_db("bookonline",$link);  
?>  
<select name="ID_Book" id="province">  
<?php  
    $con="select * from bso_book_category ";  
    $qr=mysql_query($con);  
    while($rs=mysql_fetch_array($qr)){  
?>  
  <option value="<?=$rs['ID_Ca']?>"><?=$rs['Na_Ca']?></option>  
<?php } ?>      
</select> 