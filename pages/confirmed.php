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
<title>Booking Confirmed</title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
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
        <li><i class="fa fa-envelope-o"></i> crossword@gmail.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
        <li><a href="../edited.php"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="policy.php">Our Policy</a></li>
        <li><a href="logout.php">Logout</a></li>
        <li><a href="#"></a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('../images/feature2.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1 style="text-shadow: 2px 2px 5px black;">CROSSWORD</h1>
        <p style="text-shadow: 2px 2px 5px black;">----Online Book Shop----</p>
      </div>
      <!-- ################################################################################################ -->
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="shopping_cart.php">Back</a></li>
          <li><a class="drop" href="#">Zoners</a>
            <ul>
              <li><a href="literature.php">Literature</a></li>
              <li><a href="scifi.php">Sci-Fi</a></li>
              <li><a href="horror.php">Horror</a></li>
              <li><a href="kids.php">Kids</a></li>
              <li><a href="thriller.php">Thriller & Fantasy</a></li> 
            </ul>
          </li>
          <li class="active"><a href="shopping_cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Billing Cart</a></li>
        </ul>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul>
    </ul>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
      <h1 style="margin-left: 400px; font-family: monospace; font-weight: bold;"> Booking Confirmed</h1>
      
      <div class="scrollable">
        <table>
          <tbody>
            <?php
              $con=mysqli_connect("Localhost","root","","bookstore");
              // Check connection
              if (mysqli_connect_errno())
              {
                 echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }
              else
              {
                $result = mysqli_query($con,"SELECT * FROM confirm");
                $cnt=0;
                while($row = mysqli_fetch_array($result))
                 {
                    $cnt = $cnt + 1;
                 }
                 if($cnt == "null")
                 {
                   ?><!DOCTYPE html>
                  
                   <body>
                   <div style="padding-left: 440px; font-family: monospace; font-weight: bold; font-size: 20px;">Cart Empty</div>
                   <h2 style="padding-left: 230px;">Thank you for Booking with crossword. Hope u Liked it</h2>
                   </body>
                   </html>
                   <?php
                 }
                 else
                 {   
                $result = mysqli_query($con,"SELECT * FROM confirm");
                echo "<table border='1'>
                <tr>
                <th>Sno</th>
                <th>Order ID</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Books</th>
                <th>Email</th>
                <th>Address</th>
                <th>City</th>
                <th>Price</th>
                <th>Total</th>
                </tr>";
                 $sum=0;
                 $count=0;
                 while($row = mysqli_fetch_array($result))
                 {

                    echo "<tr>";
                    $count = $count + 1;
                    echo "<td>" . $count . "</td>";
                    echo "<td>" . $row['Sno'] . "</td>";
                    echo "<td>" . $row['Firstname'] . "</td>";
                    echo "<td>" . $row['Lastname'] . "</td>";
                    echo "<td>" . $row['Book_Ordered'] . "</td>";
                    echo "<td>" . $row['Email'] . "</td>";
                    echo "<td>" . $row['Address'] . "</td>";
                    echo "<td>" . $row['City'] . "</td>";
                    echo "<td>" . $row['Price'] . "</td>";
                    $sum += $row['Price'];
                    echo "<td>" . $sum . "</td>"; 
                  
                    
                    echo "</tr>";
                 }
                           
                   
                 }
                 echo "</table>";
                
              }
              mysqli_close($con);
             ?>
          </tbody>
        </table>
      </div>
      <div id="comments">
        <?php
        if ($cnt == "null") 
        {
           echo "";
        }
        else
        {
          ?><!DOCTYPE html>
          <html>
          <body>
          </body>
          </html><?php
        }
        ?>
        

      </div>
      <div>
        <form action="backup.php" method="post">
          <div style=" padding-left: 470px;">
            <input style="background-color: #4863A0; color: white; width: 100px; height: 30px;" type="submit" name="Order" value="Order">
          </div>
        </form>
      </div>
   
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Footer Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('../images/feature2.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row4">
    <footer id="footer" class="hoc clear" > 
      <!-- ################################################################################################ -->
      <div class="one_quarter first">
        <h6 class="title" style="color: orange; font-family: monospace; font-weight: bold; text-align: center;">Briefing the Project</h6>
        <p style="">The motive of this project is to make students understand the working and stucture of a website and for there practice with some queries.</p>
        <p>This site is purely work of Fiction any thing that disturbs you or demotivates u is purely your concern.</p>
      </div>
      <div class="one_quarter">
        <h6 class="title" style="font-family: monospace; text-align: center;">Local Office</h6>
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
      

      <!-- ################################################################################################ -->
    </footer>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
   <div class="wrapper row5">
    <div id="copyright" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <p class="fl_left"> &copy; 2018 - All Rights Reserved - <a href="#">Crossword.in</a>, Inc. or its affiliates</p>
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
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
<?php
}
?>