<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
error_reporting(0);
session_start();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/img/logofinal.png" type="image/icon type">
    <title>BIGG'S MENU</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="css/font-awesome.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="footer.css" rel="stylesheet">
 </head>

<body>
           <!--header starts-->
        <header id="header" class="header-scroll top-header headrom headerBg">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a href="#default" class="navbar-brand"><img src="images/img/logofinal.png" alt="logo" width="70" height="40"></a>
                    <a class="navbar-brand" href="index.php">BIGG'S DINER MENU</a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="menu.php">Menu <span class="sr-only"></span></a> </li>
                            
							<?php
						if(empty($_SESSION["user_id"]))
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active greenBg" style="padding: 10px 15px; border-radius: 3rem">Signup</a> </li>';
							}
						else
							{
									
									
										echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">your orders</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">logout</a> </li>';
							}

						?>
							 
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- /.navbar -->
        </header>
        <div class="page-wrapper">
            <!-- top Links -->
            <div class="top-links">
                <div class="container">
                    <ul class="row links">
                       
                        <li class="col-xs-12 col-sm-4 link-item active"><span>1</span><a href="menu.php">Choose your food category</a></li>
                        <li class="col-xs-12 col-sm-4 link-item"><span>2</span><a href="#">Pick your favorite food</a></li>
                        <li class="col-xs-12 col-sm-4 link-item"><span>3</span><a href="#">Order and Pay online</a></li>
                    </ul>
                </div>
            </div>
            <!-- end:Top links -->
            <!-- start: Inner page hero -->
            <div class="inner-page-hero bg-image" data-image-src="images/image4.jpg">
                <div class="container"> </div>
                <!-- end:Container -->
            </div>
            <div class="result-show">
                <div class="container">
                    <div class="row">
                       
                       
                    </div>
                </div>
            </div>
            <!-- //results show -->
            <section class="restaurants-page">
            <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-3">
                          
                          
                            <div class="widget clearfix">
                                <!-- /widget heading -->
                                <div class="widget-heading">
                                    <h3 class="widget-title text-dark">
                                 Popular tags
                              </h3>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="widget-body">
                                    <ul class="tags">
                                        <li> <a href="menu.php" class="tag">
                                    Chicken Meals
                                    </a> </li>
                                        <li> <a href="menu.php" class="tag">
                                    Sandwich
                                    </a> </li>
                                        <li> <a href="menu.php" class="tag">
                                    Burgers
                                    </a> </li>
                                        <li> <a href="menu.php" class="tag">
                                    Chicken Deals
                                    </a> </li>
                                        <li> <a href="menu.php" class="tag">
                                    Pasta
                                    </a> </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end:Widget -->
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-9">
                            <div class="bg-gray restaurant-entry">
                                <div class="row">
								<?php $ress= mysqli_query($db,"select * from menu");
									      while($rows=mysqli_fetch_array($ress))
										  {
													
						
													 echo' <div class="col-sm-12 col-md-12 col-lg-8 text-xs-center text-sm-left">
															<div class="entry-logo">
																<a class="img-fluid" href="dishes.php?res_id='.$rows['rs_id'].'" > <img src="admin/Res_img/dishes'.$rows['image'].'" alt="Food logo"></a>
															</div>
															<!-- end:Logo -->
															<div class="entry-dscr">
																<h5 class="poppinsFont"><a href="dishes.php?res_id='.$rows['rs_id'].'" >'.$rows['title'].'</a></h5> <span>'.$rows['address'].' <a href="#">...</a></span>
																<ul class="list-inline">
																	<li class="list-inline-item"><i class="fa fa-check"></i> Min PHP 10,00</li>
																	<li class="list-inline-item"><i class="fa fa-motorcycle"></i> 30 min</li>
																</ul>
															</div>
															<!-- end:Entry description -->
														</div>
														
														 <div class="col-sm-12 col-md-12 col-lg-4 text-xs-center">
																<div class="right-content bg-white">
																	<div class="right-review">
																		<div class="rating-block"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
																		<p> 145 Reviews</p> <a href="dishes.php?res_id='.$rows['rs_id'].'" class="btn ctaBtn">View Menu</a> </div>
																</div>
																<!-- end:right info -->
															</div>';
										  }
						
						
						?>
                                    
                                </div>
                                <!--end:row -->
                            </div>
                         
                            
                                
                            </div>
                          
                          
                           
                        </div>
                    </div>
                </div>
            </section>
            
                    <!-- Featured restaurants ends -->
                        <section class="app-section">
                            <div class="app-wrap">
                                <div class="container">
                                    <div class="row text-img-block text-xs-left">
                                        <div class="container">
                                            <div class="col-xs-12 col-sm-5 right-image text-center">
                                                <figure> <img src="images/2.png" alt="Right Image" class="img-fluid"> </figure>
                                            </div>
                                            <div class="col-xs-12 col-sm-7 left-text">
                                                <h3>Download BIGG'S DINER APP</h3>
                                                <p>You can now find our menu on our mobile applition wherever you are. Make your orders we will find you!</p>
                                                <div class="social-btns">
                                                    <a href="#" class="app-btn apple-button clearfix">
                                                        <div class="pull-left"><i class="fa fa-apple"></i> </div>
                                                        <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">App Store</span> </div>
                                                    </a>
                                                    <a href="#" class="app-btn android-button clearfix">
                                                        <div class="pull-left"><i class="fa fa-android"></i> </div>
                                                        <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">Play store</span> </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>



                <!-- FOOTER SECTION ----------------------- -->
                <section class="footerSection">
                    <div class="contentContainer container">
                        <div class="footerIntro">
                            <div class="footerLogoDiv">
                                <span class="hotelName">
                                    Bigg's Dinner
                                </span>
                            </div>
                            <p>Bigg's Diner brings good food and great fun, along with excellent value coming together in one seamless value-packed dining experience. For Naga City locals, big meals can be found at every corner of the city, at Bigg's Diner.</p>

                            <div class="footContactDetails">
                                <div class="info">
                                    <div class="iconDiv"><i class='bx bx-mail-send' ></i></div>
                                    <span>biggs_dinner@gmail.com</span>
                                </div>

                                <div class="info">
                                    <div class="iconDiv"><i class='bx bxs-phone-outgoing'></i></div>
                                    <span>+639120225970</span>
                                </div>

                                <div class="info">
                                    <div class="iconDiv"><i class='bx bx-current-location' ></i></div>
                                    <span>Old Albay District, Legazpi City, Bicol, Philippines, 4500 Legazpi, Philippines</span>
                                </div>
                            </div>
                        </div>

                        <div class="linksDiv">
                            <div class="footersectionTitle">
                                <h5>USEFUL LINKS</h5>
                            </div>
                            <ul>
                                <span>Careers</span>
                                <span>Offers</span>
                                <span>Stuff</span>
                                <span>Outlets</span>
                                <span>Affiliation</span>
                                <span>FAQs</span>
                            </ul>
                        </div>

                        <div class="linksDiv">
                            <div class="footersectionTitle">
                                <h5>OUR SERVICES</h5>
                            </div>
                            <ul>
                                <span>Order Online</span>
                                <span>Free Home Delivery</span>
                                <span>Return Money</span>
                                <span>Delivery On Place</span>
                                <span>Wishlist</span>
                                <span>Discount</span>
                            </ul>
                        </div>

                        <div class="linksDiv footerForm">
                            <div class="footersectionTitle">
                                <h5> OUR NEWSLETTER</h5>
                            </div>
                            
                            <form action="">
                                <label> Subscribe To Our Newsletter...</label>
                                <input type="text" placeholder="Name" required>
                                <input type="email" placeholder="Email" required>
                                <button type="submit">Submit</button>
                            </form>
                        </div>

                    </div>
                    <div class="copyrightDiv">
                    &copy; 2020 Bigg's Dinner. All Rights Reserved.
                    </div>
                </section>
    
        </div>
  
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>