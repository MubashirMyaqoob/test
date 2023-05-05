<?php if (isset($_POST['add'])) {
	if (isset($_SESSION['cart'])) {
		$iteamId = array_column($_SESSION['cart'], "item_id");
		if (!in_array($_SERVER['cart'],$iteamId)) {
		 	$count = count($_SESSION['cart']);
		 	$item_array = array(
		 	'item_id' => $_POST['id'],
		 	'iteam_name' => $_POST['name']
		 	);
		 	$_SESSION['cart'][$count] = $item_array;
		 	echo "<script> window.location = 'shop-grid.php'</script>";
		 } 
		 echo "<script> window.location = 'shop-grid.php'</script>";
		 echo "alert('Item is already in cart')";
	}else{
		$item_array = array(
			'iteam_id' => $_POST['id'],
			'iteam_name' => $_POST['name']
		);
		$_SESSION['cart'][0] = $iteam_array;
		echo "<script> window.location = 'shop-grid.php'";
	}
} ?>