<?php
    session_start();
    require_once "php/connect.php";
    if(isset($_GET['productKey'])){
        $productKey = $_GET['productKey'];
    } else {
        $productKey = "";
        die();
    }
    $productView_sql = "SELECT * FROM product WHERE id_product='".$productKey."'";
    $productView_query = mysqli_query($conn,$productView_sql);
    $productView_result = mysqli_fetch_array($productView_query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProductView</title>

    <!-- Link font awesome -->
    <link href="css/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="css/fontawesome/css/brands.css" rel="stylesheet">
    <link href="css/fontawesome/css/solid.css" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />

    <!-- Link css -->
    <link rel="stylesheet" type="text/css" href="css/HomePage.css">
    <link rel="stylesheet" type="text/css" href="css/TheBrand.css">
    <link rel="stylesheet" type="text/css" href="css/ProductView.css">

</head>
<body>
    <!-- Start header -->
    <header> 
        <div class="Header_topbar">
            <div class="container">
                <div class="Header_topbar_currency">
                    <ul class="Header_topbar_currency_list">
                        <li>Currency: </li>
                        <li>
                            <select>
                                <option value="">GBP</option>
                                <option value="">Dollar</option>
                                <option value="">VND</option>
                            </select>
                        </li>
                    </ul>
                </div>
                <div class="Header_topbar_rigister">
                    <ul class="Header_topbar_rigister_list">
                        <li><a href="SignUp.php?logout=true">Rigister</a></li>
                        <li><a href="SignUp.php?logout=true">Sing in</a></li>
                        <li>
                            <a href="ProductCart.php"><i class="fa-solid fa-cart-shopping"></i> Empty <i class="fa-solid fa-chevron-down"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-solid fa-user"></i><?php echo isset($_SESSION['user_permission'])?$_SESSION['user_permission']:'user'; ?></a>
                            <div class="log_out">
                                <a href="SignUp.php?logout=true">Log Out<i class="fa-solid fa-right-from-bracket"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="Header_bottom_topbar">
            <div class="Header_bottom_topbar_logo">
                <a href="#"><p><strong>AVENUE</strong> FASHION</p></a>
            </div>
            <div class="container">
                <div class="Header_bottom_topbar_navbar">
                    <ul class="Header_bottom_topbar_navbar_list">
                        <li>
                            <a href="HomePage.php">MANS <i class="fa-solid fa-chevron-down"></i></a>
                            <div class="Header_bottom_topbar_navbar_child">
                                <div class="Header_bottom_topbar_navbar_child_list">
                                    <ul class="Header_bottom_topbar_navbar_child_listOne">
                                        <li><a href="#"><strong>CASUALS</strong></a></li>
                                        <li><a href="#">Jackets</a></li>
                                        <li><a href="#">Hoodies & Sweatshirts</a></li>
                                        <li><a href="#">Polo Shirts</a></li>
                                        <li><a href="#">Sportswear</a></li>
                                        <li><a href="#">Trousers & Chinos</a></li>
                                        <li><a href="#">T-Shirts</a></li>
                                    </ul>
                                    <ul class="Header_bottom_topbar_navbar_child_listTwo">
                                        <li><a href="#"><strong>FORMAL</strong></a></li>
                                        <li><a href="#">Jackets</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Trousers</a></li>
                                    </ul>
                                </div>
                                <div class="Header_bottom_topbar_navbar_sale">
                                    <p><strong>AUTUMN SALE!</strong><br>UP TO 50% OFF</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="HomePage.php">WOMENS<i class="fa-solid fa-chevron-down"></i></a>
                            <div class="Header_bottom_topbar_navbar_child">
                                <div class="Header_bottom_topbar_navbar_child_list">
                                    <ul class="Header_bottom_topbar_navbar_child_listOne">
                                        <li><a href="#"><strong>CASUALS</strong></a></li>
                                        <li><a href="#">Jackets</a></li>
                                        <li><a href="#">Hoodies & Sweatshirts</a></li>
                                        <li><a href="#">Polo Shirts</a></li>
                                        <li><a href="#">Sportswear</a></li>
                                        <li><a href="#">Trousers & Chinos</a></li>
                                        <li><a href="#">T-Shirts</a></li>
                                    </ul>
                                    <ul class="Header_bottom_topbar_navbar_child_listTwo">
                                        <li><a href="#"><strong>FORMAL</strong></a></li>
                                        <li><a href="#">Jackets</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Trousers</a></li>
                                    </ul>
                                </div>
                                <div class="Header_bottom_topbar_navbar_sale">
                                    <p><strong>AUTUMN SALE!</strong><br>UP TO 50% OFF</p>
                                </div>
                            </div>
                        </li>
                        <li><a href="TheBrand.php">THE BRAND</a></li>
                        <li>
                            <a href="LocalStores.php">LOCAL STORES</a>
                        </li>
                        <li>
                            <a href="LookBook.php">LOOK BOOK<i class="fa-solid fa-chevron-down"></i></a>
                            <div class="Header_bottom_topbar_navbar_child">
                                <div class="Header_bottom_topbar_navbar_child_list">
                                    <ul class="Header_bottom_topbar_navbar_child_listOne">
                                        <li><a href="#"><strong>OUR LOOKBOOK</strong></a></li>
                                        <li><a href="#">Latest Posts (mixed)</a></li>
                                        <li><a href="#">Men's Lookbook</a></li>
                                        <li><a href="#">Women's Lookbook</a></li>
                                    </ul>
                                    <ul class="Header_bottom_topbar_navbar_child_listTwo">
                                        <li><a href="#"><strong>YOUR LOOKBOOK</strong></a></li>
                                        <li><a href="#">View and Edit</a></li>
                                        <li><a href="#">Share</a></li>
                                        <li><a href="#">Delete</a></li>
                                    </ul>
                                </div>
                                <div class="Header_bottom_topbar_navbar_sale">
                                    <p><strong>AUTUMN SALE!</strong><br>UP TO 50% OFF</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="Header_bottom_top_bar_search">
                <input type="text" name="search" id="search" placeholder="Search...">
                <label for="search"><i class="fa-solid fa-magnifying-glass"></i></label>
            </div> 
        </div>
        <div class="Header_slider">
            <img src="image/thebrand_header_slider.png" alt="load_image...">
            <div class="Header_slider_title">
                <div class="Header_slider_title_text">
                    <p><strong>PRODUCT</strong> VIEW</p>
                    <p>MEN - CASUALS - HOODIES & SWEATSHIRTS - AVE CLASSIC SWEATSHIRTS</p>
                </div>
            </div>
        </div>
    </header>
    <!-- End header -->
    
    <!-- Start main -->
    <main> 
        <div class="container">
            <div class="Main_content_slider_details">
                <div class="Main_content_slider_image">
                    <!-- Swiper -->
                    <div class="swiper mySwiper">
                      <div class="swiper-wrapper">
                        <?php
                            $slider_image = explode(",",$productView_result['image_list']);
                            foreach ($slider_image as $key => $value) {
                                echo "<div class='swiper-slide'>
                                        <img src='product/".$value."'>
                                    </div>";
                            }
                        ?>
                      </div>
                      <div class="swiper-button-next"></div>
                      <div class="swiper-button-prev"></div>
                    </div>
                </div>
                <div class="Main_content_details">
                    <div class="Main_content_details_intro">
                        <h3><?php echo strtoupper($productView_result['name_product']); ?></h3>
                        <p>Price: <?php echo $productView_result['price'];?>$</p>
                        <p class="amount_product" value="<?php echo $productView_result['amounts'];?>">Amounts: <?php echo $productView_result['amounts'];?></p>
                    </div>
                    <form action="php/cart_product.php" method="GET">
                        <div class="Main_content_details_option">
                            <ul>
                                <li>
                                    <p>COLOR</p>
                                    <select name="product_color">
                                        <?php
                                            $productColor = explode(",",$productView_result['color']);
                                            foreach ($productColor as $key => $value) {
                                                echo "<option value='".$value."'>".$value."</option>";
                                            }
                                        ?>
                                    </select>
                                </li>
                                <li>
                                    <p>SIZE</p>
                                    <select name="product_size">
                                        <?php
                                            $productSize = explode(",",$productView_result['size']);
                                            foreach ($productSize as $key => $value) {
                                                echo "<option value='".$value."'>".$value."</option>";
                                            }
                                        ?>
                                    </select>
                                </li>
                                <li>
                                    <p>QTY</p>
                                    <div class="Main_content_details_option_num">
                                        <label for="amounts"><i class="fa-solid fa-minus"></i></label>
                                        <input type="text" name="quality" id="amounts" value="1" readonly>
                                        <label for="amounts"><i class="fa-solid fa-plus"></i></label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="Main_content_details_buttons">
                            <input type="hidden" name="CartID" value="<?php echo $productKey; ?>">
                            <button type="submit"><i class="fa-solid fa-cart-shopping"></i> ADD TO CART</button>
                            <button><i class="fa-solid fa-heart"></i> ADD TO LOOKBOOK</button>
                            <button><i class="fa-solid fa-down-left-and-up-right-to-center"></i> ADD TO COMPARE</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="Main_content_data">
                <ul class="Main_content_data_desc">
                    <li class="active">DESCRIPTION</li>
                    <li class="">VIDEO</li>
                    <li class="">SIZE & SPECS</li>
                    <li class="">DELIVERY & RETURNS</li>
                    <li class="">REVIEWS</li>
                </ul>
                <div class="Main_content_desc_details">
                    <div class="Main_content_data_desc_details">
                        <h4><?php echo strtoupper($productView_result['name_product']); ?></h4>
                        <p><?php echo $productView_result['desciption']; ?></p>
                    </div>
                    <div class="Main_content_data_desc_details">
                        <h4>No Video has been added yet !!!</h4>
                    </div>
                    <div class="Main_content_data_desc_details">
                        <h4>No SIZE & SPECS has been added yet !!!</h4>
                    </div>
                    <div class="Main_content_data_desc_details">
                        <h4>No DELIVERY & RETURNS has been added yet !!!</h4>
                    </div>
                    <div class="Main_content_data_desc_details">
                        <h4>No REVIEWS has been added yet !!!</h4>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End main -->

    <!-- Start footer -->
    <footer> 
        <div class="container">
            <div class="Footer_list_menu">
                <ul class="Footer_list_menu_info">
                    <li><a href="#">INFORMATION</a></li>
                    <li><a href="#">The brand</a></li>
                    <li><a href="#">Local stores</a></li>
                    <li><a href="#">Customor service</a></li>
                    <li><a href="#">Privacy & cookies</a></li>
                    <li><a href="#">Site map</a></li>
                </ul>
                <ul class="Footer_list_menu_info">
                    <li><a href="#">WHY BUY FROM US</a></li>
                    <li><a href="#">Shipping & returns</a></li>
                    <li><a href="#">Secure shopping</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Award winning</a></li>
                    <li><a href="#">Ethical trading</a></li>
                </ul>
                <ul class="Footer_list_menu_info">
                    <li><a href="#">YOUR ACCOUNT</a></li>
                    <li><a href="#">Sign in</a></li>
                    <li><a href="#">Register</a></li>
                    <li><a href="#">View cart</a></li>
                    <li><a href="#">View your lookbook</a></li>
                    <li><a href="#">Track an order</a></li>
                    <li><a href="#">Update information</a></li>
                </ul>
                <ul class="Footer_list_menu_info">
                    <li><a href="#">LOOKBOOK</a></li>
                    <li><a href="#">Latest post</a></li>
                    <li><a href="#">Men's lookbook</a></li>
                    <li><a href="#">Women's lookbook</a></li>
                    <li><a href="#">Lookbooks RSS feed</a></li>
                    <li><a href="#">View your lookbook</a></li>
                    <li><a href="#">Delete your lookbook</a></li>
                </ul>
                <ul class="Footer_list_menu_info">
                    <li><a href="#">CONTACT DETAILS</a></li>
                    <li><a href="#">Head Office: Avenue Fashion,<br>180-182 Regent Street, London.</a></li>
                    <li><a href="#">Telephone: 0123-456-789<br>Email: support@yourwebsite.com</a></li>
                </ul>
            </div>
            <div class="Footer_banners">
                <div class="Footer_banners_award">
                    <p><strong>AWARD WINNER</strong><br>FASHION AWARDS 2016</p>
                </div>
                <div class="Footer_banners_social">
                    <ul class="Footer_banners_social_list">
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-camera-retro"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-p"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="Footer_copyright">
            <div class="container">
                <p><i class="fa-solid fa-copyright"></i> 2016 Avenue Fashion™</p>
                <div class="Footer_copyright_design">
                    <ul class="Footer_copyright_design_list">
                        <li>Design by Pham Van Truong</li>
                        <li>Dev by Loremipsum.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer -->
    <!-- Swiper JS -->
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/HomePage.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        // Slider product view
        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</body>
</html>