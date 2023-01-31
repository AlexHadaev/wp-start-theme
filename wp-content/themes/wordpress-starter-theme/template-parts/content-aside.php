<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h2><?php the_title() ?></h2>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">More</a>
</article>
