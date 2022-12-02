<!-- home page template -->
<?php get_header();

$pageBackgroundImage = get_field('background_image');

?>

<main> 
    <section>
        <?php the_content()?>
    </section> 

    <section class="gigs-and-samples-group">
        <div class="upcoming-gig-container">
            <h1 class="upcoming-gig-header">Come hear us live!</h1>
            <h2>Our next gig will be at:</h2>
            <p> <?php the_field('gig_location');?>
                <br>
            <?php the_field('gig_date');?>
                <br>
                <?php the_field('gig_time');?>
            </p>
            <a href="<?php the_field('gig_ticket_url');?>" class="wp-block-button__link">Book tickets</a>
        </div>
        <div class="sample-video-container">
            <h1 class="sample-video-header">Hear the band play!</h1>
            <div class="sample-video">    
                <?php the_field('sample_video');?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>

