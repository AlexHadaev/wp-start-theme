<?php
get_header();

$author_id = get_the_author_meta('ID');
?>
<main class="main-author">

    <section class="section-author">
        <div class="container author-container">
            <div class="author-img">
                <?php echo get_avatar(get_the_author_meta('user_email', $author_id), 350); ?>
            </div>
            <div class="author-text">
                <h1>
                    <?php if (get_the_author_meta('first_name', $author_id)): ?>
                        <?php the_author_meta('first_name', $author_id); ?>
                        <?php the_author_meta('last_name', $author_id); ?>
                    <?php else: ?>
                        <?php the_author_meta('nickname', $author_id); ?>
                    <?php endif; ?>
                </h1>

                <div class="author-description">
                    <?php if (get_the_author_meta('description', $author_id)): ?>
                        <p><?php the_author_meta('description', $author_id); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="section-posts">
        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <?php get_template_part('template-parts/content', get_post_format()); ?>

            <?php endwhile; ?>

            <?php the_posts_navigation(); ?>

        <?php else : ?>

            <?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>
    </section>

</main>
<?php
get_footer();
