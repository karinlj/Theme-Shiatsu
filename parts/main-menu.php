<!--Menu-3 rom Boozang. Desktop menu with logo and Sign up button. Mobile menu sliding in from right - covering whole screen. Sub menus. Made with Flexbox -->

<nav class="nav-desktop">
        <h2 class="site-title">
                <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    ShiatsuRummet
                </a> 
            </h2>
        
        <div class="nav-links">
            
          <?php wp_nav_menu(); ?>
            
            <div class="booking-btn">
                <ul>
                    <li>
                        <a href="<?php echo get_theme_mod('custom-link-booking-url'); ?>" title="bokadirekt" target="_blank">

                            <img class="bokadirekt" src="https://foretag.bokadirekt.se/bokatid/BokaTid_Gron_MorkBakgrund_120px.png" alt="Boka tid" border="0" />
                        </a> 
                    </li>
                    
                </ul>
            </div>
        </div>

            <span class="toggle">&#9776;</span> <!--hamburger-->
    </nav>
    
    <div class="nav-mobile">
          <span class="toggle">&times;</span>  <!--close-->
            
          <div class="nav-links">
            
          <?php wp_nav_menu(); ?>
            
            <div class="signup">
                <ul>
                    <li>
                        <a href="<?php echo get_theme_mod('custom-link-booking-url'); ?>" title="bokadirekt" target="_blank">

                             <img class="bokadirekt" src="https://foretag.bokadirekt.se/bokatid/BokaTid_Vit_MorkBakgrund_120px.png" alt="Boka tid" border="0" />
                        </a> 
                    </li>
                    
                </ul>
            </div>
        </div>
       
    </div>