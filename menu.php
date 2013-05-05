<?php 
include('config.inc'); 
$width =100;
$height = 100;

$home = "<a href=\"index.php\"><img  src=\"img/home.png\" alt=\"Book\" width=$width height=$height title=\"Home\"></a>" ;
$book ="<a href=\"book_list.php\"><img  src=\"img/book.png\" alt=\"Book\" width=$width height=$height></a>"; 
$book_all ="<a href=\"book_list_all.php\"><img  src=\"img/book.png\" alt=\"Book\" width=$width height=$height title=\"Book\"></a>"; 
$bs = "<a href=\"book_search.php\"><img  src=\"img/book.png\" alt=\"Book\" width=$width height=$height title=\"Book\"></a>"; 
$login ="<a href=\"member/login.php\"><img  src=\"img/login.png\" alt=\"login\" width=$width height=$height title=\"book sheach\"></a>"; 
$regit ="<a href=\"register.php\"><img  src=\"img/regit.png\" alt=\"regit\" width=$width height=$height title=\"regit\"></a>";
$contact ="<a href=\"contact_form.php\"><img  src=\"img/contact.png\" alt=\"contact\" width=$width height=$height title=\"contact\"></a>";  

$basket ="<a href=\"member/basket_show.php\"><img  src=\"img/basket.png\" alt=\"Basket\" width=$width height=$height title=\"basket\"></a>";
$order_list ="<a href=\"member/order_list.php\"><img  src=\"img/order.png\" alt=\"order_list\" width=$width height=$height title=\"order\"></a>"; 
$payment ="<a href=\"member/payment_form.php\"><img  src=\"img/payment.png\" alt=\"payment\" width=$width height=$height title=\"payment\"></a>";
$profile ="<a href=\"member/member_detail.php\"><img  src=\"img/profile.png\" alt=\"Profile\" width=$width height=$height title=\"profile\"></a>";  
$logout ="<a href=\"member/logout.php\"><img  src=\"img/logout.png\" alt=\"logout\" width=$width height=$height title=\"logout\"></a>"; 

/***------------------------- member  --------------------**/

$home_member = "<a href=\"../index.php\"><img  src=\"../img/home.png\" alt=\"Home\" width=$width height=$height title=\"Home\"></a>" ;
$book_all_member ="<a href=\"../book_list_all.php\"><img  src=\"../img/book.png\" alt=\"Book_All\" width=$width height=$height title=\"Book\"></a>";
$basket_member ="<a href=\"basket_show.php\"><img  src=\"../img/basket.png\" alt=\"Basket\" width=$width height=$height title=\"Basket\"></a>";
$order_list_member ="<a href=\"order_list.php\"><img  src=\"../img/order.png\" alt=\"order_list\" width=$width height=$height title=\"Order\"></a>"; 
$payment_member ="<a href=\"payment_form.php\"><img  src=\"../img/payment.png\" alt=\"payment\" width=$width height=$height title=\"Payment\"></a>";
$profile_member ="<a href=\"member_detail.php\"><img  src=\"../img/profile.png\" alt=\"Profile\" width=$width height=$height title=\"Profile\"></a>";  
$logout_member ="<a href=\"logout.php\"><img  src=\"../img/logout.png\" alt=\"logout\" width=$width height=$height title=\"Logout\"></a>"; 
?>