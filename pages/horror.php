<?php
session_start();
if(!isset($_SESSION["sess_user"])){
    header("Location: ../newlogin.html");
}
else
{
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="../images/favicon.png"/>
<title>Horror</title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style type="text/css">
</style>
</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <div class="fl_left">
      <ul class="nospace">
        <li><i class="fa fa-phone"></i>+(91)1800110081</li>
        <li><i class="fa fa-envelope-o"></i> crossword@gmail.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
        <li><a href="..\edited.php"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="logout.php">Log Out</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="bgded overlay" style="background-image:url('../images/demo/backgrounds/horror.jpg');"> 
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <div id="logo" class="fl_left">
        <h1 style="text-shadow: 2px 2px 4px white;">HORROR AND SCARY</h1>
        <p style="text-shadow: 2px 2px 4px white;">C R O S S W O R D</p>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="..\edited.php">Home</a></li>
          <li class="active"><a class="drop" href="#">Zoners</a>
            <ul>
              <li><a href="literature.php">Literature</a></li>
              <li><a href="scifi.php">Sci-Fi</a></li>
              <li class="active"><a href="#">Horror</a></li>
              <li><a href="kids.php">Kids</a></li>
              <li><a href="thriller.php">Thriller & Fantasy</a></li>
            </ul>
          </li>
          <li><a href="shopping_cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>  cart</a></li>
        </ul>
      </nav>
    </header>
  </div>
  <div id="breadcrumb" class="hoc clear"> 
    <ul>
    </ul>
  </div>
</div>
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <div class="content"> 
      <div id="gallery">
        <figure >
          <header class="heading" style="font-size: 40px; font-family: monospace; font-weight: bold; color: #368BC1; padding-left: 275px;">Book your Book here !</header>
          <ul class="nospace clear">
            <li class="one_quarter first" id="5"><a href="horror_1.php"><img src="../images/demo/backgrounds/02.jpg"  alt=""></a></li>
            <li class="one_quarter" id="6"><a href="horror_2.php"><img src="../images/demo/backgrounds/10.jpg" alt=""></a></li>
            <li class="one_quarter" id="7"><a href="horror_3.php"><img src="../images/demo/backgrounds/11.jpg" alt=""></a></li>
            <li class="one_quarter" id="8"><a href="horror_4.php"><img src="../images/demo/backgrounds/12.jpg" alt=""></a></li>
            <li class="one_quarter first"><a href="horror_5.php"><img src="../images/demo/backgrounds/13.jpg" alt=""></a></li>
            <li class="one_quarter"><a href="horror_6.php"><img src="../images/demo/backgrounds/03.jpg" alt=""></a></li>
            <li class="one_quarter"><a href="horror_7.php"><img src="../images/demo/backgrounds/04.jpg" alt=""></a></li>
            <li class="one_quarter"><a href="horror_8.php"><img src="../images/demo/backgrounds/05.jpg" alt=""></a></li>
            <li class="one_quarter first"><a href="horror_9.php"><img src="../images/demo/backgrounds/06.jpg" alt=""></a></li>
            <li class="one_quarter"><a href="horror_10.php"><img src="../images/demo/backgrounds/07.jpg" alt=""></a></li>
            <li class="one_quarter"><a href="horror_11.php"><img src="../images/demo/backgrounds/08.jpg" alt=""></a></li>
            <li class="one_quarter"><a href="horror_12.php"><img src="../images/demo/backgrounds/09.jpg" alt=""></a></li>
          </ul>
          <figcaption style="padding-left: 475px;">PAGE 1</figcaption>
        </figure>
      </div>
    </div>
    <!-- / main body -->
  </main>
</div>
<div class="bgded overlay" style="background-image:url('../images/demo/backgrounds/horror.jpg');"> 
  <div class="wrapper row5">
    <div id="copyright" class="hoc clear"> 
      <p class="fl_left"> &copy; 2018 - All Rights Reserved - <a href="#">Crossword.in</a>, Inc. or its affiliates</p>
      <p class="fl_right">Designed by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">VjS-b & Team.</a></p>
    </div>
  </div>
</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
<?php
}
?>