<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo("charset"); ?>"> 
        <meta name="viewport" content="width=device-width", initial-scale="1";>
        <?php wp_head(); ?>
    </head>
    
    <?php 
        if(is_page()) {
            $pageBackgroundImage = get_field('background_image');
        } else if(is_single()){
            $newsPageID = get_page_by_path('news');
            $pageBackgroundImage = get_field('background_image', $newsPageID);
        }
    ?> 

        <body <?php body_class();?>>
        <img class="background-image" src="<?php echo $pageBackgroundImage['url'];?>"> 
        <header>
            <div class="socials-links">
                <a class="facebook-link" href="https://www.facebook.com/pages/category/Musician-Band/Neil-Coley-Big-Band-622293238273732/"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>
                <a class="youtube-link" href="https://www.youtube.com/channel/UCHF6dVFto1syU3SgyJvbdJA"><i class="fa fa-youtube" aria-hidden="true"></i></a>
            </div>

            <div class="nav-bar-logo">
            <a href="<?php echo get_home_url()?>"><img src=<?php echo get_theme_file_uri("/screenshot.png")?>;></a>
            </div>

            <button class="nav-toggle" aria-label="toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <nav class="nav">
                <ul class="nav-bar">
                    <li class="<?php if (is_front_page()) echo("current-menu-item")?> nav-link"><a href="<?php echo get_home_url()?>">Home</a></li>

                    <li class="<?php if (is_page('about-us')) echo("current-menu-item")?> nav-link"><a href="<?php echo site_url("about-us")?>">About Us</a></li> 

                    <li class="<?php if (is_page('news')) echo("current-menu-item")?> nav-link"><a href="<?php echo site_url("news")?>">News and Events</a></li> 

                    <li class="<?php if (is_page('music')) echo("current-menu-item")?> nav-link"><a href="<?php echo site_url("music")?>">Our Music</a></li>

                    <li class="<?php if (is_page('contact-us')) echo("current-menu-item")?> nav-link"><a href="<?php echo site_url("contact-us")?>">Contact Us</a></li>
                </ul>
            </nav>
        </header>
