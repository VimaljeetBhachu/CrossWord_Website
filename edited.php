<!--Template Name: crosstown
File Name: home.html
Author Name: ThemeVault
Author URI: http://www.themevault.net/
License URI: http://www.themevault.net/license/-->
<?php
session_start();
if(!isset($_SESSION["sess_user"])){
    header("Location: newlogin.html");
}
else
{
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/favicon.png"/>
        <title>CrossWord</title>

        <link rel="icon" href="images/favicon.png"/>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="css/scrolling-nav.css" rel="stylesheet" type="text/css" />
        <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="fonts/website-font/stylesheet.css" rel="stylesheet" type="text/css" />
        <!--        <link href="css/bxslider.css" rel="stylesheet" type="text/css" />-->
        <link href="owl-carousel/owl.carousel.css" rel="stylesheet">

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!--        <script src="js/bxslider.js" type="text/javascript"></script>-->
        <script src="js/custom.js" type="text/javascript"></script>
        <script src="owl-carousel/owl.carousel.min.js"></script>
        <style type="text/css">
            #search
            {
                padding-bottom: 9px;
                padding-top: 9px;
                background-color: white;
                color: black;
            }
            .tab-image text-center{
            	width: 100px;
            	height: 100px;
            } 
        </style>

    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
        <div id="mypage">
            <header>
                <div class="tv-top-header">
                    <div class="container">
                        <div class="row">
                            <nav class="navbar navbar-default navbar-fixed-top">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="navbar-header">
                                                <button data-target="#myNavbar" data-toggle="collapse" class="navbar-toggle" type="button">
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>                        
                                                </button>
                                                <a class="navbar-brand" href="home.html"><h2>THE<span>CROSSWORD</span></h2></a>
                                            </div>
                                            <div id="myNavbar" class="collapse navbar-collapse">
                                                <ul class="nav navbar-nav navbar-right">
                                                    <li><a href="#myPage">Home</a></li>                               
                                                    <li><a href="#service">Zoners</a></li>
                                                    <li><a href="#contact">Contact</a></li>
                                                    <li><a href="logout.php">Logout</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="tv-banner">
                    <div class="tv-banner-content">
                        <h1>Welcome<br><?=$_SESSION['sess_user'];?></h1>
                        <h4>Get books of your choice<span>Anywhere, Anytime.</span></h4>
                        
                    </div>
                </div>
            </header>
            <section id="pics">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-6 tv-no-padding width-100">
                            <div class="tv-features-content">
                                <h4>Latest Collection</h4>
                                <div class="tv-feature-img">
                                    <img src="images/feature1.jpg" alt="feature" class="img-responsive">
                                    <div class="overlay">
                                        <div class="text">
                                            <p>We have a world class collection of brilliant books from all over the world updated almost everyday!!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="col-md-3 col-sm-6 col-xs-6 tv-no-padding width-100">
                            <div class="tv-features-content">
                                <h4>Easy Searching</h4>
                                <div class="tv-feature-img">
                                    <img src="images/feature2.jpg" alt="feature" class="img-responsive">
                                    <div class="overlay">
                                        <div class="text">
                                            <p>We provide very easy way to search any book just by writing the name of book or author name.</p>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 tv-no-padding width-100">
                            <div class="tv-features-content">
                                <h4>Books For All</h4>
                                <div class="tv-feature-img">
                                    <img src="images/feature3.jpg" alt="feature" class="img-responsive">
                                    <div class="overlay">
                                        <div class="text">
                                            <p>At crossworld you dont need to worry about the age of yours!!We have books for everyone</p>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 tv-no-padding width-100">
                            <div class="tv-features-content">
                                <h4>Free home delievery</h4>
                                <div class="tv-feature-img">
                                    <img src="images/feature4.jpg" alt="feature" class="img-responsive">
                                    <div class="overlay">
                                        <div class="text">
                                            <p>Choose and buy!!The book will be at your doorsteps</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="service" class="tv-paddingT100">
                <div class="container">
                    <div class="row">
                        <div class="tv-block-heading">
                            <h2>Our Zoners</h2>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <ul class="tv-services-list">
                            <li class="col-md-3 col-sm-6 col-xs-6 width-100perc">
                                <div class="tv-service-content">
                                    <h4 id="scifi"><a href="pages/scifi.php">SCI-FI</a></h4>
                                    <hr>
                                    <p>Science is next to god!!Keeping that in 
                                    mind we have a very tremendous collection of
                                    for the ones who
                                    are craving for more knowledge. </p>
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-6 col-xs-6 width-100perc">
                                <div class="tv-service-content">
                                    <h4 id="horror"><a href="pages\horror.php">Horror</a></h4>
                                    <hr>
                                    <p>For the who believe fear is the
                                    only cool!!Do check our horror section
                                    maybe you will change your mind!</p>
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-6 col-xs-6 width-100perc">
                                <div class="tv-service-content">
                                    <h4 id="literature"><a href="pages/literature.php">Literature</a></h4>
                                    <hr>
                                    <p>From Shakespeare to Arundhati Roy and
                                     Rabindranath tagore we have everything
                                    that a literature lover will love</p>
                                </div>
                            </li>
                            <li class="col-md-2 col-sm-6 col-xs-6 width-100perc">
                                <div class="tv-service-content">
                                    <h4 id="kids"><a href="pages\kids.php">Kids</a></h4>
                                    <hr>
                                    <p>For the future rockstars we have books that
                                    will give them knowledge,fun and 
                                    creativity.</p>
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-6 col-xs-6 width-100perc">
                                <div class="tv-service-content">
                                    <h4 id="thriller"><a href="pages/thriller.php">Thrillers and Fantasy</a></h4>
                                    <hr>
                                    <p>For the ones who loves to live with thrills,
                                     this section is made specially for them.
                                     You will love it for sure!!</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
               
                </div>
            </section>
            <section id="gallery" class="tv-paddingT100">
               
            </section>
            <section id="trainer" class="tv-paddingT100">
                <div class="container">
                    <div class="row">
                        <div class="tv-block-heading">
                            <h2>Our Team</h2>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-6 width-100perc">
                            <div class="tv-trainer-image text-center">
                                <img src="images/vim.jpg" class="img-responsive" alt="trainer">
                                <div class="tv-trainer-hover">
                                    <div class="tv-trainer-info">
                                        <h3>Vimaljeet Singh</h3>  
                                        <p>Project Leader</p>
                                        <ul class="tv-trainer-sociallinks">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-google" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 width-100perc">
                            <div class="tv-trainer-image text-center">
                                <img src="images/yash.png" class="img-responsive" alt="trainer">
                                <div class="tv-trainer-hover">
                                    <div class="tv-trainer-info">
                                        <h3>Yash Porwal</h3>  
                                        <p>Designer, Developer</p>
                                        <ul class="tv-trainer-sociallinks">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-google" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 width-100perc">
                            <div class="tv-trainer-image text-center">
                                <img src="images/suri.png" class="img-responsive" alt="trainer">
                                <div class="tv-trainer-hover">
                                    <div class="tv-trainer-info">
                                        <h3>Surendra Singh</h3>  
                                        <p>Designer</p>
                                        <ul class="tv-trainer-sociallinks">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-google" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 width-100perc">
                            <div class="tv-trainer-image text-center">
                                <img src="images/saurabh.jpg" class="img-responsive" alt="trainer">
                                <div class="tv-trainer-hover">
                                    <div class="tv-trainer-info">
                                        <h3>Saurabh Yadav</h3>  
                                        <p>Designer</p>
                                        <ul class="tv-trainer-sociallinks">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-google" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer id="contact" class="tv-paddingT100">
                <div class="tv-footer-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="tv-footer-about">
                                  
                                    <ul class="tv-footer-sociallinks">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-google" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="tv-footer-links">
                                    <h2>Our Contact</h2>
                                    <div class="tv-contact-list">
                                        <ul>
                                            <li><p><i class="fa fa-paper-plane"></i>303,Manav Heritage,Indrapuri,Indore[India]</p></li>
                                            <li><i class="fa fa-phone"></i>+(91)1800110081</a></li>
                                            <li><i class="fa fa-envelope"></i>crossword@gmail.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </footer>
        </div>
        <script>
            $(document).ready(function () {
                // Add smooth scrolling to all links
                $("#myNavbar a").on('click', function (event) {

                    // Make sure this.hash has a value before overriding default behavior
                    if (this.hash !== "") {
                        // Prevent default anchor click behavior
                        event.preventDefault();

                        // Store hash
                        var hash = this.hash;

                        // Using jQuery's animate() method to add smooth page scroll
                        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 800, function () {

                            // Add hash (#) to URL when done scrolling (default click behavior)
                            window.location.hash = hash;
                        });
                    } // End if
                });
            });
        </script>
        <script>
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
                acc[i].onclick = function () {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.maxHeight) {
                        panel.style.maxHeight = null;
                    } else {
                        panel.style.maxHeight = panel.scrollHeight + "px";
                    }
                }
            }
        </script>
        <script>
            $(document).ready(function () {

                $("#owl-demo").owlCarousel({
                    items: 3,
                    lazyLoad: true,
                    navigation: true
                });

            });
        </script>
        <!--        <script>
                    $('.related-product-slider').bxSlider({
                        pager: false,
                        //controls:true,
                        slideMargin: 30,
                        minSlides: 3,
                        maxSlides: 3,
                        mode: 'horizontal',
                        slideWidth: 350,
                        infiniteLoop: true,
                        moveSlides: 1
                    });
                </script>-->
        <a id="back-to-top" class="scrollTop tv-back-to-top" href="javascript:void(0);" style="display: none;">
            <i class="fa fa-angle-up" aria-hidden="true"></i>
        </a>
    </body>
</html>
<?php
}
?>