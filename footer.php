<footer>
        <div class="footer-links-group">
            <div class="page-links-group">
                <h2>Explore</h2>
                <ul class="footer-page-links">
                <li class="<?php if(is_front_page()) echo("current-menu-item")?>"><a href="<?php echo get_home_url()?>">Home</a></li>

                <li class="<?php if (is_page('about-us')) echo("current-menu-item")?>"><a href="<?php echo site_url("about-us")?>">About Us</a></li> 

                <li class="<?php if (is_page('news')) echo("current-menu-item")?>"><a href="<?php echo site_url("news")?>">News and Events</a></li> 

                <li class="<?php if (is_page('music')) echo("current-menu-item")?>"><a href="<?php echo site_url("music")?>">Our Music</a></li>

                <li class="<?php if (is_page('contact-us')) echo("current-menu-item")?>"><a href="<?php echo site_url("contact-us")?>">Contact Us</a></li>
                </ul>
            </div>        
            <div class="legal-links-group">
                <h2>Legal</h2>
                <ul class="footer-legal-links">
                    <li <?php if (is_page('privacy-policy')) echo 'id="currentMenuItem"'?>><a href="<?php echo site_url("privacy-policy")?>">Privacy Policy</a></li>
                    <li><a href="mailto:neilcoleybigband@gmail.com">neilcoleybigband@gmail.com</a></li>
                    <li class="copyrightNotice white"><i class="material-icons">copyright</i>2022 Neil Coley Big Band. All rights reserved</li>
                </ul>
            </div>
        </div>                      
    </footer>
    <?php wp_footer(); ?>
    </body>
</html>

