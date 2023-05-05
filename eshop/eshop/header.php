<?php 
include "db.php";
 ?>
 <!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Eshop - eCommerce HTML5 Template.</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/favicon.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.min.css">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="css/niceselect.css">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="css/flex-slider.min.css">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl-carousel.css">
	<!-- Slicknav -->
    <link rel="stylesheet" href="css/slicknav.min.css">
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">


	
	
</head>
<body class="js">
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	
	
	<!-- Header -->
	<header class="header shop">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-12">
						<!-- Top Left -->
						<div class="top-left">
							<ul class="list-main">
								<li><i class="ti-headphone-alt"></i> +060 (800) 801-582</li>
								<li><i class="ti-email"></i>support@shophub.com</li>
							</ul>
						</div>
						<!--/ End Top Left -->
					</div>
					<div class="col-lg-8 col-md-12 col-12">
						<!-- Top Right -->
						<div class="right-content">
							<ul class="list-main">
								<?php 
								if (@$_COOKIE['email'] == "admin@gmail.com" or @$_COOKIE['email'] == "Admin@gmail.com" or @$_COOKIE['email'] == "ADMIN@gmail.com") {
								 ?>
								
								<li><i class="ti-user"></i> <a href="dashboard.php">Dashboard</a></li>
							<?php }else{ ?>
								<li><i class="ti-user"></i> <a href="useraccount.php">My account</a></li>
							<?php } if (!isset($_COOKIE['email'])) {

							?>
								<li><i class="ti-power-off"></i><a href="login.php">Login</a></li>
							<?php }else{ ?>
								<li><i class="ti-power-off"></i><a href="logout.php">Logout</a></li>
							<?php } ?>
							</ul>
						</div>
						<!-- End Top Right -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<?php 
							$logoq = "SELECT * FROM `webmentainnace` WHERE `position` = 'logo' ";
							$lrun = mysqli_query($db,$logoq);
							$simpleq = mysqli_fetch_assoc($lrun);
							 ?>
							<a href="index.php"><img src="<?php echo $simpleq['img']; ?>" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form class="search-form">
									<input type="text" placeholder="Search here..." name="search">
									<button value="search" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-8 col-md-7 col-12">
						<div class="search-bar-top">
							<div class="search-bar">
								<form method="post">
									<input name="search" placeholder="Search Products Here....." type="text">
									<button class="btnn" name="go1"><i class="ti-search"></i></button>
								</form>
								<?php 
									if (isset($_POST['go1'])) {
										// $s = 
										$s = $_POST['search'];
										header("location:shop-grid.php?a=$s");
										
										
									}

									 ?>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-12">
						<div class="right-bar">
							<!-- Search Form -->
							<div class="sinlge-bar shopping">
								
								<a href="cart.php" class="single-icon"><i class="ti-bag"></i> <span class="total-count"><?php if (isset($_SESSION["shopping_cart"])) {
									if ($_SESSION["shopping_cart"] == "") {
										echo 0;
									}else{
									echo count($_SESSION["shopping_cart"]);}}else{
										echo 0;
									}
									?></span></a>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				
						<div class="col-lg-9 col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">	
										<div class="nav-inner">	
											<ul class="nav main-menu menu navbar-nav">
												<?php if ($_SESSION['active']== "home"){  ?>
													<li class="active"><a href="index.php">Home</a></li>
													<li><a href="aboutus.php">About us</a></li>
													<li><a href="shop-grid.php">Products</a></li>
													<li><a href="contact.php">Contact Us</a></li>
												<?php } elseif ($_SESSION['active']== "aboutus") {?>
													<li><a href="index.php">Home</a></li>
													<li class="active"><a href="aboutus.php">About us</a></li>
													<li><a href="shop-grid.php">Products</a></li>
													<li><a href="contact.php">Contact Us</a></li>
												<?php } elseif ($_SESSION['active']== "product") {?>
													<li><a href="index.php">Home</a></li>
													<li><a href="aboutus.php">About us</a></li>
													<li class="active"><a href="shop-grid.php">Products</a></li>
													<li><a href="contact.php">Contact Us</a></li>
												<?php } elseif ($_SESSION['active']== "contactus") {?>
													<li><a href="index.php">Home</a></li>
													<li><a href="aboutus.php">About us</a></li>
													<li><a href="shop-grid.php">Products</a></li>
													<li class="active"><a href="contact.php">Contact Us</a></li>
												<?php } elseif (!isset($_SESSION['active']) or $_SESSION['active'] == "") {?>
													<li><a href="index.php">Home</a></li>
													<li><a href="aboutus.php">About us</a></li>
													<li><a href="shop-grid.php">Products</a></li>
													<li ><a href="contact.php">Contact Us</a></li>
												<?php } ?>
												</ul>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>
	<!--/ End Header -->