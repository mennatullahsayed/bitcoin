<?php



$connect=new mysqli("127.0.0.1", "bitcoin", "bitcoin", "bitcoin");
session_start();


if($_SERVER["REQUEST_METHOD"] == "POST"){
$username = mysqli_real_escape_string($connect, $_REQUEST['username']);
$psw=mysqli_real_escape_string($connect, $_REQUEST['psw']);
$_SESSION['login_user']=$psw;
//$q="SELECT * FROM `member` WHERE  `UserName` ='$username' ";	
//SELECT `id` `userName` `block` FROM `person` WHERE 
$q=mysqli_query($connect, "SELECT `id`, `userName` ,`block` FROM `person`   WHERE  `UserName` ='$username' AND `ID` ='$psw' AND `block`='1' AND `addUser` ='1' ");
$r=mysqli_num_rows($q);
$_SESSION['login_user']= $psw; 
if($username=='Admin'&& $psw=='Admin'){
header('location: addaccount.php');
 exit;	
}
 else if($r==1 && $q)
{
//header("location:homepage.php");
 
header('location:  userhome.php'); exit;

} else{
$q=mysqli_query($connect, "SELECT `id`, `userName` ,`block` FROM `person`   WHERE  `UserName` ='$username' AND `ID` ='$psw' AND `block`='1' AND `addUser` ='1' ");
$r=mysqli_num_rows($q);
if($r==1 && $q)
{
//header("location:homepage.php");
 
header('location:  userhome.php'); exit;

} else{
//UPDATE `person` SET `block`='2' WHERE id ='20170559'
$q=mysqli_query($connect, "UPDATE `person` SET `block`='0' WHERE id ='$psw' ");
}}
 }
?>

	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Bitcoin</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="#home">Home</a></li>
				          <li><a href="signup.php">sign up</a></li>
				          
							<li><form action="homepage.php" method = "POST">
      <input type="text" placeholder="type your User name" name="username">
      <input type="text" placeholder="type your ID" name="psw">
      <button formaction="homepage.php" type="submit">Login</button>
								<p>forget your password? <a href="contactus.php">contact us</a></p>
    </form></li>
				        </ul>
						  
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>		
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						<div class="banner-content col-lg-12 col-md-12">
							<h5 class="text-white text-uppercase">Currently Purchase Rate</h5>
							<h1 class="text-uppercase">
								$12,356					
							</h1>
							<p class="text-white pt-20 pb-20">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp <br> or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
							</p>
							<a href="#" class="primary-btn header-btn text-uppercase">Buy Bitcoin</a>
						</div>												
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start convert Area -->
			<section class="convert-area" id="convert">
				<div class="container">
					<div class="convert-wrap">
						<div class="row justify-content-center align-items-center flex-column pb-30">
							<h1 class="text-white">The Currency Converter</h1>
							<p class="text-white">Who are in extremely love with eco friendly system.</p>							
						</div>
						<div class="row justify-content-center align-items-start">
							<div class="col-lg-2 cols-img">
								<img class="d-block mx-auto" src="img/bitcoin.png" alt="">
							</div>
							<div class="col-lg-3 cols">
								<input type="text" name="feet" placeholder="feet" class="form-control mb-20">
								<input type="text" name="pounds" placeholder="pounds" class="form-control mb-20">
							</div>
							<div class="col-lg-3 cols">
								<input type="text" name="feet" placeholder="inches" class="form-control mb-20">
								<input type="text" name="pounds" placeholder="pounds" class="form-control mb-20">
								<a href="#" class="primary-btn header-btn text-uppercase mb-20">Calculate Your BMI</a>
							</div>
						</div>						
					</div>
				</div>	
			</section>
			<!-- End convert Area -->
			

			<!-- Start simple-services Area -->
			<section class="simple-services-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 single-services">
							<img src="img/s1.png" alt="">
							<a href="#"><h4 class="pt-30 pb-20">Get Paid through Bitcoin</h4></a>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.
							</p>
						</div>
						<div class="col-lg-4 single-services">
							<img src="img/s2.png" alt="">
							<a href="#"><h4 class="pt-30 pb-20">Bitcoin Exchange Analysis</h4></a>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.
							</p>
						</div>
						<div class="col-lg-4 single-services">
							<img src="img/s3.png" alt="">
							<a href="#"><h4 class="pt-30 pb-20">Send & Receive Bitcoin</h4></a>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.
							</p>
						</div>												
					</div>
				</div>	
			</section>
			<!-- End simple-services Area -->
			

			<!-- Start about Area -->
			<section class="aboutus-area">
				<div class="container-fluid">
					<div class="row d-flex align-items-center">
						<div class="col-lg-6 aboutus-left no-padding">
							<div class="active-about-carusel">
								<img class="img-fluid item" src="img/about-img.jpg" alt="">
								<img class="img-fluid item" src="img/about-img.jpg" alt="">
								<img class="img-fluid item" src="img/about-img.jpg" alt="">
								<img class="img-fluid item" src="img/about-img.jpg" alt="">
							</div>
						</div>
						<div class="col-lg-6 aboutus-right no-padding">
							<img src="img/ico.png" alt="">
							<h1 class="pt-40 pb-30">
								Exchange Bitcoin <br>
								is not that tough <br>
								Anymore
							</h1>
							<p>
								inappropriate behavior is often laughed off as “boys will be boys, women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the jobs beyond reproach. Lorem ipsum dolor sit amet, consectetur adipicin elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
							</p>
						</div>
					</div>
				</div>	
			</section>
			<!-- End about Area -->			

			<!-- Start service Area -->
			<section class="service-area section-gap" id="feature">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-9 pb-40 header-text">
							<h1>Why choose us during purchase bitcoin</h1>
							<p>
								Who are in extremely love with eco friendly system.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-user"></span>Expert Technicians</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-license"></span>Professional Service</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-phone"></span>Great Support</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-rocket"></span>Technical Skills</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>				
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-diamond"></span>Highly Recomended</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-bubble"></span>Positive Reviews</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>									
							</div>
						</div>						
					</div>
				</div>	
			</section>
			<!-- End service Area -->		
						

			<!-- Start stat Area -->
			<section class="stat-area section-gap">
				<div class="container">
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-6 stat-left">
							<img class="img-fluid" src="img/chart.png" alt="">
						</div>
						<div class="col-lg-6 stat-right">
							<h1>Ups and Downs <br>
							of Bitcoin (Realtime)</h1>
							<p class="pt-20 pb-20">
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that.
							</p>
							<a href="#" class="primary-btn header-btn text-uppercase">View Details</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End stat Area -->
			

			<!-- Start callaction Area -->
			<section class="callaction-area section-gap">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-9">
							<h1 class="text-white">Huge Transaction in last Week</h1>
							<p class="text-white">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore
								magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
							</p>
							<a href="#" class="primary-btn">Buy Bitcoin Now!</a>							
						</div>
					</div>
				</div>	
			</section>
			<!-- End callaction Area -->
			

			<!-- Start price Area -->
			<section class="price-area pt-100" id="price">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Purchase whatever you want</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-4">
							<div class="single-price no-padding">
								<div class="price-top">
									<h4>01 Ripple</h4>
								</div>
								<p>
									Who are in extremely love with <br>
									eco friendly system.
								</p>
								<div class="price-bottom">
									<h1><span>$</span> 7999</h1>
									<a href="#" class="primary-btn header-btn">Get Started</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-price no-padding">
								<div class="price-top">
									<h4>01 Ethereum</h4>
								</div>
								<p>
									Who are in extremely love with <br>
									eco friendly system.
								</p>
								<div class="price-bottom">
									<h1><span>$</span> 9999</h1>
									<a href="#" class="primary-btn header-btn">Get Started</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-price no-padding">
								<div class="price-top">
									<h4>01 Bitcoin</h4>
								</div>
								<p>
									Who are in extremely love with <br>
									eco friendly system.
								</p>
								<div class="price-bottom">
									<h1><span>$</span> 5999</h1>
									<a href="#" class="primary-btn">Get Started</a>
								</div>
							</div>				
						</div>								
					</div>
				</div>	
			</section>
			<!-- End price Area -->
		

			<!-- Start blog Area -->
				<section class="blog-area section-gap" id="blog">
					<div class="container">
						<div class="row d-flex justify-content-center">
							<div class="menu-content pb-60 col-lg-8">
								<div class="title text-center">
									<h1 class="mb-10">Latest Posts from our Blog</h1>
									<p>Who are in extremely love with eco friendly system.</p>
								</div>
							</div>
						</div>						
						<div class="row">
							<div class="col-lg-4 single-blog">
								<div class="thumb">
									<img class="img-fluid" src="img/b1.jpg" alt="">
								</div>
								<div class="desc">
									<a href="#"><h4>Portable Fashion for women</h4></a>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
									</p>
									<div class="user d-flex flex-row">
										<div>
											<img class="img-fluid" src="img/b4.jpg" alt="">
										</div>
										<div class="meta">
											<h6>Belle Beck</h6>
											<p>January 18th, 2018 at 17.21 </p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 single-blog">
								<div class="thumb">
									<img class="img-fluid" src="img/b2.jpg" alt="">
								</div>
								<div class="desc">
									<a href="#"><h4>Portable Fashion for women</h4></a>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
									</p>
									<div class="user d-flex flex-row">
										<div>
											<img class="img-fluid" src="img/b5.jpg" alt="">
										</div>
										<div class="meta">
											<h6>Harriet Barrett</h6>
											<p>January 18th, 2018 at 17.21 </p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 single-blog">
								<div class="thumb">
									<img class="img-fluid" src="img/b3.jpg" alt="">
								</div>
								<div class="desc">
									<a href="#"><h4>Portable Fashion for women</h4></a>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
									</p>
									<div class="user d-flex flex-row">
										<div>
											<img class="img-fluid" src="img/b6.jpg" alt="">
										</div>
										<div class="meta">
											<h6>Fannie Simmons</h6>
											<p>January 18th, 2018 at 17.21 </p>
										</div>
									</div>
								</div>
							</div>														
						</div>
					</div>	
				</section>
				<!-- End blog Area -->
					

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4 class="text-white">About Us</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
								</p>
							</div>
						</div>
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4 class="text-white">Top Products</h4>
								<ul class="footer-menu">
									<li><a href="#">Managed Website</a></li>
									<li><a href="#">Managed Reputation</a></li>
									<li><a href="#">Managed Tools</a></li>
									<li><a href="#">Managed Service</a></li>
								</ul>
									
							</div>
						</div>						
						<div class="col-lg-6  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4 class="text-white">Newsletter</h4>
								<p>You can trust us. we only send  offers, not a single spam.</p>
								<div class="d-flex flex-row" id="mc_embed_signup">
									  <form class="navbar-form" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
									    <div class="input-group add-on">
									      	<input class="form-control" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" type="email">
											<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>
									      <div class="input-group-btn">
									        <button class="genric-btn"><span class="lnr lnr-arrow-right"></span></button>
									      </div>
									    </div>
									      <div class="info mt-20"></div>									    
									  </form>
								</div>
							</div>
						</div>						
					</div>
					<div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
						<p class="footer-text m-0">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>	
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>			
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>



