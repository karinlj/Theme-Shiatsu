<?php
/*
* Template Name: Page Notitle 
* Description: General template for pages without Custom Posts 
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
                                        
                                       <!-- <h1><?php echo get_theme_mod('page-layout-heading'); ?>
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
        
        
        
    
     <div class="content-container grey">
       <div class="container-fluid extra-padding-bottom">
           <div class="row">
               <div class="col-md-8 col-md-offset-2 page-main">
                  
                <!--main post loop-->
                <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>

                       <!-- get content.php-->
                        <?php the_content(); ?>

                <?php endwhile; ?>
                <?php else : ?>
                    <p><?php __('No Posts Found'); ?></p>
                <?php endif; ?>
         
            </div>
         </div>
         </div>
    </div><!-- /.content-container -->

    </div><!-- /.custom-container -->

    <?php get_footer(); ?>
