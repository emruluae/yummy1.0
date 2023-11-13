<?php
/*
Template Name: Login Page
*/
get_header();?>
<div class="theme-content-area">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="theme-content">
                    <div class="login-from">
                    <h2>log In</h2>
                    <form name="loginform" id="loginform" action="<?php echo esc_url(site_url('wp-login.php', 'login_post')); ?>" method="post">
                        <label for="user_login">Username or Email</label>
                        <input type="text" name="log" id="user_login" class="input form-control" value="" size="20" />

                        <label for="user_pass">Password</label>
                        <input type="password" name="pwd" id="user_pass" class="input form-control" value="" size="20" />

                        <p class="forgetmenot">
                            <input type="checkbox" name="rememberme" id="rememberme" class="form-check-input" value="forever" />
                            <label for="rememberme">Remember Me</label>
                        </p>

                        <input type="submit" name="wp-submit" id="wp-submit" class="btn btn-primary" value="Log In" />
                        
                        <a href="<?php echo wp_lostpassword_url(); ?>" title="Lost Password">Lost your password?</a>

                        <input type="hidden" name="redirect_to" value="<?php echo esc_url(home_url('/')); ?>" />
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>