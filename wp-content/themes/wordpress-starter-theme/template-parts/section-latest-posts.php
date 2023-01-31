<?php
$args = array(
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC',
    'post_status' => 'publish'
);
$posts = new WP_Query($args);

if ($posts->have_posts()) : ?>
    <section class="grid-posts latest-posts">
        <div class="container">
            <h2 class="section-title">
                <span>Latest Articles</span>
            </h2>
            <div class="post-block">
                <?php while ($posts->have_posts()): $posts->the_post();
                    global $post;
                    $img = get_the_post_thumbnail($post->ID); ?>
                    <div class="post-item item">
                        <div class="item-img">
                            <?php echo $img; ?>
                        </div>

                        <div class="item-text">
                            <?php if (get_the_title()):?>
                            <h3 class="item-title">
                                <a href="<?php the_permalink($post->ID); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <?php endif; ?>

                            <?php if (get_the_excerpt()):?>
                                <div class="excerpt"><?php the_excerpt(); ?></div>
                            <?php endif; ?>

                            <a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">More</a>
                        </div>

                    </div>
                <?php endwhile;?>
            </div>
            <?php wp_reset_query(); ?>
        </div>
    </section>

<?php endif; ?>
