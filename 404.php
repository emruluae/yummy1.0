<?php 
/*
Template Name: 404 Page
*/
get_header();?>
<div class="theme-content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center theme-content not_found_page">\
                    <h1>&#128577;</h1>
                    <h2>404</h2>
                    <h4>Page not found</h4>
                    <p>Sorry, the page you are looking for might be in another dimension.</p><br>
                    <p>Go back to <a class="red-color" href="<?php echo esc_url(home_url('/'));?>">Home</a> or contact us for assistance.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>