<!-- single post template -->
<?php get_header(); ?>

<main>
    <?php while(have_posts()) {
        the_post(); ?>
        <section>
            <h1><?php the_title();?></h1>
            <div class="individual-post-container">
                <?php if (has_post_thumbnail()) { ?>
                    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
                    <div class="individual-post-picture">
                        <img src="<?php echo $url ?>" />
                    </div>
                <?php }; ?>
                <div class="<?php if(has_post_thumbnail()) {echo ("half-width");};?>"><?php the_content(); ?></div>
            </div>
        </section>
    <?php } ?>
</main>
<?php get_footer();?>