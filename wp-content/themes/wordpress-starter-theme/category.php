<?php
/**
 * Category archive
 */

get_header();
?>
    <main class="category-main">
        <div class="category-page">
            <div class="container">
                <h2 class="section-title">
                    <?php single_cat_title() ?>
                </h2>
            </div>

            <?php if (have_posts()) : ?>
                <div class="row list">
                    <?php while (have_posts()) : the_post(); ?>
                        <?php get_template_part('template-parts/content', get_post_format()); ?>
                    <?php endwhile; ?>
                </div>

                <?php get_template_part('template-parts/paginate','',['container'=>'container']); ?>

                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </main>

<?php get_footer();
