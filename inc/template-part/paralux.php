<?php 
    $parallax_content =cs_get_option('parallax_content');
    $shop_now_button =cs_get_option('shop_now_button');
?>

<div class="paralux-wraper blue-bg">
        <div class="paralux-area">
            <div class="paralux">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="paralux-active">                              
                                <?php echo wpautop($parallax_content)?>
                                <a href="<?php echo get_permalink(get_page_by_path('/food'))?>"><?php echo $shop_now_button?></a>                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>