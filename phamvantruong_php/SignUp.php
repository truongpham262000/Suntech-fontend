<?php
    require_once "php/login.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>

    <!-- Link font awesome -->
    <link href="css/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="css/fontawesome/css/brands.css" rel="stylesheet">
    <link href="css/fontawesome/css/solid.css" rel="stylesheet">

    <!-- Link css -->
    <link rel="stylesheet" type="text/css" href="css/HomePage.css">
    <link rel="stylesheet" type="text/css" href="css/TheBrand.css">
    <link rel="stylesheet" type="text/css" href="css/SignIn.css">

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
                        <li><a href="SignUp.php">Rigister</a></li>
                        <li><a href="SignUp.php">Sing in</a></li>
                        <li>
                            <a href="#"><i class="fa-solid fa-cart-shopping"></i> Empty <i class="fa-solid fa-chevron-down"></i></a>
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
                    <p><strong>WELCOME</strong> TO AVE</p>
                    <p>SIGN IN OR REGISTER</p>
                </div>
            </div>
        </div>
    </header>
    <!-- End header -->
    
    <!-- Start main -->
    <main>     
        <div class="container">
            <div class="Main_form_signIn">
                <form action="SignUp.php" method="POST" name="form1">
                    <h3>SIGN IN</h3>
                    <input type="text" name="Login_User" placeholder="Your user name..." required><br>
                    <input type="password" name="Login_password" placeholder="Your password..." required><br>
                    <input type="submit" name="LogIn" value="SIGN IN"><label><a href="#">Forgot your Password <i class="fa-solid fa-arrow-right"></i></a></label>
                </form>
                <div class="result_error">
                    <?php echo $error; ?>
                </div>
            </div>
            <div class="Main_form_register Main_form_signIn">
                <form action="SignUp.php" method="POST" name="form2">
                    <h3>REGISTER</h3>
                    <input type="text" name="Register_User" id="Register_User" placeholder="Your user name..." required><br>
                    <input type="password" name="Register_password" id="Register_password" placeholder="Your password..." required><br>
                    <input type="password" name="Register_password_check" id="Register_password_check" placeholder="Confirm password..." required><br>
                    <input type="text" name="Register_Name" id="Register_Name" placeholder="Your fullname..." required><br>
                    <input type="tel" name="Register_Phone" id="Register_Phone" placeholder="Your phone number..." required><br>
                    <input type="email" name="Register_Email" id="Register_Email" placeholder="Your mail..." required><br>
                    <input type="text" name="Register_Address" id="Register_Address" placeholder="Your address..." required><br>
                    <input type="checkbox" name="checkDK" id="checkDK1"><label for="checkDK1" class="checkDK">Sign up for exclusive updates, discounts, new arrivals, contests, and more!</label><br>
                    <input type="submit" name="Register"  value="REGISTER" onclick="load_onclick()">
                    <label>By clicking ‘Create Account’, you <br>agree to our <a href="#">Privacy Policy <i class="fa-solid fa-arrow-right"></i></a></label>
                </form>
                <div class="result_error">
                    <ul>
                        <?php
                            echo $Register_Error_name;
                            echo $Register_Error_name1;
                            echo $Register_Error_pass;
                            echo $Register_Error_pass1;
                            echo $Register_Error_check;
                            echo $success;
                        ?>
                    </ul>
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
</body>
</html>