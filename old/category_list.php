<?php  include('config.php'); 
echo "<table width=\"100%\" border=\"0\" cellpadding=\"5\" cellspacing=\"5\" align=\"center\" >";

     
$sql = mysqli_query($con,"SELECT * FROM `bso_book_category` LIMIT 1, 30 ");
            
                echo "<tr>";
                while($result1 = mysqli_fetch_array($sql))
                    {

                                echo "<td> ";
                                echo "<a href=\"book_list.php?ID_Ca={$result1['ID_Ca']}\">{$result1['Na_Ca']}</a>";
                                echo "</td>";
                            
                    }
                echo "</tr>";

 echo "</table>";
?>