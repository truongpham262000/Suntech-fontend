<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheBrand</title>

    <!-- Link font awesome -->
    <link href="css/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="css/fontawesome/css/brands.css" rel="stylesheet">
    <link href="css/fontawesome/css/solid.css" rel="stylesheet">

    <!-- Link css -->
    <link rel="stylesheet" type="text/css" href="css/HomePage.css">
    <link rel="stylesheet" type="text/css" href="css/TheBrand.css">

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
                    <p><strong>THE</strong> BRAND</p>
                    <p>COMPANY SLOGAN GOES HERE</p>
                </div>
            </div>
        </div>
    </header>
    <!-- End header -->
    
    <!-- Start main -->
    <main> 
        <div class="container">
            <div class="Main_intro_ourValues">
                <img src="image/thebrand_content_image1.png">
                <img src="image/thebrand_content_image2.png">
                <div class="Main_intro_ourValues_desc">
                    <h3>OUR VALUES, VISION AND STRATEGY</h3>
                    <h5>THE ABOVE IMAGE WOULD BE A GREAT PLACE FOR AN ADVERTISINH VIDEO</h5>
                    <p>Cras maximus venenatis malesuada. Nulla sagittis elit felis, ac facilisis quam ornare aliquam. Etiam cursus odio vitae dui dignissim, sed tempus lacus tincidunt et donec sapien velit, rhoncus eu nulla a, molestie tempus mi maecenas sagittis ornare.
                    Pellentesque sapien mi, tincidunt nec magna vitae, volutpat elementum odioni lorem Aliquam tempor massa vitae augue mattis tempor id in ante ut augue erat, luctus eil.
                    </p>
                </div>
            </div>
            <div class="Main_ethicalTrading_awards">
                <div class="Main_intro_ourValues_desc">
                    <h3>HAND DESIGNED CLOTHING</h3>
                    <h5>ESTABLISHED IN 2013, AVENUE FASHION SED DICTUM ELIT VEL SAPIEN LUCTUS ERAS</h5>
                    <p>Praesent feugiat malesuada tristique maecenas rhoncus diam eget quam vestibulim consectetur, id condimentum leo porttitor. Cum sociis natoque penatibus eta magnis disut parturient montes, nascetur ridiculus mus. Donec sem lorem laoreet tempor un risus vitae, rutrum sodales nibh suspendisse congue metus nunc, id viverra elit loreti rhoncus quis consecteur es. Donec pulvinar tempor lorem a pretium justo interdum.</p>
                </div>
                <img src="image/thebrand_content_image3.png">
                <div class="Main_intro_ourValues_desc">
                    <h3>ETHICAL TRADING</h3>
                    <h5>WE OVERSEE THE WORKING CONDITIONS OF THE PEOPLE IN THE SUPPLY CHAIN</h5>
                    <p>Nullam dapibus consectetur neque, faucibus porttitor purus iaculis sed. Aenean eras dapibus augue, eget dignissim dui maecenas et rhoncus mim, vel semper arcu lorem Pellentesque congue justo esteir pellentesque aliquet massa eget posuere tincidunt. Cras viverra ullamcorper nunc accumsan hendrerit. A link 
                    </p>
                </div>
                <img src="image/thebrand_content_imageLogo.png">
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
</body>
</html>