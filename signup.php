
<?php
include("head.php");
?>
<?php
include("header.php"); ?>
<?php
include("navigation.php"); ?>

<div class="intro">
    <div class="container flex_desk ">
        <div class="login_inner">
            <div class="paragraph">
                <h1 class="login_title">Sign In</h1>
                <div class="signup_link">
                    <p class="paragraph-title">Not a Member Yet? </p>
                    <a class="registration" href="#">Register a Free Account</a>
                </div>
            </div>

            <div class="social_log">
                <div class="social_log_inner">
                    <button class="social_btn ">
                        <i class="fa-brands fa-square-facebook lg_btn"></i>
                        <span class="btn_text">Login with Facebook</span>
                    </button>
                    <button class="social_btn">
                        <i class="fa-brands fa-square-google-plus lg_btn"></i>
                        <span class="btn_text">Login with Google</span>
                    </button>
                </div>
            </div>

            <div class="alt_devider">
                <div class="alt_text"><strong>OR</strong> Login Below</div>
            </div>

            <div class="input_login">
                <div class="input_login_inner">
                    <div class="input_group">
                        <label>Email Address</label>
                        <input class="in_login" type="email">
                    </div>
                    <div class="input_group">
                        <label>Password</label>
                        <input class="in_login" type="password">
                    </div>
                    <button class="login_btn">Login Securely</button>
                </div>
            </div>

            <div class="license">
                <i class="fa-solid fa-lock lock" ></i>
                <p>This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.</p>
            </div>
        </div>
    </div>
</div>

<?php
include("footer.php")
?>
