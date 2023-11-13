<div class="main-menu-area blue-bg">        
    <div class="menu-header red-color">
        <a href=""><h2 class="red-color">Yummy</h2></a>
        <i class="fa-solid fa-x toggleButton"></i>
    </div>        
    
    <div class="main-menu">
    <?php
        // Display the primary menu.
        wp_nav_menu(array(
            'theme_location' => 'primary',
        ));
        ?>

    </div>
    <?php if(is_user_logged_in()):?>
    <div class="uniq-user-area">
        <?php
        // Check if the user is logged in
        if (is_user_logged_in()) {
            $user = wp_get_current_user();
            $user_display_name = $user->display_name;
            $user_avatar_url = get_avatar_url($user->ID);

            if (!empty($user_display_name)) {
                $user_dashboard_url = admin_url('profile.php');
                echo '<img src="' . esc_url($user_avatar_url) . '" alt="' . esc_attr($user_display_name) . '">';
                echo '<h4><a href="' . esc_url($user_dashboard_url) . '">' . esc_html($user_display_name) . '</a></h4>';
            }
        }
        ?>
        <a class="uniq-user-bitton logout_button" href="<?php echo wp_logout_url(home_url()); ?>">Log out</a>

    </div>
    <?php else:?>
    <div class="uniq-user-area">
        <div class="login-register d-flex">
        <a class="uniq-user-bitton login_button" href="<?php echo get_permalink(get_page_by_path('/login'))?>">Log In</a>
        <a class="uniq-user-bitton register_button" href="<?php echo get_permalink(get_page_by_path('/register'))?>">Register</a>

        </div>
    </div>
    <?php endif;?>
</div>
<div class="topupdutton">
    <i id="topButton" class="fa-solid fa-arrow-up"></i>
</div>