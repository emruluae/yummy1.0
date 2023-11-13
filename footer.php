<?php
    $copyright = cs_get_option('copyright');
    $social_media = cs_get_option('social_media');
?>
<div class="footer-area blue-bg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p>&copy; <?php echo date('Y');?> <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo bloginfo('name')?></a>. <?php echo $copyright?>.</p>
                </div>
                <div class="col-auto red-color">
                <?php foreach($social_media as $social):?>
                    <a href="<?php echo $social['social_link'];?>" target="_blank"><i class="<?php echo $social['social_icon'];?>"></i></a>
                <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
    
    
    <?php 
    get_template_part('inc/template-part/main-menu' , 'menu');
    wp_footer();
    ?>    
</body>
</html>