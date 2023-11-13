<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.

$settings           = array(
  'menu_title'      => 'Theme Options',
  'menu_type'       => 'theme', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Theme Options<small>by yummy</small>',
  'menu_position' => 10,
);


$options        = [];

// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = [
  'name'        => 'header',
  'title'       => 'Header Section',
  'icon'        => 'fa fa-star',

    // begin: fields
    'fields'      => [

      // begin: a field
      [
        'id'      => 'header_logo',
        'type'    => 'image',
        'title'   => 'Upload your Logo',
        'desc'   => 'Upload your images, Recomand size:140px X 50px',
      ],
      [
        'id'      => 'favicon_icon',
        'type'    => 'image',
        'title'   => 'Favicon Icon',
        'desc'   => 'Upload your images, Recomand size:32px X 32px',
      ],
      [
        'id'      => 'appletouch_icon',
        'type'    => 'image',
        'title'   => 'Apple Touch Icon',
        'desc'   => 'Upload your images, Recomand size:152px X 152px',
      ],
      
    

  ], // end: fields
];

$options[]      = [
  'name'        => 'slider',
  'title'       => 'Slider Section',
  'icon'        => 'fa fa-star',

    // begin: fields
    'fields'      => [

      // begin: a field
      [
        'id'      => 'slider_switch',
        'type'    => 'switcher',
        'default' =>  true,
        'title'   => 'Slider Section',
        'desc'   => 'If you want to hide your slider section, off the switch',
    ],
    

  ], // end: fields
];

$options[]      = [
  'name'        => 'food_list',
  'title'       => 'Food List Section',
  'icon'        => 'fa fa-star',

    // begin: fields
    'fields'      => [

      // begin: a field
      [
        'id'      => 'food_list_switch',
        'type'    => 'switcher',
        'default' =>  true,
        'title'   => 'Food List Section',
        'desc'   => 'If you want to hide your Food List section, off the switch',
    ],
    [
        'id'      => 'food_list_heading',
        'type'    => 'text',
        'title'   => 'Heading',
        'desc'   => 'Change Heading',
        'default' =>  'YUMMY FOOD LIST',
        'dependency' =>  ['food_list_switch' , '==' , true ],
    ],
    [
        'id'      => 'food_list_button',
        'type'    => 'text',
        'title'   => 'Explore Food Button',
        'desc'   => 'Change Button Name',
        'default' =>  'Explore Food',
        'dependency' =>  ['food_list_switch' , '==' , true ],
    ],
    

  ], // end: fields
];

$options[]      = [
  'name'        => 'parallax',
  'title'       => 'Parallax Section',
  'icon'        => 'fa fa-star',

    // begin: fields
    'fields'      => [

      // begin: a field
      [
        'id'      => 'parallax_switch',
        'type'    => 'switcher',
        'default' =>  true,
        'title'   => 'Parallax Section',
        'desc'   => 'If you want to hide your Parallax section, off the switch',
    ],
    [
        'id'      => 'parallax_content',
        'type'    => 'textarea',
        'title'   => 'Content',
        'desc'   => 'Change Content',
        'default' =>  'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum expedita inventore corporis ipsa beatae debitis eum. Eos provident ad suscipit saepe magni est inventore delectus libero, voluptatibus corrupti, facilis quo!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum expedita inventore corporis ipsa beatae debitis eum. Eos provident ad suscipit saepe magni est inventore delectus libero, voluptatibus corrupti, facilis quo!',
        'dependency' =>  ['parallax_switch' , '==' , true ],
    ],
    [
        'id'      => 'shop_now_button',
        'type'    => 'text',
        'title'   => 'Shop Now Button',
        'desc'   => 'Change Button Name',
        'default' =>  'Shop Now',
        'dependency' =>  ['parallax_switch' , '==' , true ],
    ],
    

  ], // end: fields
];
$options[]      = [
  'name'        => 'combo',
  'title'       => 'Combo Section',
  'icon'        => 'fa fa-star',

    // begin: fields
    'fields'      => [

      // begin: a field
      [
        'id'      => 'combo_switch',
        'type'    => 'switcher',
        'default' =>  true,
        'title'   => 'Combo Section',
        'desc'   => 'If you want to hide your Combo section, off the switch',
    ],
    [
        'id'      => 'combo_heading',
        'type'    => 'text',
        'title'   => 'Combo Heading',
        'desc'   => 'Change Heading',
        'default' =>  'YUMMY COMBO PACK',
        'dependency' =>  ['combo_switch' , '==' , true ],
    ],
    

  ], // end: fields
];
$options[]      = [
  'name'        => 'footer',
  'title'       => 'Footer Section',
  'icon'        => 'fa fa-star',

    // begin: fields
    'fields'      => [

      // begin: a field
    [
        'id'      => 'copyright',
        'type'    => 'text',
        'title'   => 'Copyright Text',
        'desc'   => 'Change Copyright Text',
        'default' =>  'All rights reserved',
    ],
    [
        'id'              => 'social_media',
        'type'            => 'group',
        'title'           => 'Add to Social Media',
        'button_title'    => 'Add New',
        'accordion_title' => 'Add New Field',
        'fields'          => [

          [
            'id'          => 'social_icon',
            'type'        => 'icon',
            'title'       => 'Select Icon',
          ],
          [
            'id'          => 'social_link',
            'type'        => 'text',
            'title'       => 'Social Link',
            'desc'   => 'Write Social link',
            'default' =>  'https://www.sociallink.com/profile',
          ],
        ]
    ],
    

  ], // end: fields
];
$options[]      = [
  'name'        => 'contact',
  'title'       => 'Contact Us Page',
  'icon'        => 'fa fa-star',

    // begin: fields
    'fields'      => [

      // begin: a field
      [
        'id'      => 'contact_hero_switch',
        'type'    => 'switcher',
        'default' =>  true,
        'title'   => 'Hero Section',
        'desc'   => 'If you want to hide your Hero section, off the switch',
    ],
    [
        'id'      => 'contact_hero_image',
        'type'    => 'image',
        'title'   => 'Hero Image',
        'desc'   => 'Change Hero Image',
        'dependency' =>  ['contact_hero_switch' , '==' , true ],
    ],
    [
        'id'      => 'contact_heading',
        'type'    => 'text',
        'title'   => 'Contact Us Heading',
        'desc'   => 'Change Contact Us Heading',
        'default'   => 'Contact Us',
    ],
    [
        'id'      => 'contact_content',
        'type'    => 'textarea',
        'title'   => 'Contact Us Content',
        'desc'   => 'Change Content',
        'default'   => 'Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.',
    ],
    [
      'id'      => 'map_switch',
      'type'    => 'switcher',
      'default' =>  true,
      'title'   => 'Maps Section',
      'desc'   => 'If you want to hide your Maps section, off the switch',
    ],
    [
        'id'      => 'contact_maps',
        'type'    => 'textarea',
        'title'   => 'Google Map embed src',
        'desc'   => 'Change The Google Map embed src',
        'default'   => 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d5812.573921527721!2d55.423314199999986!3d25.34242179999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sae!4v1699232889312!5m2!1sen!2sae',          
        'dependency' =>  ['map_switch' , '==' , true ],
    ],

    [
      'id'      => 'info_switch',
      'type'    => 'switcher',
      'default' =>  true,
      'title'   => 'Contact Info Section',
      'desc'   => 'If you want to hide your Contact Info section, off the switch', 
    ],

    [
      'id'              => 'contact_info',
      'type'            => 'group',
      'title'           => 'Add to Contact Info',
      'button_title'    => 'Add New',
      'accordion_title' => 'Add New Field',
      'dependency'      =>  ['info_switch' , '==' , true ],
      'fields'          =>  [

        [
          'id'          => 'info_heading',
          'type'        => 'text',
          'title'       => 'Write Heading',
        ],
        [
          'id'          => 'info_content',
          'type'        => 'textarea',
          'title'       => 'Write info',
        ],
        
      ]
    ],
    [
      'id'      => 'message_switch',
      'type'    => 'switcher',
      'default' =>  true,
      'title'   => 'Message Box Section',
      'desc'   => 'If you want to hide your Message Box section, off the switch', 
    ],

  ], // end: fields
];
$options[]      = [
  'name'        => 'aboutus',
  'title'       => 'About Us Page',
  'icon'        => 'fa fa-star',

    // begin: fields
    'fields'      => [

      // begin: a field
      [
        'id'      => 'aboutus_hero_switch',
        'type'    => 'switcher',
        'default' =>  true,
        'title'   => 'Hero Section',
        'desc'   => 'If you want to hide your Hero section, off the switch',
    ],
    [
        'id'      => 'aboutus_hero_img',
        'type'    => 'image',
        'title'   => 'Hero Image',
        'desc'   => 'Change Image',
        'dependency' =>  ['aboutus_hero_switch' , '==' , true ],
    ],
    

  ], // end: fields
];

CSFramework::instance( $settings, $options );
