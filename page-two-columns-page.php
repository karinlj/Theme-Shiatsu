<?php
/*
* Template Name: Page Two Columns 
* Description: Template for two columns with text, text and image
*/
?>
<?php get_header(); ?>
    <div class="custom-container">
      <div class="page-header-green">
           <h1 class="page-title-white">
                 <?php $title = get_the_title();  echo $title; ?>
                <!--<div class="debugman">  </div> -->
           </h1>
          
          <!--different subtext depending on the page-->
            
      </div>
     
       <!--Section for pages with tree columns-->
         <section class="two-columns page-main extra-margin box-padding">
                 <div class="container">
                    <div class="row clearfix">

                         <?php  $args = array(
                                   'post_type' => 'about-posts',
                                   'posts_per_page' => 3
                               );        


                        $loop = new WP_Query( $args );

                          if( $loop->have_posts()) :

                           while( $loop->have_posts()) : $loop->the_post(); ?>

                                    <div class="col-md-6 box-padding">

                                        <p><?php the_content(); ?></p>
                                    </div>

                 <?php endwhile;
            
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
