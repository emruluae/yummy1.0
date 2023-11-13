<?php 
    $hero_image_array = wp_get_attachment_image_src(cs_get_option('hero_image'));
    $hero_image = $hero_image_array[0];
?>
<div class="hero-area">
        <div class="hero">
            <img class="img-fluid" src="<?php echo $hero_image?>" alt="">
            <div class="hero-cont">
                <div class="container">
                    <div class="row">
                        <div class="col">
                        <h2><a href="<?php echo esc_url(home_url('/'))?>">Yummy</a>/<?php the_title();?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>