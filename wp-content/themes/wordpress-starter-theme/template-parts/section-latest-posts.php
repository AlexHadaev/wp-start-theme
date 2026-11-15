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
            <div class="section-heading section-heading--center">
                <p class="eyebrow">Journal</p>
                <h2>Ideas, stories, and lessons from the studio.</h2>
            </div>

            <div class="post-block">
                <?php while ($posts->have_posts()) : $posts->the_post();
                    global $post;
                    $img = get_the_post_thumbnail($post->ID);
                    $excerpt = has_excerpt() ? get_the_excerpt() : wp_trim_words( get_the_content(), 18 );
                ?>
                    <article class="post-item item">
                        <div class="item-img">
                            <?php echo $img ?: '<img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200&q=80" alt="" />'; ?>
                        </div>

                        <div class="item-text">
                            <?php if (get_the_title()) : ?>
                                <h3 class="item-title">
                                    <a href="<?php the_permalink($post->ID); ?>"><?php the_title(); ?></a>
                                </h3>
                            <?php endif; ?>

                            <?php if ($excerpt) : ?>
                                <div class="excerpt"><?php echo esc_html( $excerpt ); ?></div>
                            <?php endif; ?>

                            <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">Read article</a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            <?php wp_reset_postdata(); ?>
        </div>
    </section>
<?php endif; ?>