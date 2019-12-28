<?php

session_start();
$user_name=$_SESSION['user_name'];
$user_email=$_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>My Profile</title>
	<meta charset="UTF-8">
	<meta name="description" content="Civic - CV Resume">
	<meta name="keywords" content="resume, civic, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<div class="home-three-style bg-dark">
		<!-- Header section start -->
		<header class="header-section">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4">
						<div class="site-logo">
							<h2><a href="#" >My Profile</a></h2>
							<!--<button type="button" class="btn btn-outline-success" style="margin-right: 60px; margin-top: 30px; width:150px">Follow</button>
							<button type="button" class="btn btn-outline-danger"  style="margin-right: 60px; margin-top: 20px;width:150px">Unfollow</button>-->
						</div>
					</div>
					
				</div>
			</div>
		</header>
		<!-- Header section end -->
		
		<div class="container-fluid p-0">
			<div class="row m-0">
				<div class="col-xl-5 col-lg-5 p-0">
					<div class="main-left-area h-100">
						<section class="intro-section">
							<figure class="hero-image">
								<img src="img/addy.jpg" alt="" style="border-radius: 40%">
							</figure>
							<div class="hero-text">
								<h2><?php echo $user_name?></h2>
								<p>Python, Web Design, Portfolios, Java, Javascripts</p>
							</div>
							<p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse consectetur eget felis et volutpat. Integer id nulla at diam eleifend fringilla. Donec eu ornare libero. Fusce pulvinar magna id pharetra laoreet. Donec convallis cursus libero. Nam semper risus sit amet rhoncus maximus. Integer eros ante, convallis sit amet vulputate nec, molestie vitae nisi. Phasellus convallis augue vel rhoncus congue. Morbi interdum molestie orci sed ullamcorper. Vivamus aliquet eros ut leo luctus, a venenatis metus faucibus. Maecenas ipsum nisi, iaculis in orci vel, molestie gravida erat. </p>
							<div class="hero-info pt-5">
								<h2>General Info</h2>
								<ul>
									<li><span>Date of Birth</span>July 4, 1999</li>
									<li><span>Address</span>10D, Paramhansa Deb Road</li>
									<li><span>E-mail</span><?php echo $user_email?></li>
									<li><span>Phone </span>+91 8017383645</li>
								</ul>
							</div>
						</section>
						<!---->
						<section class="extra-section spad">
							<div class="section-title">
								<h2>Followers : 69</h2>
							</div>
							<div class="row">
								
								
								
								<div class="col-md-6">
									<div class="fact-box">
										<div class="fact-content">
											<img src="img/icon/1-w.png" alt="">
											<h2>14</h2>
											<p>Years of Experience</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="fact-box">
										<div class="fact-content">
											<img src="img/icon/2-w.png" alt="">
											<h2>9</h2>
											<p>Awards Won</p>
										</div>
									</div>
								</div>
							</div>
						</section>
						
						<div class="social-links">
							<a href=""><i class="fa fa-pinterest"></i></a>
							<a href=""><i class="fa fa-linkedin"></i></a>
							<a href=""><i class="fa fa-instagram"></i></a>
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-twitter"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-xl-6 col-lg-7">
						
					<div class="main-right-area">
						<!-- Resume section start -->
						
						<section class="resume-section spad pt-0">
							<div class="section-title">
								<h2 style="color: #fff;text-decoration-color: #fff;">Post</h2>
							</div>
							
							<ul class="resume-list">
								<li>
									<h2  style="color: antiquewhite;">2019</h2>
									<h3  style="color: rgb(253, 226, 191);">Post Title</h3  style="color: antiquewhite;">
									<h4>Sub post title</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor orci ut sapien scelerisque viverra. Sed trist ique justo nec mauris efficitur, ut lacinia elit dapibus. In egestas elit in dap ibus laoreet. Duis magna libero, fermentum ut facilisis id, pulvinar eget tortor. Vestibulum pelle ntesque tincidunt lorem, vitae euismod felis porttitor sed. </p>
								</li>
								<li>
									<h2  style="color: antiquewhite;">2018</h2>
									<h3  style="color: rgb(253, 226, 191);">Post Title</h3  style="color: antiquewhite;">
									<h4>Sub post title</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor orci ut sapien scelerisque viverra. Sed trist ique justo nec mauris efficitur, ut lacinia elit dapibus. In egestas elit in dap ibus laoreet. Duis magna libero, fermentum ut facilisis id, pulvinar eget tortor. Vestibulum pelle ntesque tincidunt lorem, vitae euismod felis porttitor sed. </p>
								</li>
							</ul>
						</section>
						<!-- Resume section end -->

						
						
						<!-- Review section start -->
						<section class="review-section spad">
							<div class="section-title">
								<h2 style="color: #fff;text-decoration-color: #fff;">References</h2>
							</div>
							<div class="review-slider owl-carousel">
								<div class="single-review">
									<div class="qut" style="color: #fff;text-decoration-color: #fff;">“</div>
									<p>Sit amet, consectetur adipiscing elit. Sed porttitor orci ut sapien scelerisque viverra. Sed trist ique justo nec mauris efficitur, ut lacinia elit dapibus. In egestas elit in dap ibus laoreet. Duis magna libero, fermentum ut facilisis id, pulvinar eget tortor. Vestibulum pelle ntesque tincidunt lorem, vitae euismod felis porttitor sed. </p>
									<h3 style="color: #fff;text-decoration-color: #fff;">Robert G. Smith</h3>
									<h4  style="color: antiquewhite;">Manager, Company</h4  style="color: antiquewhite;">
								</div>
								<div class="single-review">
									<div class="qut" style="color: #fff;text-decoration-color: #fff;">“</div>
									<p>Sit amet, consectetur adipiscing elit. Sed porttitor orci ut sapien scelerisque viverra. Sed trist ique justo nec mauris efficitur, ut lacinia elit dapibus. In egestas elit in dap ibus laoreet. Duis magna libero, fermentum ut facilisis id, pulvinar eget tortor. Vestibulum pelle ntesque tincidunt lorem, vitae euismod felis porttitor sed. </p>
									<h3 style="color: #fff;text-decoration-color: #fff;">Robert G. Smith</h3>
									<h4  style="color: antiquewhite;">Manager, Company</h4  style="color: antiquewhite;">
								</div>
								<div class="single-review">
									<div class="qut" style="color: #fff;text-decoration-color: #fff;">“</div>
									<p>Sit amet, consectetur adipiscing elit. Sed porttitor orci ut sapien scelerisque viverra. Sed trist ique justo nec mauris efficitur, ut lacinia elit dapibus. In egestas elit in dap ibus laoreet. Duis magna libero, fermentum ut facilisis id, pulvinar eget tortor. Vestibulum pelle ntesque tincidunt lorem, vitae euismod felis porttitor sed. </p>
									<h3 style="color: #fff;text-decoration-color: #fff;">Robert G. Smith</h3>
									<h4  style="color: antiquewhite;">Manager, Company</h4  style="color: antiquewhite;">
								</div>
							</div>
						</section>
						<!-- skill section start -->
						<div class="skill-section">
							<div class="section-title">
								<h2  style="color: #fff;text-decoration-color: #fff;">Skills</h2>
							</div>
							
							
							<div class="icon-box-area spad">
								<div class="icon-box">
									<i class="flaticon-032-cooking" style="color: rgb(243, 147, 22);"></i>
									<p style="color: rgb(243, 147, 22);">Cooking</p style="color: rgb(243, 147, 22);">
								</div>
								<div class="icon-box">
									<i class="flaticon-015-photo-camera"  style="color: rgb(166, 243, 22);"></i>
									<p style="color: rgb(166, 243, 22);">Photography</p>
								</div>
								<div class="icon-box">
									<i class="flaticon-013-chess-1"  style="color: rgb(22, 243, 232);"></i>
									<p style="color: rgb(22, 243, 232);">Oranizing Games</p>
								</div>
								<div class="icon-box">
									<i class="flaticon-001-yoga"  style="color: rgb(217, 22, 243);"></i>
									<p style="color: rgb(217, 22, 243);">Yoga</p>
								</div>
								<div class="icon-box">
									<i class="flaticon-035-tent"  style="color: rgb(243, 74, 22);"></i>
									<p style="color: rgb(243, 74, 22);">Camping in nature</p>
								</div>
							</div>
						</div>
						<!-- skill section end -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer section start -->
	<footer class="footer-section">
		<div class="container text-center">
			<a href="newsfeed.php" type="button" class="btn btn-outline-warning" style="margin-right: 60px;margin-left: 90px; margin-top: 30px; width:150px">Home</a>
			<a href="update.php" type="button" class="btn btn-outline-info"  style="margin-right: 60px; margin-top: 30px;width:150px">Update</a>
			<a href="logout_submit.php" type="button" class="btn btn-outline-light"  style="margin-right: 60px; margin-top: 30px;width:150px">Logout</a>
			<a href="delete.php" type="button" class="btn btn-outline-danger"  style=" margin-top: 30px;width:150px">Delete</a>	
		</div>
	</footer>
	<!-- Footer section end -->
		

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>