<html>
<head>
<?php include('code/config.php'); ?>
<title>BookShopOnline</title>
<link rel="stylesheet" href="CSS/style.css" type="text/css"> 
</head>
<body>
<div class="container">
  <header>
    <a href="#"><img src="" alt="Insert Logo Here" width="180" height="90" id="Insert_logo" style="background-color: #C6D580; display:block;" /> </a>
  </header>
  <div class="sidebar1">
    <ul class="nav">
      <li><a href="#">Home</a></li>
      <li><a href="#">Login</a></li>
      <li><a href="#">Books</a></li>
      <li><a href="#">About Us</a></li>
    </ul>
    <aside>
      <p align="center" style="font-size:20px"> หมวดหมู่หนังสือ</p>
      <p>
      </p>
</aside>
  <!-- end .sidebar1 --></div>
  <article class="content">
<h1>BookShopOnline</h1>
    <section>
     <h2>หนังสือขายดี</h2>
     <p>&nbsp;</p>
      <p>
      <?php  include('member/member_detail.php');?>
      </p>
    </section>
    <section>
      <h2>หนังสือออกใหม่</h2>
    </section>
    <section>
      <h2>หนังสือแนะนำ</h2>
      <p></p>
</section>
  <!-- end .content --></article>
  <aside>
    <h4>Banner</h4>
  </aside>
  <footer><center><?php echo  "Desing By Programmer Indy Group";?></center></footer>
  <!-- end .container --></div>
</body>
</html>