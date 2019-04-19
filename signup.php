
<?php

session_start();
$connect  =new mysqli("127.0.0.1", "bitcoin", "bitcoin", "bitcoin");

if($_SERVER["REQUEST_METHOD"] == "POST"){
$username = mysqli_real_escape_string($connect, $_REQUEST['username']);
$full_name = mysqli_real_escape_string($connect, $_REQUEST['full_name']);
$email = mysqli_real_escape_string($connect, $_REQUEST['email']);
$tel = mysqli_real_escape_string($connect, $_REQUEST['tel']);
$address = mysqli_real_escape_string($connect, $_REQUEST['address']);
$q="INSERT INTO `person`(`userName`, `Name`, `Address`, `Email`, `Phone`) VALUES ('$username','$full_name','$address ','$email ','$tel')";
if(mysqli_query($connect, $q)){

$headers='From: '.$email.'\r\n';
mail('mennasayed192@gmail.com','otp',$headers);


   header('location: otp.php'); exit;
} else{
    echo "ERROR: Could not able to execute $q. " . mysqli_error($connect);
}
}

?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/elements/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
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
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/nice-select.css">			
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/bootstrap.css">
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
				          <li class="menu-active"><a href="homepage.php">Home</a></li>
				          
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->	
			<!-- Start banner Area -->
			<section class="generic-banner">				
				<div class="container">
					<div class="row height align-items-center justify-content-center">
						<div class="col-lg-10">
							<div class="generic-banner-content">
								<h2 class="text-white">BE ONE OF US IN JUST 5 MINUTES ! </h2>
								<p class="text-white">It won’t be a bigger problem to find one video game lover in your <br> neighbor. Since the introduction of Virtual Game.</p>
							</div>
						</div>
					</div>
				</div>
			</section>		
			<!-- End banner Area -->
			
		
			<!-- End Button -->
			<!-- Start Align Area -->
			 <div class="whole-wrap">
				<div class="container">
		
							
					
					<div class="section-top-border">
						<div class="row">
							<div class="col-lg-8 col-md-8">
								<h3 class="mb-30">sign up now</h3>
								<form method="post" action="signup.php">
									<div class="mt-10">
									
										<input type="text" name="username" placeholder="full Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'full Name'" required class="single-input">
									</div><div class="mt-10">
										<input type="text" name="full_name" placeholder="set username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'set username'" required class="single-input">
									
									</div>
									
									<div class="mt-10">
										<input type="email" name="email"  placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="single-input">
									</div>
									<div class="mt-10"><input type="tel" name="tel" placeholder="telephone number"class="single-input" onfocus="this.placeholder = ''" onblur="this.placeholder ='telephone number'" ></div>
									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
										<input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required class="single-input">
									</div>
									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
									</div>
									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
										
										
									</div>
									
									<input type="submit"  name="signup" class="genric-btn primary circle" method="post">
								</form>
					
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Align Area -->

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
						<div class="col-lg-4  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4 class="text-white">Contact Us</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
								</p>
								<p class="number">
									012-6532-568-9746 <br>
									012-6532-569-9748
								</p>
							</div>
						</div>						
						<div class="col-lg-5  col-md-6 col-sm-6">
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
									        <button class="genric-btn primary circle arrow"><span class="lnr lnr-arrow-right"></span></button>
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
signup.php
Displaying signup.php.