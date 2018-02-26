 <?php if( $loop->have_posts()) :

                        $i = 1; 
                      
while( $loop->have_posts()) : $loop->the_post(); ?>
                            <div class="row clearfix info-field">

                                <div class="col-md-6 box-padding" >

                                        <?php if ($i % 2 == 1) {  //variabeln /2 ska INTE gå jämnt upp ?>

                                                <h2><?php the_title(); ?></h2>
                                                <p><?php the_content(); ?></p>

                                        <?php   } ?>

                                        <?php  if ($i % 2 == 0) {  //variabeln /2 ska gå jämnt upp?>


                                                <?php the_post_thumbnail('normal-thumbnail'); ?>

                                        <?php   } ?>

                                </div> <!--/.col-md-6 >-->

                                <div class="col-md-6 box-padding" >

                                        <?php if ($i % 2 == 1) {  ?>

                                            <?php  the_post_thumbnail('normal-thumbnail'); ?>

                                        <?php   } ?>

                                        <?php   if ($i % 2 == 0) { ?>

                                                <h2><?php the_title(); ?></h2>
                                                <p><?php the_content(); ?></p>

                                        <?php   } ?>

                                </div> <!--/. col-md-6 >-->

                            </div><!-- /.row -->


                         $i++;

                      endwhile;

                     else : ?>

                        <p><?php __('No Post Found'); ?></p>
                    <?php endif;
                  //now wp is the boss again
                    wp_reset_postdata();
                ?>        