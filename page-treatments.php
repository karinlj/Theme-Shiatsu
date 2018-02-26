<?php
/*
* Template Name: Page Treatments 
* Description: Template for Treatments with two columns with featured image
*/
?>
<?php get_header(); ?>

    <div class="custom-container">
          
               <!--get custom category from URL-->
                  <!--  benny-->
                    <?php $custom_cat = $_GET['treatment-category']; //defined in functions.php
                    ?>
                   
                    <!-- get custom category name from slug-->
                    <?php  $cat_term = get_term_by('slug', $custom_cat, 'treatment-category'); 
                           $cat_name = $cat_term->name; ?>
                    
        
                          <!--Section with customized large banner image-->
                           <?php $one = get_theme_mod('page-layout-display');?>
        

                            <!--If user wants to display Image-->
                            <?php if ( $one == 'Yes') { ?>

                               <section class="page-layout-image banner">
                                    <div class="container">
                                        
                                       <!-- <h1><?php echo get_theme_mod('front-page-layout-heading'); ?>
                                        </h1>-->
                                        
                                         <h1 class="page-title-white">
                                                <?php  echo $cat_name ?>
                                        </h1> 

                                   </div>
                                   
                              </section>
        
                            <?php } ?>

                            <?php if ( $one == 'No')   { ?>

                                <section class="page-layout-none">

                                </section>
                            <?php } ?> 
        

        <!--Section for pages with two columns-->
         <section class="two-columns">
                
                <?php                                   //tex-query for custom taxonomy
                    $args = array('post_type' => 'treatment-posts',
                                                 'post_per_page' => -1,    //unlimited posts
                                                  'tax_query' => array(
                                                        'relation' => 'OR',
                                                        array(
                                                            'taxonomy' => 'treatment-category',
                                                            'field' => 'slug',
                                                            'terms' => array($custom_cat),
                                                            'include_children' => true,
                                                            'operator' => 'IN'
                                                        )
                                                  )
                                                ); 
                     
                  // $args = array('post_type' => 'treatment-posts', 'post_per_page' => -1);
                      $loop = new WP_Query( $args );

                          if( $loop->have_posts()) :

                            $i = 1; 
                           while( $loop->have_posts()) : $loop->the_post(); ?>
                                <div class="img-text-parent ">
                                    
                                    <?php if ($i % 2 == 1) { //variabeln /2 ska INTE gå jämnt upp ?>

                                            <div class="img-text-part text" >

                                                            <h2><?php the_title(); ?></h2>
                                                            <p><?php the_content(); ?></p>

                                            </div> <!--/ >-->

                                            <div class="img-text-part img" >

                                                        <?php  the_post_thumbnail('normal-thumbnail'); ?>
                                            </div> <!--/.  >-->
                                    <?php   } ?>

                                    <?php if ($i % 2 == 0) {  ?>

                                            <div class="img-text-part img" >

                                                        <?php  the_post_thumbnail('normal-thumbnail'); ?>
                                            </div> <!--/.  >-->

                                            <div class="img-text-part text" >

                                                            <h2><?php the_title(); ?></h2>
                                                            <p><?php the_content(); ?></p>

                                            </div> <!--/ >-->
                                    <?php   } ?>
                                    
                                </div><!-- /.img-text-parent-->

                            <?php  $i++;

                          endwhile;

                         else : ?>

                            <p><?php __('No Post Found'); ?></p>
                        <?php endif;
                      //now wp is the boss again
                        wp_reset_postdata();
                    ?> 
                    
                  
                                <!--get link-section.php -->
                        <?php  if  ($cat_name == 'Shiatsu')  { ?>
                         
                                <?php get_template_part('parts/link-section'); ?>
                         
                        <?php } ?>
   
    </section>

</div><!-- /.custom-container -->

<?php get_footer(); ?>
    
    