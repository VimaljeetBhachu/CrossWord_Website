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
<title>Kids</title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
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
        <li><a href="../edited.php"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="logout.php">LogOut</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="bgded overlay" style="background-image:url('../images/demo/backgrounds/15.jpg');"> 
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <div id="logo" class="fl_left">
        <h1 style="padding-left: 3px; text-shadow: 2px 2px 5px black;">FUN FOR KIDS</h1>
        <p style=" text-shadow: 2px 2px 5px black; padding-left: 3px;">C R O S S W O R D</p>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="../edited.php">Home</a></li>
          <li class="active"><a class="drop" href="#">Zoners</a>
            <ul>
              <li><a href="literature.php">Literature</a></li>
              <li><a href="scifi.php">Sci-Fi</a></li>
              <li><a href="horror.php">Horror</a></li>
              <li class="active"><a href="kids.php">Kids</a></li>
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
        <figure>
          <header class="heading" style="font-size: 40px; font-family: monospace; font-weight: bold; color: #368BC1; padding-left: 185px;">Book your Book here for kids   !</header>
          <ul class="nospace clear">
            <li class="one_quarter first" id="13"><a href="kids_1.php"><img src="../images/demo/backgrounds/16.jpg"  alt=""></a></li>
            <li class="one_quarter" id="14"><a href="kids_2.php"><img src="../images/demo/backgrounds/17.jpg" alt=""></a></li>
            <li class="one_quarter" id="15"><a href="kids_3.php"><img src="../images/demo/backgrounds/18.jpg" alt=""></a></li>
            <li class="one_quarter" id="16"><a href="kids_4.php"><img src="../images/demo/backgrounds/19.jpg" alt=""></a></li>
            <li class="one_quarter first"><a href="kids_5.php"><img src="../images/demo/backgrounds/20.jpg" alt=""></a></li>
            <li class="one_quarter" id="21"><a href="kids_6.php"><img src="../images/demo/backgrounds/21.gif" alt=""></a></li>
            <li class="one_quarter"><a href="kids_7.php"><img src="../images/demo/backgrounds/22.jpg" alt=""></a></li>
            <li class="one_quarter"><a href="kids_8.php"><img src="../images/demo/backgrounds/23.jpg" alt=""></a></li>
            <li class="one_quarter first"><a href="kids_9.php"><img src="../images/demo/backgrounds/24.jpg" alt=""></a></li>
            <li class="one_quarter"><a href="kids_10.php"><img src="../images/demo/backgrounds/25.jpg" alt=""></a></li>
            <li class="one_quarter"><a href="kids_11.php"><img src="../images/demo/backgrounds/26.jpg" alt=""></a></li>
            <li class="one_quarter"><a href="kids_12.php"><img src="../images/demo/backgrounds/27.jpg" alt=""></a></li>
          </ul>
          <figcaption style="padding-left: 475px;">PAGE 1</figcaption>
        </figure>
      </div>
    </div>
    <!-- / main body -->
  </main>
</div>
<div class="bgded overlay" style="background-image:url('../images/demo/backgrounds/15.jpg');"> 

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