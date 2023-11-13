<?php
/**
 * Functions and definitions
 * @subpackage Yummy_theme
 * @since Yummy_theme 1.0
 */

if ( ! function_exists( 'yummy_theme_setup' ) ) {

	function yummy_theme_setup() {

		add_theme_support('woocommerce');

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

		add_theme_support( 'post-thumbnails' );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'yummytheme' ),
				'footer'  => esc_html__( 'Secondary menu', 'yummytheme' ),
			)
		);

		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		add_theme_support('custom-logo');


		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

	

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom line height controls.
		add_theme_support( 'custom-line-height' );

		// Add support for link color control.
		add_theme_support( 'link-color' );

		// Add support for experimental cover block spacing.
		add_theme_support( 'custom-spacing' );

		// Add support for custom units.
		// This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
		add_theme_support( 'custom-units' );

	}
}

add_action( 'after_setup_theme', 'yummy_theme_setup' );




function check_woocommerce() {
    // Check if WooCommerce is active
    if (class_exists('WooCommerce')) {
        // WooCommerce is installed and active
    } else {
        // WooCommerce is not installed or not active
        add_action('admin_notices', 'display_woocommerce_notice');
    }
}
add_action('admin_init', 'check_woocommerce');

function display_woocommerce_notice() {
    ?>
    <div class="notice notice-error">
        <p><?php _e('WooCommerce is not installed or activated. Please install and activate WooCommerce to use this theme.', 'your-theme-textdomain'); ?></p>
    </div>
    <?php
}



function yummy_theme_style_register(){

	wp_enqueue_style( 'Bootstrap_framwork', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2', 'all' );

	wp_enqueue_style( 'slick_slider', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.8.1', 'all' );
	wp_enqueue_style( 'yummy_theme_style', get_stylesheet_uri() );




	wp_enqueue_script( 'theme_jQuery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true );
	wp_enqueue_script( 'Bootstrap_framwork_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), '5.3.2', true );
	wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/827bee0306.js', array(), '6.4.2', true );
	wp_enqueue_script( 'slick_slider_js', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '1.8.1', true );
	wp_enqueue_script( 'yummy_theme_js', get_template_directory_uri() . '/assets/js/min.js', array(), '1.0.0', true );

}
add_action('wp_enqueue_scripts', 'yummy_theme_style_register', );


function yummy_theme_custom_post(){
	register_post_type('slide',
		array(
			'labels'=>	array(
				'name'	=>	__('slides'),
				'singular_name'	=>	__('slide')
			),
			'supports'	=>	array('title','thumbnail','page-attributes'),
			'public'	=>	false,
			'show_ui'	=>	true,
			'menu_icon' => 'dashicons-format-image',
		),
	);
}
  add_action( 'init','yummy_theme_custom_post' );

  function move_admin_bar() {
    echo '
    <style>
        body.admin-bar {
            margin-top: 0 !important;
        }
        #wpadminbar {
            top: auto !important;
            bottom: 0;
            position: fixed;
        }
    </style>
    ';
}

add_action('wp_footer', 'move_admin_bar');

function custom_return_to_shop_button() {
    $shop_url = get_permalink(wc_get_page_id('shop'));
    echo '<a class="button wc-backward" href="' . esc_url($shop_url) . '">' . __('Return to Shop', 'woocommerce') . '</a>';
}
add_action('woocommerce_cart_actions', 'custom_return_to_shop_button', 9);

function custom_login() {
    if (isset($_POST['log']) && isset($_POST['pwd'])) {
        $creds = array(
            'user_login' => $_POST['log'],
            'user_password' => $_POST['pwd'],
            'remember' => true
        );

        $user = wp_signon($creds, false);

        if (is_wp_error($user)) {
            // Login failed, handle the error (e.g., display an error message).
        } else {
            // Login successful, redirect to the home page or a custom page.
            wp_redirect(home_url('/'));
            exit;
        }
    }
}

add_action('init', 'custom_login');


function custom_registration_form() {
	if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password'])) {
	  $username = sanitize_user($_POST['username']);
	  $email = sanitize_email($_POST['email']);
	  $password = $_POST['password'];
	  $confirm_password = $_POST['confirm_password'];
  
	  if ($password !== $confirm_password) {
		echo "Passwords do not match.";
	  } else {
		$user_id = wp_create_user($username, $password, $email);
  
		if (is_wp_error($user_id)) {
		  echo "Registration failed: " . $user_id->get_error_message();
		} else {
		  echo "Registration successful. Please log in.";
		  // Redirect to the login page after successful registration
		  wp_redirect(home_url('/login/'));
		  exit;
		}
	  }
	}
  }
  
  add_action('template_redirect', 'custom_registration_form');
  
// Add a function to modify the styling of the cart page based on login status
function customize_cart_page_style() {
    if (is_cart() && !is_user_logged_in()) {
        // User is not logged in and on the cart page, add custom CSS to hide the cart and display the message
        echo '<style>.woocommerce-cart .theme-content-area { display: none; }</style>';
        echo '<div class="theme-content-cart-area">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="theme-cart-content">
                            <div class="login-form">
                                <p>Please log in or register before using our services.</p>
                                <div class="login-register d-flex">
                                    <a class="uniq-user-button login_button" href="' . get_permalink(get_page_by_path('/login')) . '">Log In</a>
                                    <a class="uniq-user-button register_button" href="' . get_permalink(get_page_by_path('/register')) . '">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
    }
}
add_action('wp_head', 'customize_cart_page_style');

require_once 'inc/theme-framework/cs-framework.php';


