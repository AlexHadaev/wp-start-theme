<?php
if (have_posts()) : ?>
    <section class="grid-posts">
        <div class="container">
            <h2 class="section-title">
                <span>Articles</span>
            </h2>
            <div class="post-block">
                <?php while (have_posts()): the_post();?>
                    <?php get_template_part('template-parts/post','item'); ?>
                <?php endwhile;?>
            </div>
            <?php wp_reset_query(); ?>
        </div>
    </section>

<?php endif; ?>
