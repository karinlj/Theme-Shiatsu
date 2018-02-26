<?php
function bn_customize_register($wp_customize){
    
    //Front Page Layout section
    $wp_customize->add_section('front-page-layout', array(
                    
        'title'     => __('Front Page Layout', 'theme-shiatsu'), //Section name and template name
        'description'   => sprintf(__('Options for Front Page Layout', 'theme-shiatsu'))
    ));
    
    //Front Page: Display: settings and control
    $wp_customize->add_setting('front-page-layout-display', array(
        'default'   => _x('No', 'theme-shiatsu')
    ));
     $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'front-page-layout-display-control', array(
         'label'    =>__('Background Mode?'),
         'section'  =>'front-page-layout',
        'settings'  => 'front-page-layout-display',
         'type'     => 'select',
         'choices'  => array('No' => 'No', 'Yes' => 'Yes')
     ))); 
    
    
    //Front Page: Image: settings and control
        $wp_customize->add_setting('front-page-layout-image');
    
        //not new WP_Customize_Cropped_Image_Control
         $wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'front-page-layout-image-control', array(         
         'label'    =>__('Image'),
         'section'  =>'front-page-layout',
         'settings'  => 'front-page-layout-image',
         //'width'    => 420,
         //'height'   => 300
     )));
    
    
    
    //Front Page: Heading: settings and control
    $wp_customize->add_setting('front-page-layout-heading', array(
        'default'   => _x('Example Headline Text', 'theme-shiatsu'),
        'type'      => 'theme_mod'
    ));
     $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'front-page-layout-heading-control', array(
         'label'    =>__('Heading'),
         'section'  =>'front-page-layout',
        'settings'  => 'front-page-layout-heading'
     ))); 
        
    
    
     //Front Page: Text settings and control
    $wp_customize->add_setting('front-page-layout-text', array(
        'default'   => _x('Example Paragraph Text', 'theme-shiatsu'),
        'type'      => 'theme_mod'
    ));
     $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'front-page-layout-text-control', array(
         'label'    =>__('Text'),
         'section'  =>'front-page-layout',
        'settings'  => 'front-page-layout-text',
         'type'     => 'textarea'
     ))); 
    
    
    
      //Front Page: Button settings and control
    $wp_customize->add_setting('front-page-layout-btn-url', array(
        'default'   => _x('http://test.com', 'theme-shiatsu'),
        'type'      => 'theme_mod'
    ));
     $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'front-page-layout-btn-url-control', array(
         'label'    =>__('Button URL'),
         'section'  =>'front-page-layout',
        'settings'  => 'front-page-layout-btn-url'
     ))); 
    
    
    
    //Front Page: Button Text: settings and control
        $wp_customize->add_setting('front-page-layout-btn-text', array(
        'default'   => _x('Example Button Text', 'theme-shiatsu'),
        'type'      => 'theme_mod'
    ));
         $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'front-page-layout-btn-text-control', array(         
         'label'    =>__('Button Text'),
         'section'  =>'front-page-layout',
         'settings'  => 'front-page-layout-btn-text',
         'type'     => 'textarea'
     )));
    
    
    
    
    
    
    //Custom Link Booking Section
    $wp_customize->add_section('custom-link-booking', array(
                    
        'title'     => __('Custom Link Booking', 'theme-shiatsu'), 
        'description'   => sprintf(__('Options for Custom  Link Booking', 'theme-shiatsu'))
    ));
    
    
     //Custom Link Booking Section: Link Url: settings and control
    $wp_customize->add_setting('custom-link-booking-url', array(
        'default'   => _x('http://test.com', 'theme-shiatsu'),
        'type'      => 'theme_mod'
    ));
     $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'custom-link-booking-control', array(
         'label'    =>__('Link URL'),
         'section'  =>'custom-link-booking',
        'settings'  => 'custom-link-booking-url'
     ))); 
    
    
    //Custom Link Booking Section: Link Text: settings and control
        $wp_customize->add_setting('custom-link-booking-text', array(
        'default'   => _x('Example Button Text', 'theme-shiatsu'),
        'type'      => 'theme_mod'
    ));
         $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'custom-link-booking-text-control', array(         
         'label'    =>__('Link Text'),
         'section'  =>'custom-link-booking',
         'settings'  => 'custom-link-booking-text',
         'type'     => 'textarea'
     )));
    
    
    
    
    
    
   
    
    
    //Page Layout section
    $wp_customize->add_section('page-layout', array(
                    
        'title'     => __('Page Layout', 'theme-shiatsu'), //Section name and template name
        'description'   => sprintf(__('Options for Page Layout', 'theme-shiatsu'))
    ));
    
     
    //Page Layout: Heading: settings and control
    $wp_customize->add_setting('page-layout-heading', array(
        'default'   => _x('Example Headline Text', 'theme-shiatsu'),
        'type'      => 'theme_mod'
    ));
     $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'page-layout-heading-control', array(
         'label'    =>__('Heading'),
         'section'  =>'page-layout',
        'settings'  => 'page-layout-heading'
     ))); 
        
    
    
    //Page Layout: Display: settings and control
    $wp_customize->add_setting('page-layout-display', array(
        'default'   => _x('No', 'theme-shiatsu')
    ));
     $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'page-layout-display-control', array(
         'label'    =>__('Display Banner Image?'),
         'section'  =>'page-layout',
        'settings'  => 'page-layout-display',
         'type'     => 'select',
         'choices'  => array('No' => 'No', 'Yes' => 'Yes')
     ))); 
    
    
    //Page Layout: Image: settings and control
        $wp_customize->add_setting('page-layout-image');
    
        //not new WP_Customize_Cropped_Image_Control
         $wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'page-layout-image-control', array(         
         'label'    =>__('Image'),
         'section'  =>'page-layout',
         'settings'  => 'page-layout-image',
         //'width'    => 420,
         //'height'   => 300
     )));
    
    
}

add_action('customize_register', 'bn_customize_register');