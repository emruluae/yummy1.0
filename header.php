<!DOCTYPE html>
<html lang="en">
<head>

<?php 
    $favicon_icon = wp_get_attachment_image_src(cs_get_option('favicon_icon'));
    $favicon = $favicon_icon[0];
    $appletouch_icon = wp_get_attachment_image_src(cs_get_option('appletouch_icon'));
    $appletouch = $appletouch_icon[0]; 
?>

<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $favicon?>">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $appletouch?>">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head();
    $header_logo_array = wp_get_attachment_image_src(cs_get_option('header_logo'), 'large');
    $header_logo = $header_logo_array[0];

  ?>     
</head>
<body <?php body_class();?>>
    <div class="header-area blue-bg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="logo red-color d-flex ">
                        <i class="fa-solid fa-bars toggleButton menu-button "></i>
                        
                        <?php if(!empty($header_logo)):?>
                            <a href="<?php echo esc_url(home_url('/'));?>"><img src="<?php echo $header_logo;?>" alt=""></a>
                        <?php else:?>
                            <a href="<?php echo esc_url(home_url('/'));?>"><h2 class="red-color menu-button"><?php echo bloginfo('name'); ?></h2></a>
                        <?php endif;?>           

                    </div>
                </div>
                <div class="col-auto">
                    <div class="cart-search d-flex red-color">
                    <?php
                        // Check if WooCommerce is active
                        if (class_exists('WooCommerce')) {
                            global $woocommerce;
                            $cart_quantity = $woocommerce->cart->cart_contents_count;
                            ?>
                            <div class="cart-icon">
                                <a href="<?php echo wc_get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'your-theme'); ?>">
                                <span class="cart-quantity"><?php echo esc_html($cart_quantity); ?></span>
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    
                                </a>
                            </div>
                        <?php } ?>

                        
                        <i class="fa-solid fa-x searchengin-icon"></i>
                        <i class="fa-brands fa-searchengin searchengin-icon"></i>                        
                    </div>
                </div>
            </div>
                      
        </div>
        
        <?php get_template_part('inc/template-part/search' , 'search');?>
        
        
    </div>
    
