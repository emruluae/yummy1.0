<?php
/*
Template Name: Home Page
*/
$slider_switch = cs_get_option('slider_switch');
$food_list_switch = cs_get_option('food_list_switch');
$parallax_switch = cs_get_option('parallax_switch');
$combo_switch = cs_get_option('combo_switch');
get_header();

if ($slider_switch == true){
    get_template_part('inc/template-part/slider' , 'slider');
};

if ($food_list_switch == true){
    get_template_part('inc/template-part/food' , 'food');
};

if($parallax_switch == true){
    get_template_part('inc/template-part/paralux' , 'paralux');
};

if($combo_switch == true){
    get_template_part('inc/template-part/combo-food' , 'combo-food');
};

get_footer();

?>