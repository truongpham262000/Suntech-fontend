<?php
	session_start();
	require_once "connect.php";
	if(isset($_GET['CartID'])){
		$id = $_GET['CartID'];
	}

	$action = isset($_GET['action']) ? $_GET['action'] : "add";

	$quality = isset($_GET['quality']) ? $_GET['quality'] : 1;

	$color = isset($_GET['product_color']) ? $_GET['product_color'] : 'red';

	$size = isset($_GET['product_size']) ? $_GET['product_size'] : 'X';
	


	$sql = "SELECT * FROM product WHERE id_product='".$id."'";
	$query = mysqli_query($conn,$sql);
	$result = mysqli_fetch_array($query);


	$item = [
		'id' => $result['id_product'],
		'name' => $result['name_product'],
		'image' => $result['image'],
		'price' => $result['price'],
		'amount' => $result['amounts'],
		'color' => $color,
		'size' => $size,
		'quality' => $quality
	];

	// ADD product to cart
	if($action == "add"){
		if(isset($_SESSION['cart'][$id])){
			$_SESSION['cart'][$id]['color'] = $color;
			$_SESSION['cart'][$id]['size'] = $size;
			$_SESSION['cart'][$id]['quality'] += $quality;
		} else {
			$_SESSION['cart'][$id] = $item;
		}
	}

	// Remove product in cart
	if($action == 'delete'){
		unset($_SESSION['cart'][$id]);
	}

	header("location: ../ProductCart.php");
?>