
<?php
  global $HTTP_POST_FILES;
  $realname = $HTTP_POST_FILES['userfile']['name'];
  if (is_uploaded_file($HTTP_POST_FILES['userfile']['tmp_name']))
  {
     copy($HTTP_POST_FILES['userfile']['tmp_name'], "./upload/$realname");
     echo "Upload Filename: " . $HTTP_POST_FILES['userfile']['name'];
  }
  else{
     echo "Upload not complete";
   }
?>
