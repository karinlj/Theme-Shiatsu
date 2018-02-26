<?php
/*
* Template Name: Front Page
* Description: Big front page
*/
?>
    <?php get_header(); ?>

      <div class="custom-container">


        <?php $one = get_theme_mod('front-page-layout-display');?>

        <!--If user wants to display Background Mode-->
        <?php if ( $one == 'Yes') { ?>

        <section class="front-page-layout big">

            <div class="front-text-container">

                <h1>
                    <?php echo get_theme_mod('front-page-layout-heading'); ?>
                </h1>

                <p>
                    <?php echo get_theme_mod('front-page-layout-text'); ?>
                </p>

                <a href="<?php echo get_theme_mod('custom-link-booking-url'); ?>" title="bokadirekt" target="_blank">

                    <!-- <img class="bokadirekt" src="https://foretag.bokadirekt.se/bokatid/BokaTid_Gron_MorkBakgrund_120px.png" alt="Boka tid" border="0" />-->

                    <img class="bokadirekt" src="https://foretag.bokadirekt.se/bokatid/BokaTid_Vit_MorkBakgrund_120px.png" alt="Boka tid" border="0" />

                </a>

                <!--<a href="<?php echo get_theme_mod('front-page-layout-btn-url'); ?>" class="btn btn-green btn-rounded"><?php echo get_theme_mod('front-page-layout-btn-text'); ?>
                </a>-->
            </div>
        </section>
        <?php } ?>


        <?php if ( $one == 'No')   { ?>

        <section class="front-page-layout">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-4 front-page-layout-text">
                        <h1>
                            <?php echo get_theme_mod('front-page-layout-heading'); ?>
                        </h1>
                        <p>
                            <?php echo get_theme_mod('front-page-layout-text'); ?>
                        </p>


                        <a href="<?php echo get_theme_mod('custom-link-booking-url'); ?>" title="bokadirekt" target="_blank">
                            
                            <img class="bokadirekt" src="https://foretag.bokadirekt.se/bokatid/BokaTid_Vit_MorkBakgrund_120px.png" alt="Boka tid" border="0" />
                        </a>


                        <!--
                        <a href="<?php echo get_theme_mod('front-page-layout-btn-url'); ?>" class="btn btn-white btn-rounded"><?php echo get_theme_mod('front-page-layout-btn-text'); ?>
                        </a>-->
                    </div>

                    <div class="col-md-8 front-page-layout-image">
                        <!--not only return a numeric id-number for the image, but the actual url-->
                        <!--<img src="<?php echo wp_get_attachment_url(get_theme_mod('front-page-layout-image')); ?>">-->

                        <img src="<?php echo esc_url( get_theme_mod( 'front-page-layout-image' )); ?>">
                    </div>
                </div>
            </div>
        </section>
        <?php } ?>


        <!--
    <div class="content-container-full-width">
-->

        <!--Section for pages with two columns-->
        <section class="intro-text box-align">

            <?php            
                   $args = array('post_type' => 'front-page-posts', 'post_per_page' => -1);
                      $loop = new WP_Query( $args );

                          if( $loop->have_posts()) :

                            $i = 1; 
                           while( $loop->have_posts()) : $loop->the_post(); ?>

            <div class="text-center">

                <h2>
                    <?php the_title(); ?>
                </h2>
                <p>
                    <?php the_content(); ?>
                </p>

            </div>

            <?php  $i++;

                endwhile;

                else : ?>

            <p>
                <?php __('No Post Found'); ?>
            </p>
            <?php endif;
                      //now wp is the boss again
                        wp_reset_postdata();
                    ?>

        </section>

        <!--get text-boxes.php-->
        <?php get_template_part('parts/image-text-boxes'); ?>


        <!--get reference-boxes.php-->
        <?php get_template_part('parts/reference-boxes'); ?>

  </div><!-- /.custom-container -->


    <?php get_footer(); ?>
