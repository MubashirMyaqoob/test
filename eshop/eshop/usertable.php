<?php 
include "db.php";
if (!isset($_COOKIE['email'])) {
	header("location:login.php");
}else{
	$e5 = $_COOKIE['email'];
$q5 = "SELECT * FROM `users` WHERE `email` = '$e5' ";
$run5 = mysqli_query($db,$q5);
$simple5 = mysqli_fetch_assoc($run5);

$q = "SELECT * FROM `users`";
$run = mysqli_query($db,$q);
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


	<style type="text/css">
		button {
    border: 1px solid;
    border-color: #ffff #ffff #ffff;
    border-radius: 3px;
    background: white;
    color: rgba(0, 0, 0, 0.8);
    line-height: 1;
}
	</style>
	
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
  				<li class="list-item  py-2 bg-dark"><a href="usertable.php" class="current text-center px-0">Users Table</a></li>
  				<li class="list-item  py-2 bg-dark"><a href="userinsert.php" class="text-center px-0">Users Insert</a></li>
  				<li class="list-item  py-2 bg-dark"><a href="producttable.php" class="text-center px-0">Product Table</a></li>
  				<li class="list-item  py-2 bg-dark"><a href="Productinsert.php" class="text-center px-0">Product Insert</a></li>
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
			<h4 class="float-right "><i class="ti-user px-md-3 px1"></i><?php echo ucfirst($simple5['name']); ?></h4>	
		</div>
		</div><hr>
		<div class="row">
		<div class="col-md-12 pt-4">
<div class="shopping-cart section">
		<div class="container">
			<?php 
		if(isset($_GET['message'])){
	echo "		<br><div class='alert alert-success'>
  										<a class='close' data-dismiss='alert' aria-label='close'>&times;</a>User Details Has Been Updated.
										</div>";
		}
		 ?>
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th class="text-center">Name</th>
								<th class="text-center">Email</th>
								<th class="text-center">Password</th>
								<th class="text-center">Phone Number</th>
								<th class="text-center">Address</th>
								<th class="text-center">Update</th> 
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						<tbody>

	<?php 
    while ($simple = mysqli_fetch_assoc($run)) {
     ?>

							<tr>
								<td class="product-des" data-title="Name">
									<p class="product-des text-center"><?php echo $simple['name']; ?></p>
								</td>
								<td class="product-des" data-title="Email">
									<p class="product-des text-center"><?php echo $simple['email']; ?></p>
								</td>
								<td class="product-des" data-title="Password">
									<p class="product-des text-center"><?php echo $simple['password']; ?></p>
								</td>
								<td class="product-des" data-title="Number">
									<p class="product-des text-center"><?php echo $simple['number']; ?></p>
								</td>
								<td class="product-des" data-title="Address">
									<p class="product-des text-center"><?php echo $simple['address']; ?></p>
								</td>
								<td class="product-des" data-title="Update">	
									<p class="product-des text-center"><button class="btn btn-dark"><a href="userupdate.php?id=<?php echo $simple['id']; ?>" class="text-light">Update</a></button></p>
								</td>
								 
								<td class="action text-center" data-title="Delete">
									 <form method="POST">
									<button type="submit" name="delete"><i class="ti-trash remove-icon" ></i></button><input type="hidden" name="id" value="<?php echo $simple['id']; ?>">
								</form>
								</td>
							</tr>
						<?php } ?>
						<?php 
						if (isset($_POST['delete'])){
						$i = $_POST['id'];

						$Q = "DELETE FROM `users` WHERE `id` = '$i';";
						// 
						mysqli_query($db , $Q);	
						header("location:usertable.php");
						}
						 ?>
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