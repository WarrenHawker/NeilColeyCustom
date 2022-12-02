<!-- about us page template -->
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

    <section>
        <h1 class="band-section-header">Trumpets</h1>
            <div class="band-section">
                <?php $band_member = new WP_Query(array(
                        'posts_per_page' => -1,
                        'post_type' => 'member',
                        'meta_key' => 'band_section',
                        'meta_value' => 'Trumpets'
                    ));

                    while($band_member->have_posts()) {
                        $band_member->the_post(); ?>
                    <div class="band-member">
                        <div class="profile-picture"> 
                            <img src="<?php $memberImage = get_field('profile_picture'); echo $memberImage ['url']?>">
                        </div>
                        <div class="band-member-info">
                            <h2> <?php the_title()?></h2>
                            <p><?php the_field('instrument')?></p>
                        </div>
                    </div>
                    <?php } wp_reset_postdata()?>
            </div>
    </section>

    <section>
        <h1 class="band-section-header">Trombones</h1>
            <div class="band-section">
                <?php $band_member = new WP_Query(array(
                        'posts_per_page' => -1,
                        'post_type' => 'member',
                        'meta_key' => 'band_section',
                        'meta_value' => 'Trombones'
                    ));

                    while($band_member->have_posts()) {
                        $band_member->the_post(); ?>
                    <div class="band-member">
                        <div class="profile-picture"> 
                            <img src="<?php $memberImage = get_field('profile_picture'); echo $memberImage ['url']?>">
                        </div>
                        <div class="band-member-info">
                            <h2> <?php the_title()?></h2>
                            <p><?php the_field('instrument')?></p>
                        </div>
                    </div>
                    <?php } wp_reset_postdata()?>
            </div>
    </section>

    <section>
        <h1 class="band-section-header">Saxophones</h1>
            <div class="band-section">
                <?php $band_member = new WP_Query(array(
                        'posts_per_page' => -1,
                        'post_type' => 'member',
                        'meta_key' => 'band_section',
                        'meta_value' => 'Saxophones'
                    ));

                    while($band_member->have_posts()) {
                        $band_member->the_post(); ?>
                    <div class="band-member">
                        <div class="profile-picture"> 
                            <img src="<?php $memberImage = get_field('profile_picture'); echo $memberImage ['url']?>">
                        </div>
                        <div class="band-member-info">
                            <h2> <?php the_title()?></h2>
                            <p><?php the_field('instrument')?></p>
                        </div>
                    </div>
                    <?php } wp_reset_postdata()?>
            </div>
    </section>

    <section>
        <h1 class="band-section-header">Rhythm and Vocals</h1>
            <div class="band-section">
                <?php $band_member = new WP_Query(array(
                        'posts_per_page' => -1,
                        'post_type' => 'member',
                        'meta_key' => 'band_section',
                        'meta_value' => 'Rhythm'
                    ));

                    while($band_member->have_posts()) {
                        $band_member->the_post(); ?>
                    <div class="band-member">
                        <div class="profile-picture"> 
                            <img src="<?php $memberImage = get_field('profile_picture'); echo $memberImage ['url']?>">
                        </div>
                        <div class="band-member-info">
                            <h2> <?php the_title()?></h2>
                            <p><?php the_field('instrument')?></p>
                        </div>
                    </div>
                    <?php } wp_reset_postdata()?>
            </div>
    </section>
</main>
<?php get_footer();?>