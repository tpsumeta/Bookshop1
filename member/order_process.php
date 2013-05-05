<?php
include('../config.inc');
include('members_only.php');
$user = $_SESSION["valid_user"];
$result = mysqli_query($con, "SELECT ID_Member FROM bso_member WHERE Us_Member='{$user}';");  //เลือก ID_Member
$row = mysqli_fetch_array($result); // ดึงค่ามาจาาแถว
$ID = $row['ID_Member'];
echo "ID Member = ".$ID."<br>";

$sql2 = mysqli_query($con,"SELECT MIN(ID_Basket) FROM bso_basket WHERE ID_Member='{$ID}'");
$row2 = mysqli_fetch_array($sql2);
$ID_Order = $row2['MIN(ID_Basket)'];
echo "ID Order = ".$ID_Order."<br>";

$date = date("H:i:s m/d/Y");
$de_status = $_GET["status"];


$sql4 = "INSERT INTO `bso_order` 
SELECT '{$ID_Order}',bso_basket.ID_Basket, bso_basket.ID_Member , bso_basket.ID_Book, bso_basket.Number, bso_book.Va_Book,'{$date}','{$de_status}'
FROM bso_basket , bso_book
WHERE ID_Member='{$ID}' AND bso_basket.ID_Book=bso_book.ID_Book ";
//สังรัน sql4
$result = mysqli_query($con, $sql4);

// header("location:order_list.php");
?>