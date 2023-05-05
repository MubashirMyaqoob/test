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
  				<li class="list-item  py-2 bg-dark"><a href="dashboard.php" class="text-center px-0">Account Setting</a></li>
  				<li class="list-item  py-2 bg-dark"><a href="usertable.php" class=" text-center px-0">Users Table</a></li>
  				<li class="list-item  py-2 bg-dark"><a href="userinsert.php" class="text-center px-0">Users Insert</a></li>
  				<li class="list-item  py-2 bg-dark"><a href="producttable.php" class="current text-center px-0">Product Table</a></li>
  				<li class="list-item  py-2 bg-dark"><a href="Productinsert.php" class="text-center px-0">Product Insert</a></li>
  				<li class="list-item  py-2 bg-dark"><a href="ordertable.php" class="text-center px-0">Order Table</a></li>
  				<li class="list-item  py-2 bg-dark"><a href="Frequentclient.php" class="text-center px-0">Frequent Client</a></li>
  				<li class="list-item  py-2 bg-dark"><a href="bestsellingproduct.php" class="text-center px-0">Best Selling Product</a></li>
  				<li class="list-item  py-2 bg-dark"><a href="Catogories.php" class="text-center px-0">Categories</a></li>
  				<li class="list-item  py-2 bg-dark"><a href="ourteamtable.php" class="text-center px-0">Team Member Table</a></li>
  				<li class="list-item  py-2 bg-dark"><a href="ourteaminsert.php" class="text-center px-0">Team Member Insert</a></li>
  				<li class="list-item  py-2 bg-dark"><a href="Webmentainance.php" class="text-center px-0">Web Mentainance</a></li>
			</ul>
		</div>
		<div class="col-md-9">
		<div class="row bg-white  m-4">
			<div class="col-md-12 ">
			<h4 class="float-right "><i class="ti-user px-md-3 px1"></i><?php echo ucfirst($simple['name']); ?></h4>	
		</div>
		</div><hr>
		<div class="row">
		<div class="col-md-12 pt-4">
<div class="shopping-cart section">
		<div class="container">
		<?php 
		if(isset($_GET['message'])){
	echo "		<br><div class='alert alert-success'>
  										<a class='close' data-dismiss='alert' aria-label='close'>&times;</a>Product Details Has Been Updated.
										</div>";
		}
		 ?>

			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th class="text-center">Product Name</th>
								<th class="text-center">Sku</th>
								<th class="text-center">Stock</th>
								<th class="text-center">Catogory</th>
								<th class="text-center">Sub Catogory</th>
								<th class="text-center">Price</th>
								<th class="text-center">Main Image</th>
								<th class="text-center">Update</th> 
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$q1 = "SELECT * FROM `products`";
							$run1 = mysqli_query($db,$q1);
							while ($simple1 = mysqli_fetch_assoc($run1)) {
							 ?>
							<tr>
								<td class="product-des" data-title="Product Name">
									<p class="product-des text-center"><?php echo ucfirst($simple1['name']);?></p>
								</td>
								<td class="product-des" data-title="Sku">
									<p class="product-des text-center"><?php echo ucfirst($simple1['sku']);?></p>
								</td>
								<td class="product-des" data-title="Stock">
									<p class="product-des text-center"><?php echo ucfirst($simple1['stock']);?></p>
								</td>
								<td class="product-des" data-title="Catogory">
									<p class="product-des text-center"><?php echo ucfirst($simple1['category']);?></p>
								</td>
								<td class="product-des" data-title="Sub Catogory">
									<p class="product-des text-center"><?php echo ucfirst($simple1['subcategory']);?></p>
								</td>
								<td class="product-des" data-title="Price">
									<p class="product-des text-center"><?php echo ucfirst($simple1['price']);?></p>
								</td>
								<td class="product-des" data-title="Main Image">
									<p class="product-des text-center"><?php echo ucfirst($simple1['img']);?></p>
								</td>
								
								<td class="product-des" data-title="Update">	
									<p class="product-des text-center"><button class="btn btn-dark"><a href="productupdate.php?id=<?php echo $simple1['id'] ?>" class="text-light">Update</a></button></p>
								</td>
								<form method="post">
									<input type="text" name="id" hidden value="<?php echo $simple1['id']?>"  >
								<td class="action" data-title="Delete"><button type="submit" name="go" style="background: none; border: none;"><a><i class="ti-trash remove-icon text-center"></i></a></button></td>
								<?php if (isset($_POST['go'])) {
									$hid = $_POST['id'];
									$q2 = "DELETE FROM `products` WHERE `id` = '$hid' ";
									mysqli_query($db,$q2);
									header("location:producttable.php");
								} ?>
							</form>
							</tr>
						<?php } ?>
						</tbody>
					</table>
					<!--/ End Shopping Summery -->
				</div>
			</div>
</div>
</div>
</div>
</div>
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