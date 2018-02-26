
<footer class="footer-container">
        <div class="footer-parent-social">

                <?php get_template_part('parts/social-links'); ?>

        </div>
    
    <div class="footer-parent">
        
                <?php get_template_part('parts/footer-links'); ?>

                <div class="footer-child">
                    
                    <div class="footer-list">
                        <a href="<?php echo get_theme_mod('custom-link-booking-url'); ?>" title="bokadirekt" target="_blank">
                            
                             <img class="bokadirekt" src="https://foretag.bokadirekt.se/bokatid/BokaTid_Vit_MorkBakgrund_120px.png" alt="Boka tid" border="0" />
                        </a>
                    </div>
                     
                </div>
            </div>
        
        <div class="footer-bottom">
                
                <p class="footer-copy">&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?>&nbsp; - All rights reserved.</p>
            
                <a href="#header-new"><p class="to-top" title="Till toppen av sidan"></p></a>
                        
        </div>
    
</footer>
</div>  <!--content-container-full-width-->

      <?php wp_footer(); ?>


  </body>
</html>