<?php
/*
* Template Name: Image to image Page 
* Description: Template for pages with two columns
*/
?>
<?php get_header(); ?>
    <div class="custom-container">
          <div class="page-header-green">
               <h1 class="page-title-white">
                     <?php $title = get_the_title();  echo $title; ?>
                    <!--<div class="debugman">  </div> -->
               </h1>
              <h4 class='subtext'></h4>

          </div>
          
        <!--section for pages with two columns-->
        <!--om det är odd så skrivs posten ut, om det är even så skrivs image ut o tvärtom-->
        <!--om det är odd så skrivs ny rad ut-->
      <section class="page-main extra-margin">
          <div class="container">
            <div class="container">
                    
                <?php
                    $type = 'about-posts'; 
                     switch ($title)
                    {
                         case 'Om mig': $type = 'about-posts';
                                  break;
                    }       

                   $args = array(
                       'post_type' => $type,
                       'posts_per_page' => -1
                   );
                    $loop = new WP_Query( $args );

                        if( $loop->have_posts()) :

                        $i = 1;  
                        while( $loop->have_posts()) : $loop->the_post(); ?>
                            <div class="row clearfix profile">
                                    
                                <div id="about" class="left-box" >
    
                                                            <!--i=  <?php echo $i;  ?>  benny boy  -->  
                                          
                                    <?php if ($i % 2 == 1) {  //variabeln /2 ska INTE gå jämnt upp ?>

                                            <div class="img-text">
                                                <h2><?php the_title(); ?></h2>
                                                <p><?php the_content(); ?></p>
                                            </div>

                                    <?php   } ?>

                                    <?php  if ($i % 2 == 0) {  //variabeln /2 ska gå jämnt upp?>

                                            <div class="img-img">
                                                <?php the_post_thumbnail('large-thumbnail'); ?>
                                            </div>
                                    <?php   } ?>

                                </div> <!--/left-box >-->
                    
                                <div id="about" class="left-box" >
                                            
                                    <?php if ($i % 2 == 1) {  ?>

                                            <?php  the_post_thumbnail('large-thumbnail'); ?>

                                     <?php   } ?>

                                     <?php   if ($i % 2 == 0) { ?>
                                            <div class="img-text">
                                                <h2><?php the_title(); ?></h2>
                                                <p><?php the_content(); ?></p>
                                            </div>
                                     <?php   } ?>

                                </div> <!--/left-box >-->
                                   

                                    <?php if ($i % 2 == 1) {  //variabeln /2 ska gå jämnt upp

                                        echo " </div><!--/.row clearfix-->";

                                        echo "<div class='row clearfix'>";

                                    }?>
                    
                                    
                                </div><!--row-->   
                           
                                        
                        <?php $i++; ?> 
                                
                        <?php endwhile; ?>
                             

                        <?php else : ?>

                            <p><?php __('No Post Found'); ?></p>
                        <?php endif;
                      //now wp is the boss again
                        wp_reset_postdata(); 
                    ?>
            
                
            </div>
        </div>
    </section>
        
    
     
</div><!-- /.custom-container -->

<?php get_footer(); ?>
