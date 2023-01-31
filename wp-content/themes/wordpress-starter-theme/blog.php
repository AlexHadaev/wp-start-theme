<?php
/*
 * Template Name: Blog
 * Template Post Type: page
 */

get_header();
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array('post_type' => 'post', 'posts_per_page' => '2', 'paged' => $paged);
$posts = new WP_Query($args);
?>
<main class="blog-main">
    <div class="container">
        <h2><?php the_title() ?></h2>
    </div>
    <div class="blog-posts">
        <?php if ($posts->have_posts()) : ?>

            <?php while ($posts->have_posts()) : $posts->the_post(); ?>

                <?php get_template_part('template-parts/content', get_post_format()); ?>

            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>
        <?php else : ?>

            <?php get_template_part('template-parts/content', 'none'); ?>
        <?php endif; ?>
    </div>

    <?php get_template_part('template-parts/paginate','',['container'=>'container', 'total'=>$posts->max_num_pages]); ?>

</main>


<?php get_footer();
