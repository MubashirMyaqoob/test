<?php 
include "db.php";
$_SESSION['active'] = "home";
include "header.php";
if (isset($_POST['add_to_cart'])) {
												if (isset($_SESSION["shopping_cart"])) {
													$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
													if (!in_array($_POST['hidden_id'], $item_array_id)) {
														$count = count($_SESSION["shopping_cart"]);
														$item_array = array(
														'item_id' => $_POST['hidden_id'],
														'item_name' => $_POST['hidden_name'],
														'item_price' => $_POST['hidden_price'],
														'item_img' => $_POST['hidden_img'],
														'item_quantity' => $_POST['quant'],
														'item_size' => $_POST['slist'],
														'item_sku' => $_POST['hidden_sku']
													);
														$_SESSION["shopping_cart"][$count] = $item_array;
														echo '<script> window.location="index.php"</script>';
													}else{
														echo '<script> alert("Item Already Added")</script>';
														echo '<script> window.location="index.php"</script>';
													}
												}
												else{
													$item_array = array(
														'item_id' => $_POST['hidden_id'],
														'item_name' => $_POST['hidden_name'],
														'item_price' => $_POST['hidden_price'],
														'item_img' => $_POST['hidden_img'],
														'item_quantity' => $_POST['quant'],
														'item_size' => $_POST['slist'],
														'item_sku' => $_POST['hidden_sku']
													);
													$_SESSION["shopping_cart"][0] = $item_array;
													echo '<script> window.location="index.php"</script>';
												}
											}
 ?>
	
	<!-- Slider Area -->
	<section class="hero-slider">
		<!-- Single Slider -->
<?php 
			$qs = "SELECT * FROM `webmentainnace` WHERE `position` = 'islider'";
			$runs = mysqli_query($db,$qs);
			$simples = mysqli_fetch_assoc($runs);
			 ?>
		<div class="single-slider" style="background-image: url(<?php echo $simples['img']; ?>); background-position: center;">
			<div style="width: 100%; height:100%; background-color: #000000ad;">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-lg-9 offset-lg-3 col-12">
						<div class="text-inner">
							<div class="row">
								<div class="col-lg-7 col-12">
									<div class="hero-text">
										<h1><span class="text-white"><?php echo strtoupper($simples['heading']) ?></span><?php echo strtoupper($simples['additionaltext']) ?></h1>
										<p class="text-white"><?php echo strtoupper($simples['text']) ?></p>
										<div class="button">
											<a href="shop-grid.php" class="btn">Shop Now!</a>
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
	
	
	<!-- Start Product Area -->
    <div class="product-area section">
            <div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>New Items</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="product-info">
							<div class="nav-main">
								<!-- Tab Nav -->
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									
									<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Cosmetics" role="tab">Cosmetics</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Jewellery" role="tab">Jewellery</a></li>
									
								</ul>
								<!--/ End Tab Nav -->
							</div>
							<div class="tab-content" id="myTabContent">
								<!-- Start Single Tab -->
								<div class="tab-pane fade show active" id="Cosmetics" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											<?php 
											$q = "SELECT * FROM `products` WHERE `category` = 'cosmetics' ORDER BY `id` DESC LIMIT 8";
											$run = mysqli_query($db,$q);
											while ($simple = mysqli_fetch_assoc($run)) { $pId = $simple['id'];
											 ?>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
									<div class="product-img">
										<a data-toggle="modal" data-target="#exampleModal<?php echo $pId ?>" title="shop" >
											<img class="default-img" src="<?php echo $simple['img']; ?>" style="width: 550px;height: 357px;" alt="#">
											<img class="hover-img" src="<?php echo $simple['subimg']; ?>" style="width: 550px;height: 357px;" alt="#">
										</a>
										
									</div>
									<div class="product-content">
										<h3><a data-toggle="modal" data-target="#exampleModal<?php echo $pId ?>" title="shop" ><?php echo ucfirst($simple['name']) ?></a></h3>
										<div class="product-price">
											<span>$<?php echo $simple['price']; ?></span>
										</div>
									</div>
								</div>
							</div>
								<!-- Modal -->
			<div class="modal fade" id="exampleModal<?php echo $pId ?>" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
						</div>
						<div class="modal-body">
							<div class="row no-gutters">
								<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
									<!-- Product Slider -->
										<div class="product-gallery">
											<div class="quickview-slider-active">
												<div class="single-slider">
													<img src="<?php echo $simple['img']; ?>" alt="#" style="width: 760px;height: 528px;">
												</div>
												<div class="single-slider">
													<img src="<?php echo $simple['subimg']; ?>" alt="#" style="width: 760px;height: 528px;">
												</div>
												
											</div>
										</div>
									<!-- End Product slider -->
								</div>
								<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
									<div class="quickview-content">
										<h2><?php echo ucfirst($simple['name']); ?></h2>
										<div class="quickview-ratting-review">
											<div class="quickview-ratting-wrap">
												
												<h6> SKU : <?php echo $simple['sku']; ?> </h6>
											</div>
											<div class="quickview-stock">
												<?php if ($simple['stock'] == "Out of stock" or $simple['stock'] == "out of stock" or $simple['stock'] == "Outofstock") { ?>
													<span><i class="fa fa-times-circle-o"></i> Out Of Stock</span>
												<?php }else{ ?>
											<span><i class="fa fa-check-circle-o "></i> In Stock</span>
											<?php } ?>
												
												
											</div>
										</div>
										<h3>$<?php echo $simple['price']; ?></h3>
										<div class="quickview-peragraph">
											<p><?php echo ucfirst($simple['description']); ?></p>
										</div>
										<form method="POST">
										<div class="size">
											<div class="row">
												<div class=" col-lg-6 col-12">
													<h5 class="title ">Size</h5>
													<select name="slist">
														<option selected="selected"  > s    </option>
														<option>m</option>
														<option>l</option>
														<option>xl</option>
													</select>
												</div>
												<div class=" col-lg-6 col-12">
													<h5 class="title ">Weight</h5>
											
											<p> <?php echo $simple['weight']; ?> </p>
												</div>
											</div>
										</div>
											<div class="quantity">
											<!-- Input Order -->
											<div class="input-group">
												<div class="button minus">
													<button type="button" class="btn btn-primary btn-number"  disabled="disabled" data-type="minus" data-field="quant">
														<i class="ti-minus"></i>
													</button>
												</div>
												<input type="text" name="quant" class="input-number"  data-min="1" data-max="50" value="1">
												<div class="button plus">
													<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant">
														<i class="ti-plus"></i>
													</button>
												</div>
											</div>
											<!--/ End Input Order -->
										</div>
										<div class="add-to-cart">
											
												<input type="text" name="hidden_id" hidden value="<?php echo $simple['id']; ?>">
												<input type="text" name="hidden_name" hidden value="<?php echo $simple['name']; ?>">
												<input type="text" name="hidden_price" hidden value="<?php echo $simple['price']; ?>">
												<input type="text" name="hidden_img" hidden value="<?php echo $simple['img']; ?>">
												<input type="text" name="hidden_sku" hidden value="<?php echo $simple['sku']; ?>">
											<?php if ($simple['stock'] == "Out of stock" or $simple['stock'] == "out of stock" or $simple['stock'] == "Outofstock") {
													
												}else{ ?>
											<button  class="btn" name="add_to_cart" type="submit" >Add to cart</button>
											<?php } ?>
											
											</form>
											
										</div>
										<div class="default-social">
											<h4 class="share-now">Share:</h4>
											<ul>
												<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
												<li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<!-- Modal end -->
							<?php }
							
						?>
											
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="Jewellery" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											<?php  $q1 = "SELECT * FROM `products` WHERE `category` = 'jewellery'  ORDER BY `id` DESC LIMIT 8";
											$run1 = mysqli_query($db,$q1);
											while ($simple1 = mysqli_fetch_assoc($run1)) { $pId1 = $simple1['id']; ?>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
									<div class="product-img">
										<a data-toggle="modal" data-target="#exampleModal<?php echo $pId1 ?>" title="shop" >
											<img class="default-img" src="<?php echo $simple1['img']; ?>" style="width: 550px;height: 357px;" alt="#">
											<img class="hover-img" src="<?php echo $simple1['subimg']; ?>" style="width: 550px;height: 357px;" alt="#">
										</a>
										
									</div>
									<div class="product-content">
										<h3><a data-toggle="modal" data-target="#exampleModal<?php echo $pId1 ?>" title="shop" ><?php echo ucfirst($simple1['name']) ?></a></h3>
										<div class="product-price">
											<span>$<?php echo $simple1['price']; ?></span>
										</div>
									</div>
								</div>
							</div>
								<!-- Modal -->
			<div class="modal fade" id="exampleModal<?php echo $pId1 ?>" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
						</div>
						<div class="modal-body">
							<div class="row no-gutters">
								<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
									<!-- Product Slider -->
										<div class="product-gallery">
											<div class="quickview-slider-active">
												<div class="single-slider">
													<img src="<?php echo $simple1['img']; ?>" alt="#" style="width: 760px;height: 528px;">
												</div>
												<div class="single-slider">
													<img src="<?php echo $simple1['subimg']; ?>" alt="#" style="width: 760px;height: 528px;">
												</div>
												
											</div>
										</div>
									<!-- End Product slider -->
								</div>
								<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
									<div class="quickview-content">
										<h2><?php echo ucfirst($simple1['name']); ?></h2>
										<div class="quickview-ratting-review">
											<div class="quickview-ratting-wrap">
												
												<h6> SKU : <?php echo $simple1['sku']; ?> </h6>
											</div>
											<div class="quickview-stock">
												<?php if ($simple1['stock'] == "Out of stock" or $simple1['stock'] == "out of stock" or $simple1['stock'] == "Outofstock") { ?>
													<span><i class="fa fa-times-circle-o"></i> Out Of Stock</span>
												<?php }else{ ?>
											<span><i class="fa fa-check-circle-o "></i> In Stock</span>
											<?php } ?>
											</div>
										</div>
										<h3>$<?php echo $simple1['price']; ?></h3>
										<div class="quickview-peragraph">
											<p><?php echo ucfirst($simple1['description']); ?></p>
										</div>
										<form method="POST">
										<div class="size">
											<div class="row">
												<div class=" col-lg-6 col-12">
													<h5 class="title ">Size</h5>
													<select name="slist">
														<option selected="selected"  > s    </option>
														<option>m</option>
														<option>l</option>
														<option>xl</option>
													</select>
												</div>
												<div class=" col-lg-6 col-12">
													<h5 class="title ">Weight</h5>
											
											<p> <?php echo $simple1['weight']; ?> </p>
												</div>
											</div>
										</div>
											<div class="quantity">
											<!-- Input Order -->
											<div class="input-group">
												<div class="button minus">
													<button type="button" class="btn btn-primary btn-number"  disabled="disabled" data-type="minus" data-field="quant">
														<i class="ti-minus"></i>
													</button>
												</div>
												<input type="text" name="quant" class="input-number"  data-min="1" data-max="50" value="1">
												<div class="button plus">
													<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant">
														<i class="ti-plus"></i>
													</button>
												</div>
											</div>
											<!--/ End Input Order -->
										</div>
										<div class="add-to-cart">
											
												<input type="text" name="hidden_id" hidden value="<?php echo $simple1['id']; ?>">
												<input type="text" name="hidden_name" hidden value="<?php echo $simple1['name']; ?>">
												<input type="text" name="hidden_price" hidden value="<?php echo $simple1['price']; ?>">
												<input type="text" name="hidden_img" hidden value="<?php echo $simple1['img']; ?>">
												<input type="text" name="hidden_sku" hidden value="<?php echo $simple1['sku']; ?>">
											<?php if ($simple1['stock'] == "Out of stock" or $simple1['stock'] == "out of stock" or $simple1['stock'] == "Outofstock") {
													
												}else{ ?>
											<button  class="btn" name="add_to_cart" type="submit" >Add to cart</button>
											<?php } ?>
											
											</form>
											
										</div>
										<div class="default-social">
											<h4 class="share-now">Share:</h4>
											<ul>
												<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
												<li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal end -->
							<?php }
							
						?>

											
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								
							</div>
						</div>
					</div>
				</div>
            </div>
    </div>
	<!-- End Product Area -->
	
	<!-- Start Midium Banner  -->
	<section class="midium-banner">
		<div class="container">
			<div class="row">
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<?php 
			$qmb = "SELECT * FROM `webmentainnace` WHERE `position` = 'mediumbanner1'";
			$runmb = mysqli_query($db,$qmb);
			$simplemb = mysqli_fetch_assoc($runmb);
			 ?>
					<div class="single-banner">
						<div style="width: 100%; height:100%; background-color: #000000ad;">
						<img src="<?php echo $simplemb['img']; ?>" style="width: 600px;height: 370px;" alt="#">
						<div class="content">
							<p ><?php echo strtoupper($simplemb['heading']);?></p>
							<h3 ><?php echo strtoupper($simplemb['text']);?><span> <?php echo strtoupper($simplemb['additionaltext']);?></span></h3>
							<a href="#">Shop Now</a>
						</div>
					</div>
				</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
						<?php 
			$qmb1 = "SELECT * FROM `webmentainnace` WHERE `position` = 'mediumbanner2'";
			$runmb1 = mysqli_query($db,$qmb1);
			$simplemb1 = mysqli_fetch_assoc($runmb1);
			 ?>
					<div class="single-banner">
						<div style="width: 100%; height:100%; background-color: #000000ad;">
						<img src="<?php echo $simplemb1['img']; ?>" style="width: 600px;height: 370px;" alt="#">
						<div class="content">
							<p><?php echo strtoupper($simplemb1['heading']);?></p>
							<h3 ><?php echo strtoupper($simplemb1['text']);?><span><?php echo strtoupper($simplemb1['additionaltext']);?></span></h3>
							<a href="#" class="btn">Shop Now</a>
						</div>
					</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section>
	<!-- End Midium Banner -->
	
	<br>
	
	
	<!-- Start Cowndown Area -->
	<?php 
	$qcown = "SELECT * FROM `webmentainnace` WHERE `position` = 'cownarea'";
	$cownrun = mysqli_query($db,$qcown);
	$cownsimple = mysqli_fetch_assoc($cownrun);
	 ?>
	<section class="cown-down">
		<div class="section-inner ">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-12 padding-right">
						<div class="image">
							<img src="<?php echo $cownsimple['img'] ?>" style="width: 850px; height: 590px;" alt="#">
						</div>	
					</div>	
					<div class="col-lg-6 col-12 padding-left">
						<div class="content">
							<div class="heading-block">
								<p class="small-title">Deal of day</p>
								<h3 class="title"><?php echo strtoupper($cownsimple['heading']); ?></h3>
								<p class="text"><?php echo strtoupper($cownsimple['text']) ?> </p>
								<h1 class="price"><?php echo strtoupper($cownsimple['additionaltext']) ?></h1>
								<div class="coming-time">
									<div class="clearfix" data-countdown="2021/02/30"></div>
								</div>
							</div>
						</div>	
					</div>	
				</div>
			</div>
		</div>
	</section>
	<!-- /End Cowndown Area -->
	
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
	
	<!-- Start Shop Services Area -->
	<br>
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