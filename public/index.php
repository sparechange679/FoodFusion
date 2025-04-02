<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodFusion | Home</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome/css/all.css">
    <link rel="stylesheet" href="assets/css/font-awesome/css/all.min.css">
    <!-- Hover CSS -->
    <link rel="stylesheet" href="assets/css/hover-min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Navigation Section Start -->
    <header class="navbar">
        <nav id="site-top-nav" class="navbar-menu navbar-fixed-top">
            <div class="container">
                <!-- logo -->
                <div class="logo">
                    <a href="index.html" title="Logo">
                        <img src="assets/img/logo.png" alt="Logo" class="img-responsive">
                    </a>
                </div>
                <!-- Main Menu -->
                <div class="menu text-right">
                    <ul>
                        <li><a class="hvr-underline-from-center" href="http://localhost:8000/foodfusion/">Home</a></li>
                        <li><a class="hvr-underline-from-center" href="/about">About</a></li>
                        <li><a class="hvr-underline-from-center" href="/recipe">Recipe</a></li>
                        <li><a class="hvr-underline-from-center" href="/cookbook">Cookbook</a></li>
                        <li><a class="hvr-underline-from-center" href="/contact">Contact</a></li>
                        <li><a class="hvr-underline-from-center" href="/culinary">Culinary</a></li>
                        <li><a class="hvr-underline-from-center" href="/educational">Educational</a></li>
                        <li>
                            <a id="shopping-cart" class="shopping-cart">
                                <i class="fa fas fa-sign-in-alt"></i>
                                <span class="badge">4</span>
                            </a>
                            <div id="cart-content" class="cart-content">
                                <h3 class="text-center" id="form-title">Join Us</h3>
                                <form action="" class="form-join">
                                    <fieldset>
                                        <!-- value: 1 => login/sign-in, value: 0 => join/sign-up -->
                                        <input type="hidden" name="form-value" id="form-value" value="0">

                                        <label class="label" for="firstname" id="firstname-label">Firstname</label>
                                        <input type="text" id="firstname" placeholder="Enter your firstname..." required>

                                        <label class="label" for="lastname" id="lastname-label">Lastname</label>
                                        <input type="text" id="lastname" placeholder="Enter your lastname..." required>

                                        <label class="label" for="email">Email</label>
                                        <input type="email" id="email" placeholder="Enter your email..." required>

                                        <label class="label" for="password">Password</label>
                                        <input type="password" id="password" placeholder="Enter your password..." required>

                                        <input type="submit" value="Join Now" id="login-btn" class="btn-primary">
                                        <a href="#" class="ml-20" id="sign-btn">Sign in</a>
                                    </fieldset>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Navigation Section End -->

    <!-- Food Search Section Start -->
    <section class="food-search text-center">
        <div class="container">
            <form action="food-search.html">
                <input type="search" placeholder="Search for food..." required>
                <input type="submit" value="Search" class="btn-primary">
            </form>
        </div>
    </section>
    <!-- Food Search Section End -->

    <!-- Category Section Start -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>
            <div class="heading-border"></div>

            <div class="grid-3">
                <a href="category-foods.html">
                    <div class="float-container">
                        <img src="assets/img/category/pizza.jpg" class="img-responsive" alt="">
                        <h3 class="float-text text-white">Pizza</h3>
                    </div>
                </a>
                <a href="category-foods.html">
                    <div class="float-container">
                        <img src="assets/img/category/sandwich.jpg" class="img-responsive" alt="">
                        <h3 class="float-text text-white">Sandwich</h3>
                    </div>
                </a>
                <a href="category-foods.html">
                    <div class="float-container">
                        <img src="assets/img/category/burger.jpg" class="img-responsive" alt="">
                        <h3 class="float-text text-white">Burger</h3>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- Category Section End -->

    <!-- Foods Section Start -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>
            <div class="heading-border"></div>
            <div class="grid-2">
                <div class="food-menu-box">
                    <form action="">
                        <div class="food-menu-img">
                            <img src="assets/img/food/p1.jpg" alt="" class="img-responsive img-curve">
                        </div>
                        <div class="food-menu-desc">
                            <h4>Pizza</h4>
                            <p class="food-price">$8.00</p>
                            <p class="food-details">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus excepturi porro.</p>
                        </div>
                    </form>
                </div>
                <div class="food-menu-box">
                    <form action="">
                        <div class="food-menu-img">
                            <img src="assets/img/food/s1.jpg" alt="" class="img-responsive img-curve">
                        </div>
                        <div class="food-menu-desc">
                            <h4>Sandwich</h4>
                            <p class="food-price">$8.00</p>
                            <p class="food-details">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus excepturi porro.</p>
                        </div>
                    </form>
                </div>
                <div class="food-menu-box">
                    <form action="">
                        <div class="food-menu-img">
                            <img src="assets/img/food/b1.jpg" alt="" class="img-responsive img-curve">
                        </div>
                        <div class="food-menu-desc">
                            <h4>Burger</h4>
                            <p class="food-price">$8.00</p>
                            <p class="food-details">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus excepturi porro.</p>
                        </div>
                    </form>
                </div>
                <div class="food-menu-box">
                    <form action="">
                        <div class="food-menu-img">
                            <img src="assets/img/food/p1.jpg" alt="" class="img-responsive img-curve">
                        </div>
                        <div class="food-menu-desc">
                            <h4>Pizza</h4>
                            <p class="food-price">$8.00</p>
                            <p class="food-details">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus excepturi porro.</p>
                        </div>
                    </form>
                </div>
                <div class="food-menu-box">
                    <form action="">
                        <div class="food-menu-img">
                            <img src="assets/img/food/s1.jpg" alt="" class="img-responsive img-curve">
                        </div>
                        <div class="food-menu-desc">
                            <h4>Sandwich</h4>
                            <p class="food-price">$8.00</p>
                            <p class="food-details">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus excepturi porro.</p>
                        </div>
                    </form>
                </div>
                <div class="food-menu-box">
                    <form action="">
                        <div class="food-menu-img">
                            <img src="assets/img/food/b1.jpg" alt="" class="img-responsive img-curve">
                        </div>
                        <div class="food-menu-desc">
                            <h4>Burger</h4>
                            <p class="food-price">$8.00</p>
                            <p class="food-details">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus excepturi porro.</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <p class="text-center">
            <a href="foods.html" class="btn-primary">See All Foods</a>
        </p>
    </section>
    <!-- Foods Section End -->

    <!-- Footer Section Start -->
    <section class="footer">
        <div class="container">
            <div class="grid-3">
                <div class="text-center">
                    <h3>About Us</h3><br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat officia, temporibus expedita dicta eligendi harum architecto fugiat sint, laudantium omnis animi. Voluptas praesentium maiores minima pariatur necessitatibus consequuntur, similique assumenda.</p>
                </div>
                <div class="texr-center">
                    <h3>Site Map</h3><br>
                    <div class="site-links">
                        <a href="categories.html">Categories</a>
                        <a href="foods.html">Foods</a>
                        <a href="order.html">Order</a>
                        <a href="contact.html">Contact</a>
                        <a href="login.html">Login</a>
                    </div>
                </div>
                <div class="social-links">
                    <h3>Social Links</h3><br>
                    <div class="social">
                        <ul>
                            <li><a href="https://facebook.com/"><img src="assets/img/logos/facebook-logo.svg" /></a></li>
                            <li><a href="https://instagram.com/"><img src="assets/img/logos/instagram-logo.svg" /></a></li>
                            <li><a href="https://x.com/"><img src="assets/img/logos/x-logo.svg" /></a></li>
                            <li><a href="https://linkedin.com/"><img src="assets/img/logos/linkedin-logo.svg" /></a></li>
                            <li><a href="https://youtube.com/"><img src="assets/img/logos/youtube-logo.svg" /></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section End -->

    <!-- Copyright Section start -->
    <section class="copyright">
        <div class="container text-center">
            <p>All rights reserved. Design By <a href="#">Farai Mzumara</a></p>
        </div>
        <a id="back-to-top" class="btn-primary">
            <i class="fa fa-angle-double-up"></i>
        </a>
    </section>
    <!-- Copyright Section End -->

    <!-- JQuery -->
    <script src="assets/js/jquery/jquery-3.6.0.js.js"></script>
    <!-- Jquery UI -->
    <script src="assets/js/jquery/jquery-ui.js.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/font-awesome/all.js"></script>
    <script src="assets/js/font-awesome/all.min.js"></script>

    <script>
        $(document).ready(function() {
            let formTitle = $("#form-title");
            const formValue = $("#form-value");
            const firstname = $("#firstname");
            const firstnameLabel = $("#firstname-label");
            const lastname = $("#lastname");
            const lastnameLabel = $("#lastname-label");
            const email = $("#email");
            const password = $("#password");
            const loginBtn = $("#login-btn");
            const signBtn = $("#sign-btn");

            signBtn.on("click", function() {
                if (formValue.val() == 0) {
                    formValue.val("1");
                    firstname.fadeOut();
                    lastname.fadeOut();
                    firstnameLabel.fadeOut();
                    lastnameLabel.fadeOut();
                    formTitle.html("Sign In");
                    loginBtn.val("Login");
                    signBtn.html("Sign up");
                } else {
                    formValue.val("0");
                    firstname.fadeIn();
                    lastname.fadeIn();
                    firstnameLabel.fadeIn();
                    lastnameLabel.fadeIn();
                    formTitle.html("Join Us");
                    loginBtn.val("Join Now");
                    signBtn.html("Sign in");
                }
            });

            loginBtn.on("click", (e) => {
                e.preventDefault();
                // handle login/sign in and register/sign up
                // formValue.val(): 0 => join/sign-up, 1 => login/sign-in
                alert(formValue.val());
            });
        });
    </script>
</body>

</html>