<?php 
if (!isset($_COOKIE['email'])) {
	header("location:login.php");
}else{
include "db.php";
$e = $_COOKIE['email'];
$q = "SELECT * FROM `users` WHERE `email` = '$e' ";
$run = mysqli_query($db,$q);
$simple = mysqli_fetch_assoc($run);

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

	
		<div class="col-md-3 bg-dark  p-5 left-nav" >
			<ul class="list-group text-white  bg-dark ">
				<div class="logo p-4 ">
			<a href="index.php">
				<img src="images/log.png" alt="">
			</a>
		</div>
		<hr class="bg-white">
  				<li class="list-item  py-2 bg-dark"><a href="dashboard.php" class=" text-center px-0">Account Setting</a></li>
  				<li class="list-item  py-2 bg-dark"><a href="usertable.php" class="text-center px-0">Users Table</a></li>
  				<li class="list-item  py-2 bg-dark"><a href="userinsert.php" class=" text-center px-0">Users Insert</a></li>
  				<li class="list-item  py-2 bg-dark"><a href="producttable.php" class="text-center px-0">Product Table</a></li>
  				<li class="list-item  py-2 bg-dark"><a href="Productinsert.php" class="current text-center px-0">Product Insert</a></li>
  				<li class="list-item  py-2 bg-dark"><a href="ordertable.php" class="text-center px-0">Order Table</a></li>
  				<li class="list-item  py-2 bg-dark"><a href="Frequentclient.php" class="text-center px-0">Frequent Client</a></li>
  				<li class="list-item  py-2 bg-dark"><a href="bestsellingproduct.php" class="text-center px-0">Best Selling Product</a></li>
  				<li class="list-item  py-2 bg-dark"><a href="Catogories.php" class="text-center px-0">Categories</a></li>
  				<li class="list-item  py-2 bg-dark"><a href="ourteamtable.php" class="text-center px-0">Team Member Table</a></li>
  				<li class="list-item  py-2 bg-dark"><a href="ourteaminsert.php" class="text-center px-0">Team Member Insert</a></li>
  				<li class="list-item  py-2 bg-dark"><a href="WebMentainance.php" class="text-center px-0">Web Mentainance</a></li>
			</ul>
		</div>

	<div class="col-md-9">
		<div class="row bg-white  m-4">
			<div class="col-md-12 ">
			<h4 class="float-right "><i class="ti-user px-md-3 px1"></i><?php echo ucfirst($simple['name']); ?></h4>	
		</div>
		</div><hr>
		<div class="container">
			<section  class="contact-us ">
		
				
					<div class="row">
						<div class="col-lg-12 col-12">
							<div class="form-main">
								<div class="title">
									<h4>Product Insert</h4>
									
								</div>
								<form class="form" method="post" enctype="multipart/form-data" >
									<div class="row">
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Product Name<span>*</span></label>
												<input name="name" type="text" placeholder="" required >
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Sku<span>*</span></label>
												<input name="sku" type="text" placeholder="" required>
											</div>	
										</div>
										
										
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Price<span>*</span></label><br>
												<input name="price" type="text" placeholder="$" required>
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Weight<span>*</span></label>
												<input name="weight" type="text" placeholder="" required>
											</div>
										</div>
										<?php 
										$q1 = "SELECT * FROM `category`";
										$run1 = mysqli_query($db,$q1);
										 ?>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Catogory<span>*</span></label><br>
												<select name="main">
													<?php while ($simple1 = mysqli_fetch_assoc($run1)) {
													 ?>
													<option value="<?php echo $simple1['Category'] ?>"><?php echo ucfirst($simple1['Category']);?></option>
													<?php } ?>
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Sub Catogory<span>*</span></label><br>
												<select name="sub">
													<?php 
													$q2 = "SELECT * FROM `subcategory`";
													$run2 = mysqli_query($db,$q2);
													while ($simple2 = mysqli_fetch_assoc($run2)) {
													 ?>
													<option value="<?php echo $simple2['subcategory'] ?>"><?php echo ucfirst($simple2['subcategory']); ?></option>
													<?php } ?>
												</select>
											</div>
										</div>
										
										<div class="col-md-6 col-12">
											<div class="form-group mb-3">
												<label>Main Image<span>*</span></label>
												<input name="mainimage" type="file" placeholder="" required class="border-0  ">
											</div>	

										</div>
										<div class="col-md-6 col-12">
											<div class="form-group mb-3">
												<label>Sub Image<span>*</span></label>
												<input name="subimage" type="file" placeholder="" required class="border-0  ">
											</div>	

										</div>
										
										<div class=" col-12">
											<div class="form-group message">
												<label>Product Description<span>*</span></label>
												<textarea name="desc" placeholder=""></textarea>
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
										$s = $_POST['sku'];
										$p = $_POST['price'];
										$w = $_POST['weight'];
										$m = $_POST['main'];
										$sc = $_POST['sub'];
										$mi = $_FILES['mainimage']['name'];
										$location = $_FILES["mainimage"]["tmp_name"];
										$destination = "images/$mi";
										move_uploaded_file($location, $destination);
										$si = $_FILES['subimage']['name'];
										$location1 = $_FILES['subimage']['tmp_name'];
										$destination1 = "images/$si";
										move_uploaded_file($location1,$destination1);
										$d = $_POST['desc'];
										
										$q3 = "INSERT INTO `products`( `name`, `sku`, `price`, `weight`, `category`, `subcategory`, `img`, `subimg`, `description`) VALUES ('$n','$s','$p','$w','$m','$sc','$destination','$destination1','$d')";
										$run3 = mysqli_query($db,$q3);
										echo "<br><div class='alert alert-success'>
  										<a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Product Has Been Uploaded.
										</div>";
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