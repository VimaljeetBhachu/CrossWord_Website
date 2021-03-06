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
<title>Admin Books Search</title>
  <link rel="icon" href="../images/favicon.png"/>
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
        <li><i class="fa fa-phone"></i> +(91)1800110081</li>
        <li><i class="fa fa-envelope-o"></i> crossbooks@gmail.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
        <li><a href="home_admin.php"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="logout.php">Logout</a></li>
        <li><a href="#"></a></li>
      </ul>
    </div>
  </div>
</div>
<div class="bgded overlay" style="background-image:url('../images/demo/backgrounds/2.jpg');"> 
  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <div id="logo" class="fl_left">
        <h1 style="text-shadow: 2px 2px 5px black;"><a href="#">CROSSWORD</a></h1>
        <p style="text-shadow: 2px 2px 5px black;">----Online Book Shop----</p>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="bview.php">Back</a></li>
          <li><a class="drop" href="#">Operations</a>
            <ul>
              <li><a href="#">View</a><ul><li><a href="admin.php">View Users</a></li><li><a href="bview.php">View Books</a></li><li><a href="b_ordered_view.php">View Orders</a></li></ul></li>
              <li><a href="#">Add</a><ul><li><a href="addp.php">Add User</a></li><li class="active"><a href="b_add.php">Add Book</a></li></ul></li>
              <li><a href="#">Update</a><ul><li><a href="updatep.php">Update User</a></li><li><a href="b_update.php">Update Book</a></li></ul></li>
              <li><a href="#">Search</a><ul><li><a href="searchp.php">Search User</a></li><li class="active"><a href="b_search.php">Search Book</a></li></ul></li>
              <li><a href="#">Delete</a><ul><li><a href="deletep.php">Delete User</a></li><li><a href="b_delete.php">Delete Book</a></li></ul></li>
            </ul>
          </li>
        </ul>
    </header>
  </div>
  <div id="breadcrumb" class="hoc clear">
    <ul>
      <li><a href="home_admin.php">Home</a></li>
      <li><a href="#"> Admin Books Search</a></li>
    </ul>
  </div>
</div>
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <div class="content">
      <h1 style="margin-left: 420px; font-family: monospace; font-weight: bold; text-decoration: underline; color: #368BC1;">Book Search</h1>
       <div class="scrollable">
      
  <div id="comments">
    <form action="book_search.php" method="post">
      <table style="width: 200px; margin-left: 400px;">
        <tbody>
          <tr>
            <th style="text-align: center;">ID</th>
          </tr>
          <tr>
            <td><input type="text" name="Author" id="Author" value="" placeholder="Search by ID"></td>
          </tr>
        </tbody>
      </table>
        <div style="float: left; padding-left: 425px;">
            <input style="background-color: #4863A0; color: white;" type="submit" name="Search" value="Search">
        </div>    
    </form>
  </div>
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<div class="bgded overlay" style="background-image:url('../images/demo/backgrounds/main.jpg');">
  <div class="wrapper row4">
    <footer id="footer" class="hoc clear">
      <div class="one_quarter first">
        <h6 class="title" style="color: orange; font-family: monospace; font-weight: bold; text-align: center;">Briefing the Project</h6>
        <p style="">The motive of this project is to make students understand the working and stucture of a website and for there practice with some queries.</p>
        <p>This site is purely work of Fiction any thing that disturbs you or demotivates u is purely your concern.</p>
      </div>
      <div class="one_quarter">
        <h6 class="title" style="font-family: monospace; text-align: center; color: #4863A0;">Local Office</h6>
        <ul class="nospace linklist contact">
          <li><i class="fa fa-map-marker"></i>
            <address>
            Manav Heritage, Indrapuri colony Bhawarkua ,Indore
            </address>
          </li>
          <li><i class="fa fa-phone"></i> +(91) 89669 10101<br>
            +(91) 87708 67310</li>
          <li><i class="fa fa-fax"></i> +(91)1800110081</li>
          <li><i class="fa fa-envelope-o"></i> crossbooks@gmail.com</li>
        </ul>
      </div>
    </footer>
  </div>
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