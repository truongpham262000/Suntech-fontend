<?php 
    session_start();
    require_once 'php/connect.php';
    $user_session = isset($_SESSION['user_permission'])?$_SESSION['user_permission']:'user';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>

    <!-- Link font awesome -->
    <link href="css/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="css/fontawesome/css/brands.css" rel="stylesheet">
    <link href="css/fontawesome/css/solid.css" rel="stylesheet">

    <!-- Link css -->
    <link rel="stylesheet" type="text/css" href="css/HomePage.css">

    <!-- Link js -->
    <script src="js/jquery-3.6.1.min.js"></script>

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
                            <a href="ProductCart.php">
                                <i class="fa-solid fa-cart-shopping"></i> Empty <i class="fa-solid fa-chevron-down"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-solid fa-user"></i><?php echo $user_session; ?></a>
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
            <img src="image/home_slider.png" alt="load_image...">
            <a href="#">SHOP MEN'S COLLECTION</a>
        </div>
    </header>
    <!-- End header -->
    
    <!-- Start main -->
    <main> 
        <div class="container">
            <div class="Main_menu">
                <ul class="Main_menu_list">
                    <li class="active">POPULAR</li>
                    <li>NEW ARRIVALS</li>
                    <li>BEST SELLERS</li>
                    <li>SPECIAL OFFERS</li>
                    <li>COMMING SOON</li>
                </ul>
            </div>
            <div class="Main_product">
                <?php
                    // Product pagination
                    $product_popular_pagination = mysqli_query($conn,"SELECT count(id_product) as total FROM product");
                    $product_popular_num = mysqli_fetch_array($product_popular_pagination);
                    $total_recode_popular = $product_popular_num['total'];

                    $current_page_popular = isset($_GET['pagePopular']) ? $_GET['pagePopular'] : 1;
                    $limit_popular = 6;

                    $total_page_popular = ceil($total_recode_popular/$limit_popular);
                    if($current_page_popular > $total_page_popular)
                        $current_page_popular = $total_page_popular;
                    elseif ($current_page_popular < 1)
                        $current_page_popular = 1;

                    $start_popular = ($current_page_popular - 1) * $limit_popular;

                    if($total_recode_popular > 0){
                        // Show product
                        $product_popular_Sql = "SELECT * FROM product LIMIT ".$start_popular.",".$limit_popular."";
                        $product_popular_Result = mysqli_query($conn,$product_popular_Sql);
                        echo '<div class="Main_product_show">';
                        while($product_popular_item = mysqli_fetch_array($product_popular_Result)){
                            echo '<div class="Main_product_item">
                                    <div class="Main_product_item_image">
                                        <img src="product/'.$product_popular_item['image'].'" alt="load_image....">
                                        <label>'.$product_popular_item['price'].' $</label>
                                    </div>
                                    <div class="Main_product_item_title">
                                        <h3>'.$product_popular_item['name_product'].'</h3>
                                        <p>'.substr($product_popular_item['desciption'], 0,45).'</p>
                                        <div class="main_product_item_title_select">
                                            <ul class="main_product_item_title_select_list">
                                                <li><a href="php/cart_product.php?CartID='.$product_popular_item['id_product'].'" value="'.$user_session.'"><i class="fa-sharp fa-solid fa-cart-shopping"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                                <li><a href="ProductView.php?productKey='.$product_popular_item['id_product'].'"><i class="fa-solid fa-down-left-and-up-right-to-center"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>';
                        }
                        echo '</div>';

                        // Button pagination
                        echo "<div class='Main_product_button_pagination'><ul class='Main_product_button'>";
                            if($current_page_popular > 1 && $total_page_popular > 1){
                                echo "<li><a href='HomePage.php?pagePopular=".($current_page_popular - 1)."'>Prev</a></li>";
                            }
                            
                            for($i = 1;$i <= $total_page_popular;$i++){
                                if($i == $current_page_popular)
                                    echo "<li class='active'>".$i."</li>";
                                else
                                    echo "<li><a href='HomePage.php?pagePopular=".$i."'> ".$i." </a></li>";
                            }

                            if($current_page_popular < $total_page_popular && $total_page_popular > 1)
                                echo "<li><a href='HomePage.php?pagePopular=".($current_page_popular + 1)."'>Next</a><li>";
                        echo "</ul></div>";
                    } else {
                        echo "<h4>There are no products populars</h4>";
                    }
                ?>
            </div>
            <div class="Main_product">
                <?php
                    // Product pagination
                    $product_newArrivals_pagination = mysqli_query($conn,"SELECT count(id_product) as total FROM product WHERE status='new arrivals'");
                    $product_newArrivals_num = mysqli_fetch_array($product_newArrivals_pagination);
                    $total_recode_newArrivals = $product_newArrivals_num['total'];

                    $current_page_newArrivals = isset($_GET['pagenewArrivals']) ? $_GET['pagenewArrivals'] : 1;
                    $limit_newArrivals = 6;

                    $total_page_newArrivals = ceil($total_recode_newArrivals/$limit_newArrivals);
                    if($current_page_newArrivals > $total_page_newArrivals)
                        $current_page_newArrivals = $total_page_newArrivals;
                    elseif ($current_page_newArrivals < 1)
                        $current_page_newArrivals = 1;

                    $start_newArrivals = ($current_page_newArrivals - 1) * $limit_newArrivals;

                    if($total_recode_newArrivals > 0){
                        // Show product
                        $product_newArrivals_Sql = "SELECT * FROM product WHERE status='new arrivals' LIMIT ".$start_newArrivals.",".$limit_newArrivals."";
                        $product_newArrivals_Result = mysqli_query($conn,$product_newArrivals_Sql);
                        echo '<div class="Main_product_show">';
                        while($product_newArrivals_item = mysqli_fetch_array($product_newArrivals_Result)){
                            echo '<div class="Main_product_item">
                                    <div class="Main_product_item_image">
                                        <img src="product/'.$product_newArrivals_item['image'].'" alt="load_image....">
                                        <label>'.$product_newArrivals_item['price'].' $</label>
                                    </div>
                                    <div class="Main_product_item_title">
                                        <h3>'.$product_newArrivals_item['name_product'].'</h3>
                                        <p>'.substr($product_newArrivals_item['desciption'], 0,45).'</p>
                                        <div class="main_product_item_title_select">
                                            <ul class="main_product_item_title_select_list">
                                                <li><a href="php/cart_product.php?CartID='.$product_newArrivals_item['id_product'].'"><i class="fa-sharp fa-solid fa-cart-shopping"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                                <li><a href="ProductView.php?productKey='.$product_newArrivals_item['id_product'].'"><i class="fa-solid fa-down-left-and-up-right-to-center"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>';
                        }
                        echo '</div>';

                        // Button pagination
                        echo "<div class='Main_product_button_pagination'><ul class='Main_product_button'>";
                            if($current_page_newArrivals > 1 && $total_page_newArrivals > 1){
                                echo "<li><a href='HomePage.php?pagenewArrivals=".($current_page_newArrivals - 1)."'>Prev</a></li>";
                            }
                            
                            for($i = 1;$i <= $total_page_newArrivals;$i++){
                                if($i == $current_page_newArrivals)
                                    echo "<li class='active'>".$i."</li>";
                                else
                                    echo "<li><a href='HomePage.php?pagenewArrivals=".$i."'> ".$i." </a></li>";
                            }

                            if($current_page_newArrivals < $total_page_newArrivals && $total_page_newArrivals > 1)
                                echo "<li><a href='HomePage.php?pagenewArrivals=".($current_page_newArrivals + 1)."'>Next</a><li>";
                        echo "</ul></div>";
                    } else {
                        echo "<h4>There are no products new arrivals.</h4>";
                    }
                ?>
            </div>
            <div class="Main_product">
                <?php
                    // Product pagination
                    $product_bestSellers_pagination = mysqli_query($conn,"SELECT count(id_product) as total FROM product WHERE status='best sellers'");
                    $product_bestSellers_num = mysqli_fetch_array($product_bestSellers_pagination);
                    $total_recode_bestSellers = $product_bestSellers_num['total'];

                    $current_page_bestSellers = isset($_GET['pagebestSellers']) ? $_GET['pagebestSellers'] : 1;
                    $limit_bestSellers = 6;

                    $total_page_bestSellers = ceil($total_recode_bestSellers/$limit_bestSellers);
                    if($current_page_bestSellers > $total_page_bestSellers)
                        $current_page_bestSellers = $total_page_bestSellers;
                    elseif ($current_page_bestSellers < 1)
                        $current_page_bestSellers = 1;

                    $start_bestSellers = ($current_page_bestSellers - 1) * $limit_bestSellers;

                    if($total_recode_bestSellers > 0){
                        // Show product
                        $product_bestSellers_Sql = "SELECT * FROM product WHERE status='best sellers' LIMIT ".$start_bestSellers.",".$limit_bestSellers."";
                        $product_bestSellers_Result = mysqli_query($conn,$product_bestSellers_Sql);
                        echo '<div class="Main_product_show">';
                        while($product_bestSellers_item = mysqli_fetch_array($product_bestSellers_Result)){   
                            echo '<div class="Main_product_item">
                                <div class="Main_product_item_image">
                                    <img src="product/'.$product_bestSellers_item['image'].'" alt="load_image....">
                                    <label>'.$product_bestSellers_item['price'].' $</label>
                                </div>
                                <div class="Main_product_item_title">
                                    <h3>'.$product_bestSellers_item['name_product'].'</h3>
                                    <p>'.substr($product_bestSellers_item['desciption'], 0,45).'</p>
                                    <div class="main_product_item_title_select">
                                        <ul class="main_product_item_title_select_list">
                                            <li><a href="php/cart_product.php?CartID='.$product_bestSellers_item['id_product'].'"><i class="fa-sharp fa-solid fa-cart-shopping"></i></a></li>
                                            <li><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                            <li><a href="ProductView.php?productKey='.$product_bestSellers_item['id_product'].'"><i class="fa-solid fa-down-left-and-up-right-to-center"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>';
                        } 
                        echo '</div>';

                        // Button pagination
                        echo "<div class='Main_product_button_pagination'><ul class='Main_product_button'>";
                            if($current_page_bestSellers > 1 && $total_page_bestSellers > 1){
                                echo "<li><a href='HomePage.php?pagebestSellers=".($current_page_bestSellers - 1)."'>Prev</a></li>";
                            }
                            
                            for($i = 1;$i <= $total_page_bestSellers;$i++){
                                if($i == $current_page_bestSellers)
                                    echo "<li class='active'>".$i."</li>";
                                else
                                    echo "<li><a href='HomePage.php?pagebestSellers=".$i."'> ".$i." </a></li>";
                            }

                            if($current_page_bestSellers < $total_page_bestSellers && $total_page_bestSellers > 1)
                                echo "<li><a href='HomePage.php?pagebestSellers=".($current_page_bestSellers + 1)."'>Next</a><li>";
                        echo "</ul></div>";
                    } else {
                        echo "<h4>There are no products best sellers.</h4>";
                    }
                ?>
            </div>
            <div class="Main_product">
                <?php
                    // Product pagination
                    $product_specialOffers_pagination = mysqli_query($conn,"SELECT count(id_product) as total FROM product WHERE status='special offers'");
                    $product_specialOffers_num = mysqli_fetch_array($product_specialOffers_pagination);
                    $total_recode_specialOffers = $product_specialOffers_num['total'];

                    $current_page_specialOffers = isset($_GET['pagespecialOffers']) ? $_GET['pagespecialOffers'] : 1;
                    $limit_specialOffers = 6;

                    $total_page_specialOffers = ceil($total_recode_specialOffers/$limit_specialOffers);
                    if($current_page_specialOffers > $total_page_specialOffers)
                        $current_page_specialOffers = $total_page_specialOffers;
                    elseif ($current_page_specialOffers < 1)
                        $current_page_specialOffers = 1;

                    $start_specialOffers = ($current_page_specialOffers - 1) * $limit_specialOffers;

                    if($total_recode_specialOffers > 0){
                        // Show product
                        $product_specialOffers_Sql = "SELECT * FROM product WHERE status='special offers' LIMIT ".$start_specialOffers.",".$limit_specialOffers."";
                        $product_specialOffers_Result = mysqli_query($conn,$product_specialOffers_Sql);
                        echo '<div class="Main_product_show">';
                        while($product_specialOffers_item = mysqli_fetch_array($product_specialOffers_Result)){   
                            echo '<div class="Main_product_item">
                                <div class="Main_product_item_image">
                                    <img src="product/'.$product_specialOffers_item['image'].'" alt="load_image....">
                                    <label>'.$product_specialOffers_item['price'].' $</label>
                                </div>
                                <div class="Main_product_item_title">
                                    <h3>'.$product_specialOffers_item['name_product'].'</h3>
                                    <p>'.substr($product_specialOffers_item['desciption'], 0,45).'</p>
                                    <div class="main_product_item_title_select">
                                        <ul class="main_product_item_title_select_list">
                                            <li><a href="php/cart_product.php?CartID='.$product_specialOffers_item['id_product'].'"><i class="fa-sharp fa-solid fa-cart-shopping"></i></a></li>
                                            <li><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                            <li><a href="ProductView.php?productKey='.$product_specialOffers_item['id_product'].'"><i class="fa-solid fa-down-left-and-up-right-to-center"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>';
                        } 
                        echo '</div>';

                        // Button pagination
                        echo "<div class='Main_product_button_pagination'><ul class='Main_product_button'>";
                            if($current_page_specialOffers > 1 && $total_page_specialOffers > 1){
                                echo "<li><a href='HomePage.php?pagespecialOffers=".($current_page_specialOffers - 1)."'>Prev</a></li>";
                            }
                            
                            for($i = 1;$i <= $total_page_specialOffers;$i++){
                                if($i == $current_page_specialOffers)
                                    echo "<li class='active'>".$i."</li>";
                                else
                                    echo "<li><a href='HomePage.php?pagespecialOffers=".$i."'> ".$i." </a></li>";
                            }

                            if($current_page_specialOffers < $total_page_specialOffers && $total_page_specialOffers > 1)
                                echo "<li><a href='HomePage.php?pagespecialOffers=".($current_page_specialOffers + 1)."'>Next</a><li>";
                        echo "</ul></div>";
                    } else {
                        echo "<h4>There are no products special offers.</h4>";
                    }
                ?>
            </div>
            <div class="Main_product">
                <?php
                    // Product pagination
                    $product_commingSoon_pagination = mysqli_query($conn,"SELECT count(id_product) as total FROM product WHERE status='comming soon'");
                    $product_commingSoon_num = mysqli_fetch_array($product_commingSoon_pagination);
                    $total_recode_commingSoon = $product_commingSoon_num['total'];

                    $current_page_commingSoon = isset($_GET['pagecommingSoon']) ? $_GET['pagecommingSoon'] : 1;
                    $limit_commingSoon = 6;

                    $total_page_commingSoon = ceil($total_recode_commingSoon/$limit_commingSoon);
                    if($current_page_commingSoon > $total_page_commingSoon)
                        $current_page_commingSoon = $total_page_commingSoon;
                    elseif ($current_page_commingSoon < 1)
                        $current_page_commingSoon = 1;

                    $start_commingSoon = ($current_page_commingSoon - 1) * $limit_commingSoon;

                    if($total_recode_commingSoon > 0){
                        // Show product
                        $product_commingSoon_Sql = "SELECT * FROM product WHERE status='comming soon' LIMIT ".$start_commingSoon.",".$limit_commingSoon."";
                        $product_commingSoon_Result = mysqli_query($conn,$product_commingSoon_Sql);
                        echo '<div class="Main_product_show">';
                        while($product_commingSoon_item = mysqli_fetch_array($product_commingSoon_Result)){   
                            echo '<div class="Main_product_item">
                                <div class="Main_product_item_image">
                                    <img src="product/'.$product_commingSoon_item['image'].'" alt="load_image....">
                                    <label>'.$product_commingSoon_item['price'].' $</label>
                                </div>
                                <div class="Main_product_item_title">
                                    <h3>'.$product_commingSoon_item['name_product'].'</h3>
                                    <p>'.substr($product_commingSoon_item['desciption'], 0,45).'</p>
                                    <div class="main_product_item_title_select">
                                        <ul class="main_product_item_title_select_list">
                                            <li><a href="php/cart_product.php?CartID='.$product_commingSoon_item['id_product'].'"><i class="fa-sharp fa-solid fa-cart-shopping"></i></a></li>
                                            <li><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                            <li><a href="ProductView.php?productKey='.$product_commingSoon_item['id_product'].'"><i class="fa-solid fa-down-left-and-up-right-to-center"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>';
                        } 
                        echo '</div>';

                        // Button pagination
                        echo "<div class='Main_product_button_pagination'><ul class='Main_product_button'>";
                            if($current_page_commingSoon > 1 && $total_page_commingSoon > 1){
                                echo "<li><a href='HomePage.php?pagecommingSoon=".($current_page_commingSoon - 1)."'>Prev</a></li>";
                            }
                            
                            for($i = 1;$i <= $total_page_commingSoon;$i++){
                                if($i == $current_page_commingSoon)
                                    echo "<li class='active'>".$i."</li>";
                                else
                                    echo "<li><a href='HomePage.php?pagecommingSoon=".$i."'> ".$i." </a></li>";
                            }

                            if($current_page_commingSoon < $total_page_commingSoon && $total_page_commingSoon > 1)
                                echo "<li><a href='HomePage.php?pagecommingSoon=".($current_page_commingSoon + 1)."'>Next</a><li>";
                        echo "</ul></div>";
                    } else {
                        echo "<h4>There are no products comming soon.</h4>";
                    }
                ?>
            </div>
        </div>
        <div class="Main_lookbook">
            <div class="Main_lookbook_men">
                <div class="Main_lookbook_men_image">
                    <img src="image/home_lookbook_men.png">
                </div>
                <div class="Main_lookbook_men_title">
                    <p><strong>MEN'S</strong><br> LOOKBOOK</p>
                    <p>Lorem ipsum dolor sit amet eras facilisis<br>consectetur adipiscing elit lor, integer lorem<br>consecteur dignissim laciniqui.<br>Elementum metus facilisis ut phasellu.</p>
                    <a href="#">VIEW NOW</a>
                </div>
            </div>
            <div class="Main_lookbook_men">
                <div class="Main_lookbook_men_image">
                    <img src="image/home_lookbook_women.png">
                </div>
                <div class="Main_lookbook_men_title">
                    <p><strong>WOMEN'S</strong><br> LOOKBOOK</p>
                    <p>Pellentesque habitant morbi tristique senec<br>tus et netus et malesuada fames.<br>Pellentesque laoreet quis enim et mattis.<br>Quisque interdum felis tellus.</p>
                    <a href="#">VIEW NOW</a>
                </div>
            </div>
            <div class="Main_lookbook_men">
                <div class="Main_lookbook_men_image">
                    <img src="image/home_lookbook_you.png">
                </div>
                <div class="Main_lookbook_men_title">
                    <p><strong>YOUR</strong><br> LOOKBOOK</p>
                    <p>See an item you like and click the <i class="fa-solid fa-heart"></i> button<br>to add it to your lookbook where you can<br>create your own perfect look.<br>It’s like your own boutique!</p>
                    <a href="#">VIEW NOW</a>
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
    
    <script src="js/HomePage.js"></script>
    
</body>
</html>