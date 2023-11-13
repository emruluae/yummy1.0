<?php
/*
Template Name: food Page
*/
get_header();?>

<div class="main-product-area">
<h2 class="red-color">Indulge in Delicious Delights: Shop Your Yummy Products Here</h2>





<div class="container">
        <div class="row">
        <?php


// Output WooCommerce product loop
if ( class_exists( 'WooCommerce' ) ) :
    // Custom query to fetch WooCommerce products
    $args = array(
        'post_type'      => 'product', // WooCommerce product type
        'posts_per_page' => 12,        // Display all products
    );

    $products = new WP_Query( $args );

    if ( $products->have_posts() ) :
        while ( $products->have_posts() ) :
            $products->the_post();
            global $product;
            
            ?>
            

            <div class="col-lg-4">
            <div class="custom-product">
                <?php
                // Product Image
                echo '<div class="product-image">' . woocommerce_get_product_thumbnail() . '</div>';

                // Display Product Rating as Font Awesome Stars
                $average_rating = $product->get_average_rating();
                    echo '<div class="customer-review">';
                    for ($i = 1; $i <= 5; $i++) {
                        if ($i <= $average_rating) {
                            echo '<i class="fa-solid fa-star"></i>'; // Full star for rating
                        } else {
                            echo '<i class="fa-solid fa-star" style="color: #000;"></i>'; // Empty star for no rating
                        }
                    }
                    echo '</div>';

                // Product Title

                
                $title = get_the_title();
                $char_limit = 19; // Set your character limit here

                if (strlen($title) > $char_limit) {
                    $trimmed_title = substr($title, 0, $char_limit) . '...';
                } else {
                    $trimmed_title = $title;
                }

                echo '<h2 class="product-title"><a href="' . get_permalink() . '">' . $trimmed_title . '</a></h2>';


                // Product Description
                $content = get_the_content(); // Get the content
                $char_limit = 48; // Set the character limit

                if (strlen($content) > $char_limit) {
                    $trimmed_content = substr($content, 0, $char_limit); // Limit the content
                    echo '<div class="custom-product-description">' . $trimmed_content . '...</div>';
                } else {
                    echo '<div class="custom-product-description">' . $content . '</div>';
                }

                // Product Categories
                echo '<div class="product-categories">' . wc_get_product_category_list( $product->get_id(), ', ', '<span class="posted-in">' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'woocommerce' ) . ' ', '</span>' ) . '</div>';

                // Product Price
                echo '<p class="custom-product-price">' . $product->get_price_html() . '</p>';

                // "Add to Cart" Button
                echo '<div class="custom-add-to-cart">';
                woocommerce_template_loop_add_to_cart(); // WooCommerce function to display the "Add to Cart" button
                echo '</div>';

                
                ?>
            </div>
            </div>
            <?php
        endwhile;
        
        wp_reset_postdata();

 // Add WooCommerce pagination
 echo '<div class="custom-pagination">';
 echo paginate_links( array(
     'base'    => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
     'format'  => '?paged=%#%',
     'current' => max( 1, get_query_var( 'paged' ) ),
     'total'   => $products->max_num_pages,
 ) );
 echo '</div>';

else:
        echo 'No products found.';

    endif;

        
endif;
?>



                
        </div>
    </div>
</div>
<?php get_footer();?>