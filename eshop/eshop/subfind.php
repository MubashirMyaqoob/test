<?php 
include "db.php";
$_SESSION['active'] = "product";
include "header.php";
// session_destroy();
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
														echo '<script> window.location="shop-grid.php"</script>';
													}else{
														echo '<script> alert("Item Already Added")</script>';
														echo '<script> window.location="shop-grid.php"</script>';
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
													echo '<script> window.location="shop-grid.php"</script>';
												}
											}
 ?>
		
		<!-- Breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<ul class="bread-list">
								<li><a href="index1.php">Home<i class="ti-arrow-right"></i></a></li>
								<li class="active"><a href="blog-single.php">Shop Grid</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
		
		<!-- Product Style -->
		<section class="product-area shop-sidebar shop section">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4 col-12">
						<div class="shop-sidebar">
								<!-- Single Widget -->
								<div class="single-widget category">
									<h3 class="title">Categories</h3>
									
									<ul class="categor-list">
									
										<?php 
									$catq = "SELECT * FROM `category` ";
									$catrun = mysqli_query($db,$catq);
									while($catsimple =  mysqli_fetch_assoc($catrun) ){
										$cid = $catsimple['id'];
										$cn = $catsimple['Category'];
									 ?>
										<li>
											<a href="catfind.php?id=<?php echo $cn ?>"><?php echo $catsimple['Category']; ?></a>
										
										<ul class="dropdown">
											<?php 
											$subq = "SELECT * FROM `subcategory` WHERE `categoryid` = '$cid'";
											$subrun = mysqli_query($db,$subq);
											while ($subsimple = mysqli_fetch_assoc($subrun)) {
											$sid = $subsimple['id'];
											$cn = $subsimple['subcategory'];
											 ?> 		
										<li><a href="subfind.php?id=<?php echo $cn ?>">
											<?php echo $subsimple['subcategory']; ?></a>
										 </li><?php } ?>
										</ul>
									</li><?php } ?>	
									</ul><!-- <div id="txtHint" hidden>person info will be listed here</div> -->
								</div>
								<!--/ End Single Widget -->
								
								
						</div>
					</div>
					<div class="col-lg-9 col-md-8 col-12 txtHint">
						
						<div class="row">
						
							<?php 
							if (isset($_GET['id'])) {
								$s = $_GET['id'];

								$q="SELECT * FROM `products` WHERE  `subcategory` = '$s'";
								
								$run = mysqli_query($db,$q);
								
								
							}else{
								
							$q = "SELECT * FROM `products` ";
							$run = mysqli_query($db,$q);
							}?>
							<?php
							while ($simple = mysqli_fetch_assoc($run)) {
								$pId = $simple['id'];
								?>
							<div class="col-lg-4 col-md-6 col-12">
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
												<?php if ($simple['stock'] == "Out of stock" or $simple['stock'] == "out of stock" or $simple['stock'] == "Outofstock") {
												 ?>
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
			</div>
		</section>
		<!--/ End Product Style 1  -->	

		
		
		
	
		
		<?php 
include "footer.php";
		 ?>