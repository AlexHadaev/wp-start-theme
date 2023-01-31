<?php get_header(); ?>

	<main id="main" class="site-main" role="main">
        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content', 'single'); ?>

            <?php if ( comments_open() || get_comments_number() ) :?>
                <div class="container">
                    <?php  comments_template(); ?>
                </div>

            <?php endif; ?>

        <?php endwhile; ?>

	</main>

<?php get_footer(); ?>
