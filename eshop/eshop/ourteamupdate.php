<?php 
if (!isset($_COOKIE['email'])) {
	header("location:login.php");
}else{
include "db.php";
$id = $_GET['id'];
$e = $_COOKIE['email'];
$q = "SELECT * FROM `users` WHERE `email` = '$e' ";
$run = mysqli_query($db,$q);
$simple = mysqli_fetch_assoc($run);
$q4 = "SELECT * FROM `ourteam` WHERE `id` = '$id' ";
$run4 = mysqli_query($db,$q4);
$simple4 = mysqli_fetch_assoc($run4);
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
			<h4 class="float-right "><i class="ti-user px-md-3 px1"></i><?php echo ucfirst($simple['name']) ?></h4>	
		</div>
		</div><hr>
			<div class="container">
			<section  class="contact-us ">
		
				
					<div class="row">
						<div class="col-lg-12 col-12">
							<div class="form-main">
								<div class="title">
									<h4>Product Update</h4>
									
								</div>
								<form class="form" method="post" enctype="multipart/form-data" >
									<div class="row">
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Member Name<span>*</span></label>
												<input name="name" type="text" placeholder="" value="<?php echo $simple4['name']; ?>" required >
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Member Position<span>*</span></label>
												<input name="position" type="text" placeholder="" value="<?php echo $simple4['position']; ?>" required>
											</div>	
										</div>
										
										
										
										<div class="col-md-6 col-12">
											<div class="form-group mb-3">
												<label>Main Image<span></span></label>
												<input name="mainimage" type="file" placeholder="" class="border-0  ">
											</div>	

										</div>
										<div class="col-md-6 col-12">
											<div class="form-group mb-3">
												<label>Sub Image<span></span></label>
												<input name="subimage" type="file" placeholder="" class="border-0  ">
											</div>	

										</div>
										
										<div class="col-12">
											<div class="form-group button">
												<button type="submit" class="btn" name="go">Submit</button>
											</div>
										</div>
									</div>
									<?php 
									if (isset($_POST['go'])) {
										$n = $_POST['name'];
										$p = $_POST['position'];
										
										$mi = $_FILES['mainimage']['name'];
										$location = $_FILES["mainimage"]["tmp_name"];
										$destination = "images/$mi";
										move_uploaded_file($location, $destination);
										$si = $_FILES['subimage']['name'];
										$location1 = $_FILES['subimage']['tmp_name'];
										$destination1 = "images/$si";
										move_uploaded_file($location1,$destination1);
										
										if ($mi == "" AND $si == "" ) {
											$q3 = "UPDATE `ourteam` SET `name`='$n',`position`='$p' WHERE `id` = '$id'";
										$run3 = mysqli_query($db,$q3);
										echo "<script>window.open('ourteamtable.php?message=success','_self'); </script>";

										}elseif ($si == "") {
										$q3 = "UPDATE `ourteam` SET `mainimg`='$destination',`name`='$n',`position`='$p' WHERE `id` = '$id'";
										$run3 = mysqli_query($db,$q3);
										echo "<script>window.open('ourteamtable.php?message=success','_self'); </script>";
										}elseif ($mi == "" ) {
										$q3 = "UPDATE `ourteam` SET `subimg`='$destination1',`name`='$n',`position`='$p' WHERE `id` = '$id' ";
										$run3 = mysqli_query($db,$q3);
										echo "<script>window.open('ourteamtable.php?message=success','_self'); </script>";
										}
										else{
										$q3 = "UPDATE `ourteam` SET `mainimg`='$destination',`subimg`='$destination1',`name`='$n',`position`='$p' WHERE `id` = '$id'";
										$run3 = mysqli_query($db,$q3);
										echo "<script>window.open('ourteamtable.php?message=success','_self'); </script>";
										
									}

									}
									 ?>
								</form>
							</div>
						</div>
		</div>
	

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