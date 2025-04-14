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