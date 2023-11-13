<?php 
    $combo_heading = cs_get_option('combo_heading');
?>

<div class="combo-sell-area blue-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="red-color"><?php echo $combo_heading?></h2>
                    <div class="combo-sell-active">
                    <?php
// Ensure WooCommerce is active
if (class_exists('WooCommerce')) :

// Custom query to fetch products
$args = array(
    'post_type'      => 'product',
    'orderby'        => 'date',
    'order'          => 'DESC',
    'post_status'    => 'publish',
    'tax_query'      => [
        [
            'taxonomy' => 'product_cat',
            'field'    => 'slug', // Use 'slug' or 'id' based on your category data
            'terms'    => 'combo', // Slug of the "Combo" category
        ],
    ],
);


$custom_query = new WP_Query($args);

// Check if there are products to display
if ($custom_query->have_posts()) :

    // Start the product loop
    while ($custom_query->have_posts()) : $custom_query->the_post();

        // Get the global product object
        global $product;


         echo '<div class="combo-sell">';

         
         // Product Image
         echo woocommerce_get_product_thumbnail();

         // Display Product Rating as Font Awesome Stars
        $average_rating = $product->get_average_rating();
        echo '<div class="customer-review">';
        for ($i = 1; $i <= 5; $i++) {
            if ($i <= $average_rating) {
                echo '<i class="fa-solid fa-star"></i>'; // Full star for rating
            } else {
                echo '<i class="fa-solid fa-star" style="color: #ccc;"></i>'; // Empty star for no rating
            }
        }
        echo '</div>';

         $title = get_the_title();
        $trimmed_title = wp_trim_words($title, 2, '...');
        // Product Title
        echo '<h4 class="custom-product-title"><a href='.get_permalink().'>' . $trimmed_title . '</a></h4>';
        
        // Product Description
        $content = get_the_content(); // Get the content
        $char_limit = 48; // Set the character limit

        if (strlen($content) > $char_limit) {
            $trimmed_content = substr($content, 0, $char_limit); // Limit the content
            echo '<div class="custom-product-description">' . $trimmed_content . '...</div>';
        } else {
            echo '<div class="custom-product-description">' . $content . '</div>';
        }
      
        // Product Price
        echo '<p class="custom-product-price">' . $product->get_price_html() . '</p>';
     

        // "Add to Cart" Button
        echo '<div class="custom-add-to-cart">';
        woocommerce_template_loop_add_to_cart(); // WooCommerce function to display the "Add to Cart" button
        echo '</div>';

        echo '</div>';


    endwhile; // end of the loop.

    // Reset the custom query
    wp_reset_postdata();

else :
    echo 'No products found';
endif;

endif;
?>
                        
                                                
                    </div>
                </div>
            </div>
        </div>
    </div>