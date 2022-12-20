<?php
	include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="../css/update.css">
</head>
<body>
	<?php
		$name = $name1 = $name2 = $name3 = '';
		$result_update ="";
		$add = isset($_GET['add']) ? $_GET['add'] : header("location: ../admin.php");

		if($add == 'catalog'){
			$name = 'block';
		}
		elseif($add == 'post'){
			$name1 = 'block';
		}
		elseif($add == 'product'){
			$name2 = 'block';
		}
		elseif($add == 'admin'){
			$name3 = 'block';
		}

		if($add == 'catalog'){
			if(isset($_POST["update"])){
				$catalog_id = $_POST["catalog_id"];
				$name_catalog = $_POST["name_catalog"];
				$result = mysqli_query($conn,"INSERT INTO catalog VALUES('".$catalog_id."','".$name_catalog."')");
				if($result){
					header("location: ../admin.php?runPage=catalog");
				}
				else{
					echo "Không thể chạy đượclệnh sql.";
				}
			}
		}

		if($add == 'post'){
			if(isset($_POST["update1"])){
				$id_post = $_POST["id_post"];
				$name_post = $_POST["name_post"];
				$infor_post = $_POST["infor_post"];
				$image_post = $_POST["image_post"];
				$result = mysqli_query($conn,"INSERT INTO post VALUES('".$id_post."','".$name_post."','".$infor_post."','".$image_post."')");
				if($result){
					header("location: ../admin.php?runPage=post");
				}
				else{
					echo "Không thể chạy được lệnh sql.";
				}
			}
		}

		if($add == 'product'){
			if(isset($_POST["update2"])){
				$id_product = $_POST["id_product"];
				$name_product = $_POST["name_product"];
				$price = $_POST["price"];
				$amounts = $_POST["amounts"];
				$desciption = $_POST["desciption"];
				$color = $_POST["color"];
				$size = $_POST["size"];
				$status = $_POST["status"];
				$sale = $_POST["sale"];
				$image = $_POST["image"];
				$image_list = $_POST["image_list"];
				$catalog_id = $_POST["catalog_id"];
				$notes = $_POST["notes"];
				$result = mysqli_query($conn,"INSERT INTO product VALUES('".$id_product."','".$name_product."','".$price."','".$amounts."','".$desciption."','".$color."','".$size."','".$status."','".$sale."','".$image."','".$image_list."','".$catalog_id."','".$notes."')");
				if($result){
					header("location: ../admin.php?runPage=product");
				}
				else{
					echo "Không thể chạy được lệnh sql.";
				}
			}
		}

		if($add == 'admin'){
			if(isset($_POST["update4"])){
				$user_id = $_POST["user_id"];
				$username = $_POST["username"];
				$password = $_POST["password"];
				$fullname = $_POST["fullname"];
				$phonenumber = $_POST["phonenumber"];
				$email = $_POST["email"];
				$address = $_POST["address"];
				$permission = $_POST["permission"];
				$result = mysqli_query($conn,"INSERT INTO admin VALUES('".$user_id."','".$username."','".$password."','".$fullname."','".$phonenumber."','".$email."','".$address."','".$permission."')");
				if($result){
					header("location: ../admin.php?runPage=admin");
				}
				else{
					echo "Không thể chạy được lệnh sql.";
				}
			}
		}
	?>
	<div class="main_show_formValidate" style="display: <?php echo $name;?>;">
		<form method="POST" action="" name="update_catalog" >
			<h3>AVENUE FASHION <?php echo strtoupper($add);?> ADD</h3>
			<div class="form_update_catalog">
				<div class="form_update_catalog_label">
					<label for="catalog_id">Catalog ID: </label><br>
					<label for="name_catalog">Name Catalog:</label>
				</div>
				<div class="form_update_catalog_input">
					<input type="text" name="catalog_id" id="catalog_id" required><br>
					<input type="text" name="name_catalog" id="name_catalog" required>
				</div>
			</div>
			<div class="form_update_catalog_button">
				<input type="submit" name="update" value="Lưu">
				<a href="../admin.php?runPage=catalog"><input type="button" name="button" value="Hủy"></a>
			</div>
		</form>
	</div>
	<div class="main_show_formValidate" style="display: <?php echo $name1;?>;">
		<form method="POST" action="" name="update_post">
			<h3>AVENUE FASHION <?php echo strtoupper($add);?> ADD</h3>
			<div class="form_update_catalog">
				<div class="form_update_catalog_label">
					<label for="id_post">Post ID: </label><br>
					<label for="name_post">Name Post:</label><br>
					<label for="infor_post">Information Post: </label><br>
					<label for="image_post">Image Post: </label>
				</div>
				<div class="form_update_catalog_input">
					<input type="text" name="id_post" id="id_post" readonly>
					<input type="text" name="name_post" id="name_post" placeholder="Name post..." >
					<input type="text" name="infor_post" id="infor_post" placeholder="Information post..." >
					<input type="text" name="image_post" id="image_post" placeholder="File image..." >
				</div>
			</div>
			<div class="form_update_catalog_button">
				<input type="submit" name="update1" value="Lưu">
				<a href="../admin.php?runPage=post"><input type="button" name="button" value="Hủy"></a>
			</div>
		</form>
	</div>
	<div class="main_show_formValidate" style="display: <?php echo $name2;?>;">
		<form method="POST" action="" name="update_product">
			<h3>AVENUE FASHION <?php echo strtoupper($add);?> ADD</h3>
			<div class="form_update_catalog">
				<div class="form_update_catalog_label">
					<label for="id_product">Product ID: </label><br>
					<label for="name_product">Name Product:</label><br>
					<label for="price">Price Product: </label><br>
					<label for="amounts">Amounts Product: </label><br>
					<label for="desciption">Description Product:</label><br>
					<label for="color">Color Product: </label><br>
					<label for="size">Size Product: </label><br>
					<label for="status">Status Product:</label><br>
					<label for="sale">Sale Product: </label><br>
					<label for="image">Image Product: </label><br>
					<label for="image_list">Image List:</label><br>
					<label for="catalog_id">Catalog ID: </label><br>
					<label for="notes">Notes: </label>
				</div>
				<div class="form_update_catalog_input">
					<input type="text" name="id_product" id="id_product" placeholder="Nhập id product...">
					<input type="text" name="name_product" id="name_product" placeholder="Name product..." >
					<input type="text" name="price" id="price" placeholder="Price product..." >
					<input type="text" name="amounts" id="amounts" placeholder="Amounts..." >
					<input type="text" name="desciption" id="desciption" placeholder="Description product..." ><br>
					<select name="color" id="color">
						<option value="red">red</option>
						<option value="red,green">red,green</option>
						<option value="red,green,blue">red,green,blue</option>
						<option value="red,green,blue,gray">red,green,blue,gray</option>
					</select><br>
					<select name="size" id="size">
						<option value="X">X</option>
						<option value="X,XX">X,XX</option>
						<option value="X,XX,XXL">X,XX,XXL</option>
						<option value="X,XX,XXL,XXXL">X,XX,XXL,XXXL</option>
					</select><br>
					<input type="text" name="status" id="status" placeholder="Status product..." >
					<input type="text" name="sale" id="sale" placeholder="Sale product..." >
					<input type="text" name="image" id="image" placeholder="Image product..." >
					<input type="text" name="image_list" id="image_list" placeholder="Image product list..." ><br>
					<select name="catalog_id" id="catalog_id">
						<?php
							$sql_catalogID = mysqli_query($conn,"SELECT * FROM catalog");
							while($result_catalogID = mysqli_fetch_array($sql_catalogID)){
								echo "<option value='".$result_catalogID['catalog_id']."'>".$result_catalogID['catalog_id']."</option>";
							}
						?>
					</select><br>
					<input type="text" name="notes" id="notes" placeholder="Notes..." >
				</div>
			</div>
			<div class="form_update_catalog_button">
				<input type="submit" name="update2" value="Lưu">
				<a href="../admin.php?runPage=product"><input type="button" name="button" value="Hủy"></a>
			</div>
		</form>
	</div>
	<div class="main_show_formValidate" style="display: <?php echo $name3;?>;">
		<form method="POST" action="" name="update_account">
			<h3>AVENUE FASHION <?php echo strtoupper($add);?> ADD</h3>
			<div class="form_update_catalog">
				<div class="form_update_catalog_label">
					<label for="user_id">User ID: </label><br>
					<label for="username">User Name:</label><br>
					<label for="password">Password: </label><br>
					<label for="fullname">Full Name: </label><br>
					<label for="phonenumber">Phone Number: </label><br>
					<label for="email">Email:</label><br>
					<label for="address">Address: </label><br>
					<label for="permission">Permission: </label>
				</div>
				<div class="form_update_catalog_input">
					<input type="text" name="user_id" id="user_id" readonly>
					<input type="text" name="username" id="username" placeholder="Name post..." >
					<input type="text" name="password" id="password" placeholder="Information post..." >
					<input type="text" name="fullname" id="fullname" placeholder="File image..." >
					<input type="text" name="phonenumber" id="phonenumber" placeholder="Your phonenumber...">
					<input type="text" name="email" id="email" placeholder="Name post..." >
					<input type="text" name="address" id="address" placeholder="Information post..." ><br>
					<select name="permission" id="permission">
						<option value="Admin">Admin</option>
						<option value="Khách Hàng">Khách Hàng</option>
					</select>
				</div>
			</div>
			<div class="form_update_catalog_button">
				<input type="submit" name="update4" value="Lưu">
				<a href="../admin.php?runPage=admin"><input type="button" name="button" value="Hủy"></a>
			</div>
		</form>
	</div>
</body>
</html>