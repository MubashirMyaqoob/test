<?php 
if (!isset($_COOKIE['email']) and $_SESSION["shopping_cart"]  == "") {
	header("location:shop-grid.php");
}else{
include "header.php";

 ?>
	
		<!-- Breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<ul class="bread-list">
								<li><a href="index1.php">Home<i class="ti-arrow-right"></i></a></li>
								<li class="active"><a href="blog-single.php">Checkout</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
				
		<!-- Start Checkout -->
		<section class="shop checkout section">
			<div class="container">
				<div class="row"> 
					<div class="col-lg-8 col-12">
						<div class="checkout-form">
							<h2>Make Your Checkout Here</h2>
							<p>Please register in order to checkout more quickly</p>
							<!-- Form -->
							<form class="form" method="post" >
								<?php if (!empty($_SESSION["shopping_cart"])) {
										$total = 0;
										foreach ($_SESSION["shopping_cart"] as $key => $value) {
										

 ?>
							
								
								<input type="text" name="pid[]" value="<?php echo $value["item_id"]; ?>" hidden>
								<input type="text" name="pname[]" value="<?php echo $value["item_name"]; ?>" hidden>
								<input type="text" name="psize[]" value="<?php echo $value["item_size"]; ?>" hidden>
								<input type="text" name="psku[]" value="<?php echo $value["item_sku"]; ?>" hidden>
								<input type="text" name="pquantity[]" hidden value="<?php echo $value["item_quantity"]; ?>">
								
								
							<?php } ?>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Name<span>*</span></label>
											<input type="text" name="name" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Address Line 1<span>*</span></label>
											<input type="text" name="address" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Email Address<span>*</span></label>
											<input type="email" name="email" placeholder="" value="<?php echo $_COOKIE['email']; ?>" required="required" disabled>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Work Number<span>*</span></label>
											<input type="number" name="wno" placeholder="" required="required">
										</div>
									</div>
									
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Cell Number<span>*</span></label>
											<input type="number" name="cnumber" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Date Of Birth<span>*</span></label>
											<input type="date" name="dob" placeholder="" required="required">
										</div>
									</div>
									
									<div class="col-lg-12 col-md-12 col-12">
										<div class="form-group ">
										<label>your message<span>*</span></label>
										<textarea name="message" placeholder=""></textarea>
										</div>
									</div>
								</div>
							
							<!--/ End Form -->
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="order-details">
							<!-- Order Widget -->
							<div class="single-widget">
								<h2>CART  TOTALS</h2>
								<div class="content">
									<ul>
										<li>Sub Total<span>$<?php echo $_SESSION['total']; ?></span></li>
										<li>(+) Shipping<span>Free</span></li>
										<li class="last">Total<span>$<?php echo $_SESSION['total']; ?></span></li>
									</ul>
								</div>
							</div>
							<!--/ End Order Widget -->
							<!-- Order Widget -->
							<div class="single-widget">
								<h2>Payments</h2>
								<div class="content">
									<div class="radio">
										<label class="px-4 pt-4" ><input name="payment" type="radio" value="Check Payments"> Check Payments</label><br>
										<label class="px-4" ><input name="payment"  type="radio" value="Cash On Delivery"> Cash On Delivery</label><br>
										<label class="px-4" ><input name="payment"  type="radio" value="PayPal"> PayPal</label>
									</div>
								</div>
							</div>
							<!--/ End Order Widget -->
							<!-- Payment Method Widget -->
							<div class="single-widget payement">
								<div class="content">
									<img src="images/payment-method.png" alt="#">
								</div>
							</div>
							<!--/ End Payment Method Widget -->
							<!-- Button Widget -->
							<div class="single-widget get-button">
								<div class="content">
									<div class="button">
										<button class="btn" type="submit" name="submit">proceed to checkout</button>
									</div>
								</div>
							</div>
							</form>
							<?php 
							if (isset($_POST['submit'])) {
								$n = $_POST['name'];
								$a = $_POST['address'];
								$e = $_COOKIE['email'];
								$wno = $_POST['wno'];
								$cno = $_POST['cnumber'];
								$dob = $_POST['dob'];
								$m = $_POST['message'];
								$p = $_POST['payment'];
								$pname = $_POST['pname'];
								$pn=implode(",",$pname );
								$psize = $_POST['psize'];
								$ps=implode(",",$psize );
								$psku = $_POST['psku'];
								$psk=implode(",",$psku );
								$pquantity = $_POST['pquantity'];
								$pq=implode(",",$pquantity );
								$t= $_SESSION['total'];
								$pid=$_POST['pid'];
								$pid1=implode(",",$pid );
								$cq = "INSERT INTO `ordertabel`( `name`, `email`, `worknumber`, `cellnumber`, `dob`, `message`, `paymentmethod`, `productid`,`productname`, `productsize`, `productsku`, `productquantity`, `total`, `address`) VALUES ('$n','$e','$wno','$cno','$dob','$m','$p','$pid1','$pn','$ps','$psk','$pq','$ $t','$a')";
								print_r($cq);
								$crun = mysqli_query($db,$cq);

								echo '<script> alert("Your Order Has Been Placed")</script>';
								
							}
							 ?>
							<!--/ End Button Widget -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Checkout -->
		
		<!-- Start Shop Services Area  -->
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
		<!-- End Shop Services -->
		
		
			
<?php 
include "footer.php";}}
 ?>