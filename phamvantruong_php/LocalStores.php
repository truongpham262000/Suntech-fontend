<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LocalStores</title>

    <!-- Link font awesome -->
    <link href="css/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="css/fontawesome/css/brands.css" rel="stylesheet">
    <link href="css/fontawesome/css/solid.css" rel="stylesheet">

    <!-- Link css -->
    <link rel="stylesheet" type="text/css" href="css/HomePage.css">
    <link rel="stylesheet" type="text/css" href="css/TheBrand.css">
    <link rel="stylesheet" type="text/css" href="css/LocalStore.css">


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
                            <a href="#"><i class="fa-solid fa-user"></i></i><?php echo isset($_SESSION['user_permission'])?$_SESSION['user_permission']:'user'; ?></a>
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
                    <p><strong>LOCAL</strong> STORES</p>
                    <p>FIND A STORE NEAR YOU</p>
                </div>
            </div>
        </div>
    </header>
    <!-- End header -->
    
    <!-- Start main -->
    <main> 
        <div class="container">
            <div class="Main_content">
                <div class="Main_content_locations">
                    <h3>LONDON</h3>
                    <h5>180-182 REGENT STREET, LONDON, W1B 5BT</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing esi elit. Vivamus at arcu sem. Vestibulum ornare eleifendit massa, nec tempor odio. Fusce posuere nunc iaculis ligula viverra iaculis. Aliquam erat volutpat.</p>
                    <a href="#">VIEW DETAILS</a>
                </div>
                <div class="Main_content_locations">
                    <h3>NEW YORK</h3>
                    <h5>109 COLUMBUS CIRCLE, NEW YORK, NY 10023</h5>
                    <p>Nunc non posuere nisl. Etiam finibus vel dui nec lobortis. Aliquam egestas, sem quis condimentum venenatis, erat leo fermentum dolor, non sollicitudin massa mi eu nibh. Nullam vitae aliquam dui, non sodales nisl.</p>
                    <a href="#">VIEW DETAILS</a>
                </div>
                <div class="Main_content_locations">
                    <h3>PARIS</h3>
                    <h5>2133 RUE SAINT-HONORE, 75001 PARIS</h5>
                    <p>Ut interdum fermentum blandit. Donec nec lacus egetit mi rhoncus eleifend. Curabitur laoreet nisl eget rutruml auctor. Vestibulum ante ipsum primis in faucibus orcip luctus et ultrices posuere cubilia curae cras ligula.</p>
                    <a href="#">VIEW DETAILS</a>
                </div>
            </div>
        </div>
        <div class="Main_content_locationDetails">
            <div class="Main_content_location_map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14867.381308932854!2d105.3918796!3d21.3171272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1663827700811!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="Main_content_location_details">
                <div class="Main_content_locations">
                    <h3>LONDON</h3>
                    <h5>180-182 REGENT STREET, LONDON, W1B 5BT</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing esi elit. Vivamus at arcu sem. Vestibulum ornare eleifendit massa, nec tempor odio. Fusce posuere nunc iaculis ligula viverra iaculis. Aliquam erat volutpat.</p>
                </div>
                <ul class="Main_content_location_details_list">
                    <li><a href="#"><i class="fa-solid fa-location-dot"></i> 180-182 REGENT STREET, LONDON, W1B 5BT</a></li>
                    <li><a href="#"><i class="fa-solid fa-phone"></i> 0123-456-789</a></li>
                    <li><a href="#"><i class="fa-solid fa-link"></i> www.yourwebsite.com</a></li>
                    <li><a href="#"><i class="fa-solid fa-envelope"></i> support@yourwebsite.com</a></li>
                    <li><a href="#"><i class="fa-solid fa-clock"></i> Monday-Friday: 9am to 6pm  Saturday: 10am to 6pm  Sunday: 10am to 2pm</a></li>
                </ul>
                <ul class="Main_content_location_details_socialIcons">
                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-camera-retro"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-p"></i></a></li>
                </ul>
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