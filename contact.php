<?php 
/*
Template Name: Contact Us Page
*/
get_header();
    $contact_hero_image = wp_get_attachment_image_src(cs_get_option('contact_hero_image'));
    $hero_image = $contact_hero_image[0];
    $contact_hero_switch = cs_get_option('contact_hero_switch');
    $contact_heading = cs_get_option('contact_heading');
    $contact_content = cs_get_option('contact_content');
    $map_switch = cs_get_option('map_switch');
    $contact_maps = cs_get_option('contact_maps');
    $info_switch = cs_get_option('info_switch');
    $contact_info = cs_get_option('contact_info');
    $message_switch = cs_get_option('message_switch');


if($contact_hero_switch == true):
?>
<div class="hero-area">
    <div class="hero">
        <img class="img-fluid" src="<?php echo $hero_image?>" alt="">
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
<div class="contactus-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="contract-head text-center">
                    <h2 class="text-center"><?php echo $contact_heading?></h2>
                    <?php echo wpautop($contact_content);?>
                </div>
            </div>
            <?php if($map_switch == true):?>
            <div class="google-map">
               <iframe src="<?php echo $contact_maps?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                
            </div>
            <?php endif;?>                
        </div>
    </div>
    <div class="container mt-5">
        <?php if($info_switch == true):?>
        <div class="info-wrap">
            <div class="row">
                
                <?php foreach($contact_info as $info):?>
                <div class="col-lg-3">
                    <div class="contact-info">
                        <i class="bi bi-geo-alt"></i>
                        <h4><?php echo $info['info_heading']?></h4>
                        <?php echo wpautop($info['info_content']);?>
                    </div>
                </div>
                <?php endforeach;?>
                
            </div>
        </div>
        <?php endif;?>

        <?php if($message_switch == true):?>

    
<!-- Static email Form Code -->
            
<!-- <div class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required=""></textarea>
          </div>
          <div class="text-center"><button class="btn btn-primary" type="submit">Send Message</button></div>
        </div> -->


<!-- For Contact Forms 7 plugin code -->

        <!-- <div class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
[text* text-991 id:name class:form-control placeholder "Your name"]
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
[email* email-607 id:email class:form-control placeholder "Enter your email address"]
            </div>
          </div>
          <div class="form-group mt-3">
[text* text-991 id:subject class:form-control placeholder "Your subject"]
          </div>
          <div class="form-group mt-3">

[textarea* textarea-540 class:form-control placeholder "Enter your Message"]
          </div>
          <div class="text-center">

[submit class:btn class:btn-primary "Send Message"]
</div>
        </div> -->

        <?php the_content();?>


        <?php endif;?>
    </div>
</div>
<?php get_footer();?>