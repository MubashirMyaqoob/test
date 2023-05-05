<?php 
include "db.php";
if (!isset($_COOKIE['email'])) {
	header("location:login.php");
}else{ 
$e5 = $_COOKIE['email'];
$q5 = "SELECT * FROM `users` WHERE `email` = '$e5' ";
$run5 = mysqli_query($db,$q5);
$simple5 = mysqli_fetch_assoc($run5);
$id = $_GET['id'];
$q1 = "SELECT * FROM `users` where `id` = '$id' ";
$run1 = mysqli_query($db,$q1);
$simple = mysqli_fetch_assoc($run1);


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
<body class="row w-100" >

	
	<!-- Preloader -->
	<div class="js">
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
</div>
	<!-- End Preloader -->

	
		

	<div class="col-md-12">
		<div class="row bg-white  m-4">
			<div class="col-md-3">
				<p class="product-des"><button class="btn btn-dark"><a href="dashboard.php" class="text-light">Dashboard</a></button></p>
			</div>
			<div class="col-md-9 ">
			<h4 class="float-right "><i class="ti-user px-md-3 px1"></i><?php echo ucfirst($simple['name']); ?></h4>	
		</div>
		</div><hr>
		<div class="container">
			<section  class="contact-us ">
		
				
					<div class="row">
						<div class="col-lg-12 col-12">
							<div class="form-main">
								<div class="title">
									<h4>User Update</h4>
									
								</div>
								<form class="form" method="post" >
									<div class="row">
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Name<span>*</span></label>
												<input name="name" type="text" placeholder="" required  value="<?php echo $simple['name']; ?>">
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Phone<span>*</span></label>
												<input name="number" type="text" placeholder="" required   value="<?php echo $simple['number']; ?>">
											</div>	
										</div>
										
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Email<span>*</span></label>
												<input name="email" type="email" placeholder="" disabled   value="<?php echo $simple['email']; ?>">
											</div>	
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Password<span>*</span></label>
												<input name="password" type="text" placeholder="" required   value="<?php echo $simple['password']; ?>">
											</div>
										</div>
										<div class="col-lg-12 col-12">
										<div class="form-group">
												<label>Address<span>*</span></label>
												<input name="address" type="text" placeholder="" required   value="<?php echo $simple['address']; ?>">
											</div>
										</div>
	
										<div class="col-12">
											<div class="form-group button">
												<button type="submit" class="btn" name="GO">Submit</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
		</div>
		  <?php 
		   if (isset($_POST['GO'])){
		   	 $n  = $_POST['name'];
		   	 $no = $_POST['number'];
		   	
		   	 $p  = $_POST['password'];
		   	 $a  = $_POST['address'];

  $q = "UPDATE `users` SET `name`='$n',`number`='$no',`email`='$e5',`password`='$p',`address`='$a' WHERE  `id` = '$id' ";

 

   $run = mysqli_query($db,$q);
  
echo "<script>window.open('usertable.php?message=success','_self'); </script>";


		   }

		   ?>
	

</section>

</div>





	 <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="js/colors.js"></script>
	<!-- Slicknav JS -->
	<script src="js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="js/magnific-popup.js"></script>
	<!-- Waypoints JS -->
	<script src="js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="js/nicesellect.js"></script>
	<!-- Flex Slider JS -->
	<script src="js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="js/easing.js"></script>
	<!-- Active JS -->
	<script src="js/active.js"></script>
</body>
</html>
<?php } ?>