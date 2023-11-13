<?php

defined('ABSPATH') || exit;

get_header('shop');

while (have_posts()) :
    the_post();

    do_action('woocommerce_before_single_product');

    ?>
    <div class="theme-content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="single-product-<?php the_ID(); ?>" <?php wc_product_class('single-product'); ?>>
                        <div class="product-info">
                            <div class="product-image">
                                <?php
                                do_action('woocommerce_before_single_product_summary');
                                ?>
                            </div>
                                <h1><?php the_title(); ?></h1>
                                <div class="price"><?php woocommerce_template_single_price(); ?></div>
                                <div class="description"><?php the_content(); ?></div>
                                <?php woocommerce_template_single_add_to_cart(); ?>
                            <div class="product-reviews">
                                <?php
                                // Display product reviews and comments
                                comments_template();
                                ?>
                            </div>
                        </div>

                        
                </div>
            </div>
        </div>
    </div>
    
<?php

endwhile;


get_footer('shop');
