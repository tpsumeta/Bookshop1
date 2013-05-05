
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php $cn = @mysqli_connect("localhost","root","");  
      mysqli_select_db($cn,"bookonline");
	   
	      
		   ?>
   

</head>

<body >
   <?php  
       $result = mysqli_query($cn,"SELECT * FROM books;");
	  while( $row = mysqli_fetch_array($result)){
		 echo $row[1]."<br>";
	  }             
     ?>




</body>
</html>