<?php
/**
 * The template for displaying tag pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ChinaTrade
 */
get_header(); ?>

    <main class="main main-aside tag-page tag-page-aside">
        <div class="container">
            <div class="page-content">
                <?php if (have_posts()) : ?>
                    <h1><?php the_archive_title(); // or single_tag_title() ?></h1>
                    <dvi class="row pages-list">
                        <?php while (have_posts()) : the_post();?>
                            <?php get_template_part( 'template-parts/content', 'aside' ); ?>
                        <?php endwhile; ?>
                    </dvi>
                    <?php get_template_part('template-parts/paginate'); ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>

            <?php get_template_part( 'template-parts/sidebar' ); ?>
        </div>
    </main><!-- #main -->

<?php
get_footer();