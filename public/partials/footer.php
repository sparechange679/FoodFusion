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