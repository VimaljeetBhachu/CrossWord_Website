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
<title>Crossbooks.in</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="style1.css">
    <script type="text/javascript">
      
       function validate()
        {
      
            var Username=document.getElementById('Username').value;
            var Name=document.getElementById('Name').value;
            var Mobile=document.getElementById('Mobile').value;
            var Password=document.getElementById('Password').value;
            var ConfirmPassword=document.getElementById('ConfirmPassword').value;
            
            if(Username.length<1)
            {
              alert("Username Is Required!!");
              return false;
            }
            if(Name.length<1)
            {
                alert("Name Is Required!!");
                return false;
            }
            if(Mobile.length<1)
            {
                alert("Mobile Is Required!!");
                return false;
            }
            if(Mobile.length!=10 && Mobile.length!=11)
            {
              alert("Enter proper Mobile No.");
              return false;
            }
            if(isNaN(Mobile))
            {
               alert("Only Enter Numeric Values");
               return false;              
            }
            if(Password.length<1)
            {
              alert("Password Is Required!!");
              return false;
            }
            if(ConfirmPassword.length<1)
            {
              alert("ConfirmPassword Is Required!!");
              return false;
            }
            if(Password!=ConfirmPassword)
            {
                alert("Passwords should match!!");
                return false;             
            }
            var reg=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if(reg.test(Username))
            {
                return true;       
            }
            else
            {
                alert("Enter Valid Username!!");
                return false;         
            }
                
        }
        
     </script>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace">
        <li><i class="fa fa-phone"></i> +(91)1800110081</li>
        <li><i class="fa fa-envelope-o"></i> crossbooks.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
        <li><a href="index.html"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Our Policy</a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/book.jpg');">
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.html">CROSSBOOKS</a></h1>
        <p>----Online Book Shop----</p>
      </div>
      <!-- ################################################################################################ -->
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.html">Home</a></li>
          <li><a class="drop" href="#">Aim</a>
            <ul>
              <li><a href="pages/gallery.html">Technologies</a></li>
              <li><a href="pages/full-width.html">Mission</a></li>
              <li><a href="pages/sidebar-left.html">Resources</a></li>
              <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
              <li><a href="pages/basic-grid.html">Basic Grid</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">Categories</a>
            <ul>
              <li><a href="#">Kids</a></li>
              <li><a class="drop" href="#">Novels</a>
                <ul>
                  <li><a href="#">Fiction</a></li>
                  <li><a href="#">Sci-Fi</a></li>
                  <li><a href="#">Thriller</a></li>
                </ul>
              </li>
              <li><a href="#">Literature</a></li>
            </ul>
          </li>
          <li><a href="#">Customer Service</a></li>
          <li><a href="#">Delete Account</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <p class="heading">Books For All</p>
      <h2 class="heading">Spend Some time reading</h2>
      <p>Lots of Amazing Books to Read and Enhance the Knowledge of Literature.</p>
      
      
    </article>
    <!-- ################################################################################################ -->
  </div>
  <div style="padding-top: 150px;">
    
  </div>
  <div class="mid">
     <form action="signinphp.php" method="get">
      <div class="login-box">
        <img src="avatar.png" class="avatar">
                    <h1 id="us">User Sign in Page</h1>
            <form action="login.php" action="menu.html" method="post">
            <p>
            <label id="un">Username<span>*</span></label>
            <input type="text" id= "Username" name="Username" placeholder="Enter Username or Email" required>
            </p>
            <p>
            <label id="n">Name<span>*</span></label>
            <input type="text" id="Name" name="Name" placeholder="Enter Name" required>
            </p>
            <p>
            <label id="m">Mobile<span>*</span></label>
            <input type="text" id="Mobile" name="Mobile" placeholder="Enter Mobile" required>
            </p>
            <p>
            <label id="p">Password<span>*</span></label>
            <input type="password" id="Password" name="Password" placeholder="Enter Password" required>
            </p>
            <p>
            <label id="cp">Confirm Password<span>*</span></label>
            <input type="password" id="ConfirmPassword" name="ConfirmPassword" placeholder="Confirm Password" required>
            </p>
            <input type="submit" id="sg" name="signin" value="Sign in" onclick="return validate()">
            
            
      </div>
     </form>
    
  </div>
  <!-- ################################################################################################ -->
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row5">
    <div id="copyright" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <p class="fl_left"> &copy; 2018 - All Rights Reserved - <a href="#">Crossbooks.in</a>, Inc. or its affiliates</p>
      <p class="fl_right">Designed by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">VjS-b & Team.</a></p>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Footer Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
<?php
}
?>