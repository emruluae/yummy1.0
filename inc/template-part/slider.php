<div class="slider-area">
        <div class="slider-active">

            <?php
				global $post;
				$args = array('posts_per_page' => 3, 'post_type' => 'slide', 'orderby' => 'menu_order', 'order' => 'ASC');
				$myposts = get_posts ($args);
				foreach($myposts as $post): setup_postdata( $post );
			?>

            <div class="slide-item">
                <img src="<?php the_post_thumbnail_url('large');?>" class="img-fluid" alt="">
            </div>
			<?php endforeach; wp_reset_query();?>

        </div>
    </div>