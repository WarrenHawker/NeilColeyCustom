<!-- music page template -->
<?php get_header(); ?>

<main> 
    <section> 
        <?php
        while(have_posts()) {
            the_post(); ?>
            <h1><?php the_title();?></h1>
            <div><?php the_content();?></div>
        <?php } ?>
    </section>

    <section class="music-videos">
    <?php $band_videos = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type' => 'video',
    ));
    while($band_videos->have_posts()) {
        $band_videos->the_post(); ?>
        <div class="music-video-container">
            <h2><?php the_title()?></h3>
            <div class="music-video">    
           <?php the_field('video_url');?>
            </div>
            <p> <?php the_field('video_information')?></p>
        </div>
        <?php } wp_reset_postdata()?>
    </section>
 </main>
<?php get_footer();?>