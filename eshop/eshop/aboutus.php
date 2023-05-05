<?php
include "db.php";
$_SESSION['active'] = "aboutus" ;
include "header.php";
?>
	
	<!-- Slider Area -->
	<section class="hero-slider">
		<!-- Single Slider -->
		 
		<?php 
			$qs = "SELECT * FROM `webmentainnace` WHERE `position` = 'aslider'";
			$runs = mysqli_query($db,$qs);
			$simples = mysqli_fetch_assoc($runs);
			 ?>
		 
		<div class="single-slider" style="background-image: url(<?php echo $simples['img']; ?>); ">
			<div style="width: 100%; height:100%; background-color: #000000ad;">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-lg-9 offset-lg-3 col-12">
						<div class="text-inner">
							<div class="row">
								<div class="col-lg-7 col-12">
									<div class="hero-text">

										<h1><span><?php echo strtoupper($simples['heading']) ?></span><?php echo strtoupper($simples['additionaltext']) ?></h1>
										<p class="text-white"><?php echo strtoupper($simples['text']) ?></p>
										<div class="button">
											<a href="shop-grid.php" class="btn">GET KNOW ABOUT!</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<!--/ End Single Slider -->
	</section>
	<!--/ End Slider Area -->
	
	<!-- Start Small Banner  -->
	
	

	
<br> <br>
	<?php 
	$qcown = "SELECT * FROM `webmentainnace` WHERE `position` = 'acownarea'";
	$cownrun = mysqli_query($db,$qcown);
	$cownsimple = mysqli_fetch_assoc($cownrun);
	 ?>
	
	<!-- Start Cowndown Area -->
	<section class="cown-down">
		<div class="section-inner ">
			<div class="container-fluid">
				<div class="row">
						
					<div class="col-lg-6 col-12 padding-right">
						<div class="content">
							<div class="heading-block">
								<p class="small-title"><?php echo strtoupper($cownsimple['additionaltext']) ?></p>
								<h3 class="title"><?php echo strtoupper($cownsimple['heading']); ?></h3>
								<p class="text"><?php echo strtoupper($cownsimple['text']) ?></p>
							</div>
						</div>	
					</div>
					<div class="col-lg-6 col-12 padding-left">
						<div class="image">
							<img src="<?php echo $cownsimple['img'] ?>" style="width: 850px; height: 590px;" alt="#">
						</div>	
					</div>	
				</div>
			</div>
		</div>
	</section>.



<?php 
	$qcown1 = "SELECT * FROM `webmentainnace` WHERE `position` = 'acownarea1'";
	$cownrun1 = mysqli_query($db,$qcown1);
	$cownsimple1 = mysqli_fetch_assoc($cownrun1);
	 ?>
	<section class="cown-down">
		<div class="section-inner ">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-12 padding-right">
						<div class="image">
							<img src="<?php echo $cownsimple1['img'] ?>" style="width: 850px; height: 590px;" alt="#">
						</div>	
					</div>	
					<div class="col-lg-6 col-12 padding-left">
						<div class="content">
							<div class="heading-block">
								<p class="small-title"><?php echo strtoupper($cownsimple1['additionaltext']) ?></p>
								<h3 class="title"><?php echo strtoupper($cownsimple1['heading']); ?></h3>
								<p class="text"><?php echo strtoupper($cownsimple1['text']) ?></p>
								
							</div>
						</div>	
					</div>	
				</div>
			</div>
		</div>
	</section>.




	<!-- Start Most Popular -->
	<div class="product-area most-popular section">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>OUR TEAM</h2>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
						<!-- Start Single Product -->
						<?php 
						$q = "SELECT * FROM `ourteam` ";
						$run = mysqli_query($db,$q);
						while ($simple = mysqli_fetch_assoc($run)) {
						
						 ?>
						<div class="single-product">
							<div class="product-img">
								<a href="product-details.html">
									<img class="default-img" src="<?php echo $simple['mainimg'] ?>" style="width: 255px;height: 255px;" alt="#">
									<img class="hover-img" src="<?php echo $simple['subimg'] ?>"  style="width: 255px;height: 255px;" alt="#">
									
								</a>
								
							</div>
							<div class="product-content">
								<h3><a href="product-details.html"><?php echo ucfirst($simple['name']) ?></a></h3>
								<div class="product-price">
									
									<span><?php echo ucfirst($simple['position']) ?></span>
								</div>
							</div>
						</div>
					<?php } ?>
						<!-- End Single Product -->
						
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- End Most Popular Area -->






	<!-- /End Cowndown Area -->
	

	
	<!-- Start Shop Services Area -->
	<section class="shop-services section home">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Free shiping</h4>
						<p>Orders over $100</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Free Return</h4>
						<p>Within 30 days returns</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Sucure Payment</h4>
						<p>100% secure payment</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Best Peice</h4>
						<p>Guaranteed price</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Services Area -->
	
	
	
	
	
	<?php 
include "footer.php";
	 ?>