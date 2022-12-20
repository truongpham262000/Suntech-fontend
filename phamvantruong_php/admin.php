<?php
	session_start();
	require_once "php/connect.php";
	$user = isset($_SESSION['user_permission']) ? $_SESSION['user_permission'] : header("location: SignUp.php");

	$runPage = isset($_GET['runPage']) ? $_GET['runPage'] : 'catalog';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>

	<!-- Link font awesome -->
    <link href="css/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="css/fontawesome/css/brands.css" rel="stylesheet">
    <link href="css/fontawesome/css/solid.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/Admin.css">
	
	<!-- Link js -->
    <script src="js/jquery-3.6.1.min.js"></script>

</head>
<body>
	<div class="container">
		<nav>
			<div class="nav_user_icon">
				<div class="nav_user_iconImage">
					<img src="image/icon-admin.png" alt="load_image...">
					<label><?php echo strtoupper($user);?></label>
				</div>
			</div>
			<div class="nav_list_manager">
				<ul class="nav_list_Action">
					<li><a href="admin.php?runPage=home"><i class="fa-solid fa-house-user"></i>HOME</a></li>
					<li>
						<a href="admin.php?runPage=catalog"><i class="fa-solid fa-folder"></i>CATALOG</a>
						<ul class="nav_list_parentAdd">
							<li><a href="php/add.php?add=catalog">Add New Catalog</a></li>
						</ul>
					</li>
					<li>
						<a href="admin.php?runPage=post"><i class="fa-solid fa-blog"></i>POST</a>
						<ul class="nav_list_parentAdd">
							<li><a href="php/add.php?add=post">Add New Post</a></li>
						</ul>
					</li>
					<li>
						<a href="admin.php?runPage=product"><i class="fa-solid fa-bag-shopping"></i>PRODUCT</a>
						<ul class="nav_list_parentAdd">
							<li><a href="php/add.php?add=product">Add New Product</a></li>
						</ul>
					</li>
					<li><a href="admin.php?runPage=transaction"><i class="fa-solid fa-cart-shopping"></i>TRANSACTION</a></li>
					<li>
						<a href="admin.php?runPage=admin"><i class="fa-solid fa-user-plus"></i>ACCOUNT</a>
						<ul class="nav_list_parentAdd">
							<li><a href="php/add.php?add=admin">Add New Account</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="nav_logOut">
				<a href="admin.php?runPage=home"><i class="fa-solid fa-right-from-bracket"></i>LOGOUT</a>
			</div>
		</nav>
		<main>
			<div class="main_header">
				<h4>AVENUE FASHION <?php echo strtoupper($runPage);?></h4>
				<div class="main_search_input">
					<form method="GET" action="admin.php">
						<input type="text" name="search" id="search" placeholder="Search...">
						<input type="submit" name="submit" id="submitSearch" value="Tìm Kiếm">
					</form>
				</div>
			</div>
			<div class="main_show_infor">
				<?php			
					$admin_sql_count = "";

					if($runPage == 'catalog') {
						$admin_sql_count = mysqli_query($conn,"SELECT count(catalog_id) as total  FROM ".$runPage."");
					} elseif($runPage == 'post') {
						$admin_sql_count = mysqli_query($conn,"SELECT count(id_post) as total  FROM ".$runPage."");
					} elseif($runPage == 'product') {
						$admin_sql_count = mysqli_query($conn,"SELECT count(id_product) as total  FROM ".$runPage."");
					} elseif($runPage == 'transaction') {
						$admin_sql_count = mysqli_query($conn,"SELECT count(id_tst) as total  FROM ".$runPage."");
					} elseif($runPage == 'admin') {
						$admin_sql_count = mysqli_query($conn,"SELECT count(user_id) as total  FROM ".$runPage."");
					} elseif($runPage == 'home') {
						unset($_SESSION['user_permission']);
						header("location: HomePage.php");
					}

					$admin_sql_result = mysqli_fetch_array($admin_sql_count);
					$total_recode = $admin_sql_result['total'];
					
					$current_page = isset($_GET['pageAdmin']) ? $_GET['pageAdmin'] : 1;
					$limitAdmin = 3;
					if($runPage == 'product')
						$limitAdmin = 3;

					$total_page = ceil($total_recode / $limitAdmin);

					if($current_page > $total_page)
						$current_page = $total_page;
					elseif($current_page < 1)
						$current_page = 1;

					$startAdmin = ($current_page - 1) *  $limitAdmin;

					if($total_recode > 0) {
						$admin_sql =mysqli_query($conn,"SELECT *  FROM ".$runPage." LIMIT ".$startAdmin.",".$limitAdmin."");

						$stt = 0;
						echo "<table border='1' cellpadding='0' cellspacing='0'>";

						if($runPage == 'catalog') {
							echo "<tr><th>STT</th><th>Catalog ID</th><th>Name Catalog</th><th colspan='2'>Acction</th></tr>";
							while ($rowAdmin = mysqli_fetch_array($admin_sql)) {
								$stt++;
								$tt = $stt + $startAdmin;
								echo "<tr>
									<td>".$tt."</td>
									<td>".$rowAdmin['catalog_id']."</td>
									<td>".$rowAdmin['name_catalog']."</td>
									<td><a href='php/update.php?idUpdate=".$rowAdmin['catalog_id']."&tableUpdate=".$runPage."'>Update</a></td>
									<td><a href='php/delete.php?idDelete=".$rowAdmin['catalog_id']."&tableDelete=".$runPage."' onclick='return Check_Delete();'>Delete</a></td>
								</tr>";
							}
						}

						if($runPage == 'post') {
							echo "<tr><th>STT</th><th>Image Post</th><th>Name Post</th><th>Information Post</th><th colspan='2'>Acction</th></tr>";
							while ($rowAdmin = mysqli_fetch_array($admin_sql)) {
								$stt++;
								$tt = $stt + $startAdmin;
								echo "<tr>
									<td>".$tt."</td>
									<td><img src='image/".$rowAdmin['image_post']."' alt='loading...' /></td>
									<td>".$rowAdmin['name_post']."</td>
									<td>".$rowAdmin['infor_post']."</td>
									<td><a href='php/update.php?idUpdate=".$rowAdmin['id_post']."&tableUpdate=".$runPage."'>Update</a></td>
									<td><a href='php/delete.php?idDelete=".$rowAdmin['id_post']."&tableDelete=".$runPage."' onclick='return Check_Delete();'>Delete</a></td>
								</tr>";
							}
						}

						if($runPage == 'product') {
							echo "<tr><th>Image</th><th>Name Products</th><th>Price</th><th>Amounts</th><th>Description</th><th colspan='2'>Acction</th></tr>";
							while ($rowAdmin = mysqli_fetch_array($admin_sql)) {
								echo "<tr>
									<td><img src='product/".$rowAdmin['image']."' alt='loading...' /></td>
									<td>".$rowAdmin['name_product']."</td>
									<td>".$rowAdmin['price']." $</td>
									<td>".$rowAdmin['amounts']."</td>
									<td>".substr($rowAdmin['desciption'],0,200)."</td>
									<td><a href='php/update.php?idUpdate=".$rowAdmin['id_product']."&tableUpdate=".$runPage."'>Update</a></td>
									<td><a href='php/delete.php?idDelete=".$rowAdmin['id_product']."&tableDelete=".$runPage."' onclick='return Check_Delete();'>Delete</a></td>
								</tr>";
							}
						}

						if($runPage == 'transaction') {
							echo "<tr><th>STT</th><th>User Name</th><th>Phone Number</th><th>Email</th><th>Address</th><th>Total Price</th><th colspan='2'>Acction</th></tr>";
							while ($rowAdmin = mysqli_fetch_array($admin_sql)) {
								$stt++;
								$tt = $stt + $startAdmin;
								echo "<tr>
									<td>".$tt."</td>
									<td>".$rowAdmin['username']."</td>
									<td>".$rowAdmin['phonenumber']."</td>
									<td>".$rowAdmin['email']."</td>
									<td>".$rowAdmin['address']."</td>
									<td>".$rowAdmin['total_price']."</td>
									<td><a href='php/update.php?idUpdate=".$rowAdmin['id_tst']."&tableUpdate=".$runPage."'>Update</a></td>
									<td><a href='php/delete.php?idDelete=".$rowAdmin['id_tst']."&tableDelete=".$runPage."' onclick='return Check_Delete();'>Delete</a></td>
								</tr>";
							}
						}

						if($runPage == 'admin') {
							echo "<tr><th>STT</th><th>User Name</th><th>Pass Word</th><th>Full Name</th><th>Phone Number</th><th>Email</th><th>Address</th><th>Permission</th><th colspan='2'>Acction</th></tr>";
							while ($rowAdmin = mysqli_fetch_array($admin_sql)) {
								$stt++;
								$tt = $stt + $startAdmin;
								echo "<tr>
									<td>".$tt."</td>
									<td>".$rowAdmin['username']."</td>
									<td>".$rowAdmin['password']."</td>
									<td>".$rowAdmin['fullname']."</td>
									<td>".$rowAdmin['phonenumber']."</td>
									<td>".$rowAdmin['email']."</td>
									<td>".$rowAdmin['address']."</td>
									<td>".$rowAdmin['permission']."</td>
									<td><a href='php/update.php?idUpdate=".$rowAdmin['user_id']."&tableUpdate=".$runPage."'>Update</a></td>
									<td><a href='php/delete.php?idDelete=".$rowAdmin['user_id']."&tableDelete=".$runPage."' onclick='return Check_Delete();'>Delete</a></td>
								</tr>";
							}
						}
						echo "</table>";

						// Page panigation
						echo "<div class='Main_product_button_pagination'><ul class='Main_product_button'>";
	                        if($current_page > 1 && $total_page > 1){
	                            echo "<li><a href='admin.php?pageAdmin=".($current_page - 1)."&runPage=".$runPage."'>Prev</a></li>";
	                        }
	                        
	                        for($i = 1;$i <= $total_page;$i++){
	                            if($i == $current_page)
	                                echo "<li class='active'>".$i."</li>";
	                            else
	                                echo "<li><a href='admin.php?pageAdmin=".$i."&runPage=".$runPage."'> ".$i." </a></li>";
	                        }

	                        if($current_page < $total_page && $total_page > 1)
	                            echo "<li><a href='admin.php?pageAdmin=".($current_page + 1)."&runPage=".$runPage."'>Next</a><li>";
	                    echo "</ul></div>";
	                } else {
	                	echo "<h4>There are no records in the Database...</h4>";
	                }
				?>
			</div>
		</main>
	</div>
	<script src="js/HomePage.js"></script>
	<script type="text/javascript">
		function Check_Delete() {
			return confirm("Bạn có muốn xóa thông tin này không?");
		}
	</script>
</body>
</html>