<?php 
/*
Template Name: About Us Page
*/
get_header();

$aboutus_hero_switch = cs_get_option('aboutus_hero_switch');
$aboutus_hero_img = wp_get_attachment_image_src(cs_get_option('aboutus_hero_img'), 'large');
$hero_img = $aboutus_hero_img[0];

if($aboutus_hero_switch == true):
?>
<div class="hero-area">
    <div class="hero">
        <img class="img-fluid" src="<?php echo $hero_img?>" alt="">
        <div class="hero-cont">
            <div class="container">
                <div class="row">
                    <div class="col">
                    <h2><a href="<?php echo esc_url(home_url('/'))?>"><?php echo bloginfo('name')?></a>/<?php the_title();?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif;?>
<div class="theme-content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="theme-content">
                        <?php the_content();?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>