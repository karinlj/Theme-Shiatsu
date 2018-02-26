<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <meta charset=" <?php bloginfo('charset'); ?> ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content=" <?php bloginfo('description'); ?>" >
    <link rel="icon" href="../../favicon.ico">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
      
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>

      <?php wp_head(); ?>
      <!--customizing image for Showcase Background Mode in front-page.php-->
      <style>
          .front-page-layout.big {
              background:
                  url(<?php echo esc_url( get_theme_mod('front-page-layout-image' )); ?>)  no-repeat center center;
              
              background-size: cover;  
          }
         
          .page-layout-image.banner {
              background:  
                  url(<?php echo esc_url( get_theme_mod('page-layout-image' )); ?>)  no-repeat center center;
              
              background-size: cover;  
          }
          
       /* @font-face {
            font-family: 'GeosansLightRegular';

                
            src: url (<?php echo esc_url (get_template_directory_uri() . '/fonts/geosanslight-webfont.woff') ?>  format('woff') ); 


            font-weight: normal;
            font-style: normal;
        }*/
          
      </style>
  </head>

  <body <?php body_class(); ?> >
      
         <!-- Menu-3. Desktop menu with Sub menus, logo and Sign Up button. Mobile menu sliding in from right - covering whole screen. Some jquery for toggle.  Made with Flexbox-->

    
      <div class="content-container-full-width">
     
     
        <header id="header-new">

            <!--get main-menu.php-->
            <?php get_template_part('parts/main-menu'); ?>

        </header>  
     
     
       

      
      
      
      
      
     
             
      

        
     

    
