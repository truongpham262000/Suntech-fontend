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
		$name = $name1 = $name2 = $name3 = $name4 = '';
		$result_update ="";
		$idUpdate1 = isset($_GET['idUpdate']) ? $_GET['idUpdate'] : header("location: ../admin.php");
		$tableUpdate1 = isset($_GET['tableUpdate']) ? $_GET['tableUpdate'] : header("location: ../admin.php");

		if($tableUpdate1 == 'catalog'){
			$name = 'block';
			$result_update = mysqli_query($conn,"SELECT * FROM catalog WHERE catalog_id='".$idUpdate1."'");
		}
		elseif($tableUpdate1 == 'post'){
			$name1 = 'block';
			$result_update = mysqli_query($conn,"SELECT * FROM post WHERE id_post='".$idUpdate1."'");
		}
		elseif($tableUpdate1 == 'product'){
			$name2 = 'block';
			$result_update = mysqli_query($conn,"SELECT * FROM product WHERE id_product='".$idUpdate1."'");
		}
		elseif($tableUpdate1 == 'transaction'){
			$name3 = 'block';
			$result_update = mysqli_query($conn,"SELECT * FROM transaction WHERE id_tst='".$idUpdate1."'");
		}
		elseif($tableUpdate1 == 'admin'){
			$name4 = 'block';
			$result_update = mysqli_query($conn,"SELECT * FROM admin WHERE user_id='".$idUpdate1."'");
		}

		$row = mysqli_fetch_array($result_update);

		if($tableUpdate1 == 'catalog'){
			if(isset($_POST["update"])){
				$catalog_id = $_POST["catalog_id"];
				$name_catalog = $_POST["name_catalog"];
				$result = mysqli_query($conn,"UPDATE catalog SET catalog_id='".$catalog_id."',name_catalog='".$name_catalog."' WHERE catalog_id='".$catalog_id."'");
				if($result){
					header("location: ../admin.php?runPage=catalog");
				}
				else{
					echo "Không thể chạy đượclệnh sql.";
				}
			}
		}

		if($tableUpdate1 == 'post'){
			if(isset($_POST["update1"])){
				$id_post = $_POST["id_post"];
				$name_post = $_POST["name_post"];
				$infor_post = $_POST["infor_post"];
				$image_post = $_POST["image_post"];
				$result = mysqli_query($conn,"UPDATE post SET id_post='".$id_post."',name_post='".$name_post."',infor_post='".$infor_post."',image_post='".$image_post."' WHERE id_post='".$id_post."'");
				if($result){
					header("location: ../admin.php?runPage=post");
				}
				else{
					echo "Không thể chạy được lệnh sql.";
				}
			}
		}

		if($tableUpdate1 == 'product'){
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
				$result = mysqli_query($conn,"UPDATE product SET id_product='".$id_product."',name_product='".$name_product."',price='".$price."',amounts='".$amounts."',desciption='".$desciption."',color='".$color."',size='".$size."',status='".$status."',sale='".$sale."',image='".$image."',image_list='".$image_list."',catalog_id='".$catalog_id."',notes='".$notes."' WHERE id_product='".$id_product."'");
				if($result){
					header("location: ../admin.php?runPage=product");
				}
				else{
					echo "Không thể chạy được lệnh sql.";
				}
			}
		}

		if($tableUpdate1 == 'transaction'){
			if(isset($_POST["update3"])){
				$id_tst = $_POST["id_tst"];
				$user_id = $_POST["user_id"];
				$username = $_POST["username"];
				$phonenumber = $_POST["phonenumber"];
				$email = $_POST["email"];
				$address = $_POST["address"];
				$total_price = $_POST["total_price"];
				$id_cthd = $_POST["id_cthd"];
				$result = mysqli_query($conn,"UPDATE transaction SET id_tst='".$id_tst."',user_id='".$user_id."',username='".$username."',phonenumber='".$phonenumber."',email='".$email."',address='".$address."',total_price='".$total_price."',id_cthd='".$id_cthd."' WHERE id_tst='".$id_tst."'");
				if($result){
					header("location: ../admin.php?runPage=transaction");
				}
				else{
					echo "Không thể chạy được lệnh sql.";
				}
			}
		}

		if($tableUpdate1 == 'admin'){
			if(isset($_POST["update4"])){
				$user_id = $_POST["user_id"];
				$username = $_POST["username"];
				$password = $_POST["password"];
				$fullname = $_POST["fullname"];
				$phonenumber = $_POST["phonenumber"];
				$email = $_POST["email"];
				$address = $_POST["address"];
				$permission = $_POST["permission"];
				$result = mysqli_query($conn,"UPDATE admin SET user_id='".$user_id."',username='".$username."',password='".$password."',fullname='".$fullname."',phonenumber='".$phonenumber."',email='".$email."',address='".$address."',permission='".$permission."' WHERE user_id='".$user_id."'");
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
			<h3>AVENUE FASHION <?php echo strtoupper($tableUpdate1);?> UPDATE</h3>
			<div class="form_update_catalog">
				<div class="form_update_catalog_label">
					<label for="catalog_id">Catalog ID: </label><br>
					<label for="name_catalog">Name Catalog:</label>
				</div>
				<div class="form_update_catalog_input">
					<input type="text" name="catalog_id" id="catalog_id" readonly value="<?php echo $row['catalog_id'];?>"><br>
					<input type="text" name="name_catalog" id="name_catalog" value="<?php echo $row['name_catalog'];?>" placeholder="Name catalog..." >
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
			<h3>AVENUE FASHION <?php echo strtoupper($tableUpdate1);?> UPDATE</h3>
			<div class="form_update_catalog">
				<div class="form_update_catalog_label">
					<label for="id_post">Post ID: </label><br>
					<label for="name_post">Name Post:</label><br>
					<label for="infor_post">Information Post: </label><br>
					<label for="image_post">Image Post: </label>
				</div>
				<div class="form_update_catalog_input">
					<input type="text" name="id_post" id="id_post" readonly value="<?php echo $row['id_post'];?>">
					<input type="text" name="name_post" id="name_post" value="<?php echo $row['name_post'];?>" placeholder="Name post..." >
					<input type="text" name="infor_post" id="infor_post" value="<?php echo $row['infor_post'];?>" placeholder="Information post..." >
					<input type="text" name="image_post" id="image_post" value="<?php echo $row['image_post'];?>" placeholder="File image..." >
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
			<h3>AVENUE FASHION <?php echo strtoupper($tableUpdate1);?> UPDATE</h3>
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
					<input type="text" name="id_product" id="id_product" readonly value="<?php echo $row['id_product'];?>">
					<input type="text" name="name_product" id="name_product" value="<?php echo $row['name_product'];?>" placeholder="Name product..." >
					<input type="text" name="price" id="price" value="<?php echo $row['price'];?>" placeholder="Price product..." >
					<input type="text" name="amounts" id="amounts" value="<?php echo $row['amounts'];?>" placeholder="Amounts..." >
					<input type="text" name="desciption" id="desciption" value="<?php echo $row['desciption'];?>" placeholder="Description product..." >
					<input type="text" name="color" id="color" value="<?php echo $row['color'];?>" placeholder="Color product..." >
					<input type="text" name="size" id="size" value="<?php echo $row['size'];?>" placeholder="Size product..." >
					<input type="text" name="status" id="status" value="<?php echo $row['status'];?>" placeholder="Status product..." >
					<input type="text" name="sale" id="sale" value="<?php echo $row['sale'];?>" placeholder="Sale product..." >
					<input type="text" name="image" id="image" value="<?php echo $row['image'];?>" placeholder="Image product..." >
					<input type="text" name="image_list" id="image_list" value="<?php echo $row['image_list'];?>" placeholder="Image product list..." ><br>
					<select name="catalog_id" id="catalog_id">
						<?php
							$sql_catalogID = mysqli_query($conn,"SELECT * FROM catalog");
							while($result_catalogID = mysqli_fetch_array($sql_catalogID)){
								if($row['catalog_id'] == $result_catalogID['catalog_id'])
									echo "<option value='".$result_catalogID['catalog_id']."' selected>".$result_catalogID['catalog_id']."</option>";
								else
									echo "<option value='".$result_catalogID['catalog_id']."'>".$result_catalogID['catalog_id']."</option>";
							}
						?>
					</select><br>
					<input type="text" name="notes" id="notes" value="<?php echo $row['notes'];?>" placeholder="Notes..." >
				</div>
			</div>
			<div class="form_update_catalog_button">
				<input type="submit" name="update2" value="Lưu">
				<a href="../admin.php?runPage=product"><input type="button" name="button" value="Hủy"></a>
			</div>
		</form>
	</div>
	<div class="main_show_formValidate" style="display: <?php echo $name3;?>;">
		<form method="POST" action="" name="update_transaction">
			<h3>AVENUE FASHION <?php echo strtoupper($tableUpdate1);?> UPDATE</h3>
			<div class="form_update_catalog">
				<div class="form_update_catalog_label">
					<label for="id_tst">ID Transaction: </label><br>
					<label for="user_id">User ID:</label><br>
					<label for="username">User Name: </label><br>
					<label for="phonenumber">Phone Number: </label><br>
					<label for="email">Email:</label><br>
					<label for="address">Address: </label><br>
					<label for="total_price">Total Price: </label><br>
					<label for="id_cthd">ID CTHD: </label>
				</div>
				<div class="form_update_catalog_input">
					<input type="text" name="id_tst" id="id_tst" readonly value="<?php echo $row['id_tst'];?>"><br>
					<select name="user_id" id="user_id">
						<?php
							$sql_catalogID = mysqli_query($conn,"SELECT * FROM admin");
							while($result_catalogID = mysqli_fetch_array($sql_catalogID)){
								if($row['user_id'] == $result_catalogID['user_id']){
									echo "<option value='".$result_catalogID['user_id']."' selected>".$result_catalogID['user_id']."</option>";
								}
								else
									echo "<option value='".$result_catalogID['user_id']."'>".$result_catalogID['user_id']."</option>";
							}
						?>
					</select><br>
					<input type="text" name="username" id="username" value="<?php echo $row['username'];?>" placeholder="Information post..." >
					<input type="text" name="phonenumber" id="phonenumber" value="<?php echo $row['phonenumber'];?>">
					<input type="text" name="email" id="email" value="<?php echo $row['email'];?>" placeholder="Name post..." >
					<input type="text" name="address" id="address" value="<?php echo $row['address'];?>" placeholder="Information post..." >
					<input type="text" name="total_price" id="total_price" value="<?php echo $row['total_price'];?>" placeholder="Information post..." ><br>
					<select name="id_cthd" id="id_cthd">
						<?php
							$sql_catalogID1 = mysqli_query($conn,"SELECT * FROM invoice_details");
							while($result_catalogID1 = mysqli_fetch_array($sql_catalogID1)){
								if($row['id_cthd'] == $result_catalogID1['id_cthd']){
									echo "<option value='".$result_catalogID1['id_cthd']."' selected>".$result_catalogID1['id_cthd']."</option>";
								}
								else
									echo "<option value='".$result_catalogID1['id_cthd']."'>".$result_catalogID1['id_cthd']."</option>";
							}
						?>
					</select>
				</div>
			</div>
			<div class="form_update_catalog_button">
				<input type="submit" name="update3" value="Lưu">
				<a href="../admin.php?runPage=transaction"><input type="button" name="button" value="Hủy"></a>
			</div>
		</form>
	</div>
	<div class="main_show_formValidate" style="display: <?php echo $name4;?>;">
		<form method="POST" action="" name="update_account">
			<h3>AVENUE FASHION <?php echo strtoupper($tableUpdate1);?> UPDATE</h3>
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
					<input type="text" name="user_id" id="user_id" readonly value="<?php echo $row['user_id'];?>">
					<input type="text" name="username" id="username" value="<?php echo $row['username'];?>" placeholder="Name post..." >
					<input type="text" name="password" id="password" value="<?php echo $row['password'];?>" placeholder="Information post..." >
					<input type="text" name="fullname" id="fullname" value="<?php echo $row['fullname'];?>" placeholder="File image..." >
					<input type="text" name="phonenumber" id="phonenumber" value="<?php echo $row['phonenumber'];?>">
					<input type="text" name="email" id="email" value="<?php echo $row['email'];?>" placeholder="Name post..." >
					<input type="text" name="address" id="address" value="<?php echo $row['address'];?>" placeholder="Information post..." ><br>
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