<!-- news and events page template -->
<?php get_header(); ?>
<main> 
  <section>
    <h1>Our latest news and events</h1>
    <p><?php the_content() ?></p>
  </section>  

  <section class="posts-container">
    <?php $p = new WP_Query(array('post_type' => 'post'));
      if ($p->have_posts()) {
        while ($p->have_posts()) {
          $p->the_post();?>
          <div class="individual-post">
            <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
             <?php if (has_post_thumbnail()) { ?>
              <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
              <div class="post-picture">
                <img src="<?php echo $url ?>" />
              </div>
            <?php }; ?>
            <p><?php if (has_excerpt()) {
              echo get_the_excerpt();
            } else {
                echo wp_trim_words( get_the_content(), 20, '...' );
              }?>
              <a href="<?php the_permalink(); ?>">Learn more</a></p>
          </div>
       <?php }
      } ?>
  </section>
</main>
<?php get_footer(); ?>