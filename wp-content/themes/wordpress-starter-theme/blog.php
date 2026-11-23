<?php
/*
 * Template Name: Blog
 * Template Post Type: page
 */

get_header();
$paged = max( 1, absint( get_query_var( 'paged' ) ), absint( get_query_var( 'page' ) ) );
$blog_query = new WP_Query( array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => (int) get_option( 'posts_per_page' ),
    'paged' => $paged,
) );
?>
<main id="main" class="page-main blog-main" role="main">
    <div class="container">
        <?php while ( have_posts() ) : the_post(); ?>
            <header class="inner-page-heading">
                <p class="eyebrow">Journal</p>
                <h1><?php the_title(); ?></h1>
                <?php if ( trim( get_the_content() ) ) : ?>
                    <div class="inner-page-lead"><?php the_content(); ?></div>
                <?php else : ?>
                    <p class="inner-page-lead"><?php esc_html_e( 'Notes from the workshop and the rooms we live in.', 'theme' ); ?></p>
                <?php endif; ?>
            </header>
        <?php endwhile; ?>

        <?php if ( $blog_query->have_posts() ) : ?>
            <div class="blog-grid">
                <?php while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
                    <?php get_template_part( 'template-parts/content', 'blog' ); ?>
                <?php endwhile; ?>
            </div>

            <?php get_template_part( 'template-parts/paginate', '', array( 'container' => '', 'total' => $blog_query->max_num_pages ) ); ?>
        <?php else : ?>
            <div class="blog-empty-state">
                <h2><?php esc_html_e( 'Nothing on the journal just yet.', 'theme' ); ?></h2>
                <p><?php esc_html_e( 'Please check back soon for notes from the workshop.', 'theme' ); ?></p>
            </div>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>

</main>


<?php get_footer();
