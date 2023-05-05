<?php 
if (!isset($_COOKIE['email'])) {
	header("location:login.php");
}else{
include "db.php";
$e = $_COOKIE['email'];
$q = "SELECT * FROM `users` WHERE `email` = '$e' ";
$run = mysqli_query($db,$q);
$simple = mysqli_fetch_assoc($run);
$id = $_GET['id'];

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
									<h4>Web Update</h4>
									
								</div>
								<?php 
								$wq = "SELECT * FROM `webmentainnace` WHERE `id` = '$id'";
								$wrun = mysqli_query($db,$wq);
								$wsimple = mysqli_fetch_assoc($wrun);
								
								if ($wsimple['position'] == "logo" or $wsimple['position'] == "LOGO" or $wsimple['position'] == "Logo" ) {
								 ?>
								 <form class="form" method="post" enctype="multipart/form-data" >
									<div class="row">
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Heading</label>
												<input name="heading" type="text" placeholder="" value="<?php echo $wsimple['heading'] ?>" disabled>
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Additional Text</label>
												<input name="at" type="text" placeholder=""  value="<?php echo $wsimple['additionaltext'] ?>" disabled>
											</div>	
										</div>
										
										
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Position</label><br>
												<input name="position" type="text" placeholder="" disabled  value="<?php echo $wsimple['position'] ?>">
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="form-group mb-3">
												<label>Image</label>
												<input name="img" type="file" placeholder=""  class="border-0  ">
											</div>	

										</div>
										<div class="col-12">
											<div class="form-group message">
												<label>Description<span></span></label>
												<textarea name="desc" placeholder="" disabled><?php echo $wsimple['text'] ?></textarea>
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
									$h = $_POST['heading'];
									$at = $_POST['at'];
									$p = $_POST['position'];
									$d = $_POST['desc'];
									$i = $_FILES['img']['name'];
									$location = $_FILES['img']['tmp_name'];
									$destination = "images/$i";
									move_uploaded_file($location,$destination);
									if ($i == "") {
										$q1 = "UPDATE `webmentainnace` SET `heading`='$h',`text`='$d',`additionaltext`='$at', WHERE `id` = '$id'";
									$run1 = mysqli_query($db,$q1);
									echo "<br><div class='alert alert-success'>
  										<a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Web Has Been Updated.
										</div>";
									}else{
									$q1 = "UPDATE `webmentainnace` SET`img`='$destination',`heading`='$h',`text`='$d',`additionaltext`='$at', WHERE `id` = '$id'";
									$run1 = mysqli_query($db,$q1);
									echo "<br><div class='alert alert-success'>
  										<a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Web Has Been Updated.
										</div>";
									}}
									
									 ?>
								</form>
							<?php }elseif ($wsimple['position'] == "footerw1" or $wsimple['position'] == "Footerw1" or $wsimple['position'] == "FOOTERW1") {
							?>
							<form class="form" method="post" enctype="multipart/form-data" >
									<div class="row">
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Heading</label>
												<input name="heading" type="text" placeholder="" disabled value="<?php echo $wsimple['heading'] ?>" >
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Additional Text</label>
												<input name="at" type="text" placeholder=""  value="<?php echo $wsimple['additionaltext'] ?>">
											</div>	
										</div>
										
										
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Position</label><br>
												<input name="position" type="text" placeholder="" disabled  value="<?php echo $wsimple['position'] ?>">
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="form-group mb-3">
												<label>Image</label>
												<input name="img" type="file" placeholder=""  class="border-0  ">
											</div>	

										</div>
										<div class="col-12">
											<div class="form-group message">
												<label>Description<span></span></label>
												<textarea name="desc" placeholder="" ><?php echo $wsimple['text'] ?></textarea>
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
									$h = $_POST['heading'];
									$at = $_POST['at'];
									$p = $_POST['position'];
									$d = $_POST['desc'];
									$i = $_FILES['img']['name'];
									$location = $_FILES['img']['tmp_name'];
									$destination = "images/$i";
									move_uploaded_file($location,$destination);
									if ($i == "") {
										$q1 = "UPDATE `webmentainnace` SET `heading`='$h',`text`='$d',`additionaltext`='$at', WHERE `id` = '$id'";
									$run1 = mysqli_query($db,$q1);
									echo "<br><div class='alert alert-success'>
  										<a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Web Has Been Updated.
										</div>";
									}else{
									$q1 = "UPDATE `webmentainnace` SET`img`='$destination',`heading`='$h',`text`='$d',`additionaltext`='$at', WHERE `id` = '$id'";
									$run1 = mysqli_query($db,$q1);
									echo "<br><div class='alert alert-success'>
  										<a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Web Has Been Updated.
										</div>";
									}
									}
									 ?>
								</form>
							<?php }else{ ?>
								<form class="form" method="post" enctype="multipart/form-data" >
									<div class="row">
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Heading</label>
												<input name="heading" type="text" placeholder="" value="<?php echo $wsimple['heading'] ?>" >
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Additional Text</label>
												<input name="at" type="text" placeholder=""  value="<?php echo $wsimple['additionaltext'] ?>">
											</div>	
										</div>
										
										
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Position</label><br>
												<input name="position" type="text" placeholder="" disabled  value="<?php echo $wsimple['position'] ?>">
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="form-group mb-3">
												<label>Image</label>
												<input name="img" type="file" placeholder=""  class="border-0  ">
											</div>	

										</div>
										<div class="col-12">
											<div class="form-group message">
												<label>Description<span></span></label>
												<textarea name="desc" placeholder="" ><?php echo $wsimple['text'] ?></textarea>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group button">
												<button type="submit" class="btn" name="go">Submit</button>
											</div>
										</div>
									</div>
									<?php }
									if (isset($_POST['go'])) {
									$h = $_POST['heading'];
									$at = $_POST['at'];
									$d = $_POST['desc'];
									$i = $_FILES['img']['name'];
									$location = $_FILES['img']['tmp_name'];
									$destination = "images/$i";
									move_uploaded_file($location,$destination);
									if ($i == "") {
										$q1 = "UPDATE `webmentainnace` SET `heading`='$h',`text`='$d',`additionaltext`='$at' WHERE `id` = '$id'";
									$run1 = mysqli_query($db,$q1);
									echo "<br><div class='alert alert-success'>
  										<a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Web Has Been Updated.
										</div>";
										header("location:webupdate.php");
									}else{
									$q1 = "UPDATE `webmentainnace` SET `img`='$destination',`heading`='$h',`text`='$d',`additionaltext`='$at' WHERE `id` = '$id'";
									$run1 = mysqli_query($db,$q1);
									echo "<br><div class='alert alert-success'>
  										<a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Web Has Been Updated.
										</div>";
										header("location:webupdate.php");
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