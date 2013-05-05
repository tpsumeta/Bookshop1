<?php 

/* 

    show_image.php 
*/ 

$imageURL = stripslashes($imageURL); 

$imgSize = getimagesize($imageURL, $info); 

$imgW = $imgSize[0]; 

$imgH = $imgSize[1]; 

echo "$imgW<br>$imgH<br>"; 

echo "<html>\n<head><title>VickyDevine: Image Detail.</title>\n"; 

echo "<SCRIPT type='text/Javascript'>\n"; 
echo "<!--\nif ((parseInt(navigator.appVersion)>3)) {top.resizeTo('$imgW','$imgH')}\;\n"; 
echo "//-->\n</SCRIPT>"; 

echo "</head>\n"; 

echo "<body>\n"; 

echo "<img src=\"./$imageURL\" border='0'>";

echo "</body>\n</html>"; 

?>  