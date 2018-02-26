<?php
/*
* Template Name: Page Contact 
* Description: Template for Contact Page
*/
?>
<?php get_header(); ?>
    <div class="custom-container">
   
               <!--Section with customized large banner image-->
                           <?php $one = get_theme_mod('page-layout-display');?>

                            <!--If user wants to display Image-->
                            <?php if ( $one == 'Yes') { ?>

                               <section class="page-layout-image banner">
                                    <div class="container">
                                        
                                       <!-- <h1><?php echo get_theme_mod('front-page-layout-heading'); ?>
                                        </h1>-->
                                        
                                         <h1 class="page-title-white">
                                                <?php $title = get_the_title();  echo $title; ?>
                                        </h1> 
                                   </div>
                              </section>
        
                            <?php } ?>

                            <?php if ( $one == 'No')   { ?>

                                <section class="page-layout-none">
                                </section>
                            <?php } ?> 
        
    
                <!--get button-section.php-->
            <?php //get_template_part('parts/button-section'); ?>   
    

        
       <!--Section for pages with two columns-->
         <section class="two-columns contact-page">
                    <div class="container-fluid">
                        
                    <div class="row clearfix info-field grey">
                        
                         <?php  $args = array(
                                   'post_type' => 'contact-posts',
                                   'posts_per_page' => -1
                               );        


                        $loop = new WP_Query( $args );

                          if( $loop->have_posts()) :

                          $i = 1;
                        while( $loop->have_posts()) : $loop->the_post(); ?>
                     
                                <?php if ($i % 2 == 1) { //variabeln /2 ska INTE gå jämnt upp ?>

                                            <div class="col-md-6 box-padding">

                                                <h2><?php the_title(); ?></h2>
                                                <p><?php the_content(); ?></p>
                                            </div>
                                <?php   } ?>
                                    
                                <?php if ($i % 2 == 0) {  ?>
                        
                                            <div class="col-md-6 box-padding">
                                                
                                                <div class="contact-social">
                                                    <?php get_template_part('parts/social-links'); ?>

                                                </div>
                                                
                                               <!-- <h2><?php the_title(); ?></h2>-->
                                                <p><?php the_content(); ?></p>
                                            </div>
                                <?php   } ?>
                        
                      <?php  $i++;
                 endwhile;
            
                 else : ?>
                
                    <p><?php __('No Post Found'); ?></p>
                <?php endif;
              //now wp is the boss again
                wp_reset_postdata();
            ?> 
                      
            </div><!-- /.row -->
         </div>
             
    </section>


</div><!-- /.custom-container -->

    <?php get_footer(); ?>
