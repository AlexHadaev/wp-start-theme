<?php
if ( is_home() && (int) get_option( 'page_for_posts' ) > 0 ) {
    get_header();
    ?>
    <main id="main" class="page-main blog-main" role="main">
        <div class="container">
            <header class="inner-page-heading">
                <p class="eyebrow">Journal</p>
                <h1><?php echo esc_html( get_the_title( (int) get_option( 'page_for_posts' ) ) ?: __( 'Journal', 'theme' ) ); ?></h1>
                <p class="inner-page-lead"><?php esc_html_e( 'Notes from the workshop and the rooms we live in.', 'theme' ); ?></p>
            </header>

            <?php if ( have_posts() ) : ?>
                <div class="blog-grid">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'template-parts/content', 'blog' ); ?>
                    <?php endwhile; ?>
                </div>

                <?php get_template_part( 'template-parts/paginate', '', array( 'container' => '', 'total' => $wp_query->max_num_pages ) ); ?>
            <?php else : ?>
                <div class="blog-empty-state">
                    <h2><?php esc_html_e( 'Nothing on the journal just yet.', 'theme' ); ?></h2>
                    <p><?php esc_html_e( 'Please check back soon for notes from the workshop.', 'theme' ); ?></p>
                </div>
            <?php endif; ?>
        </div>
    </main>
    <?php
    get_footer();
    return;
}

get_header();
?>

<main id="main" class="page-main page-home" role="main">
    <section class="hero hero-home">
        <div class="container hero__inner">
            <div class="hero__content">
                <p class="eyebrow">A better way to sit</p>
                <h1>Thoughtful furniture for rooms that live well.</h1>
                <p class="hero__lead">Low-slung sofas, sculptural stools and tactile pieces that feel deeply lived-in from day one — designed to be shared, stretched across, and kept for years.</p>

                <div class="hero__actions">
                    <a class="button button-primary" href="#shop">Shop the collection</a>
                    <a class="button button-secondary" href="#journal">View journal</a>
                </div>

                <ul class="hero__stats">
                    <li><strong>4</strong><span>colourways</span></li>
                    <li><strong>7-day</strong><span>home trial</span></li>
                    <li><strong>Free</strong><span>shipping</span></li>
                </ul>
            </div>

            <div class="hero__visual" aria-label="Featured product preview">
                <div class="hero-card hero-card--featured">
                    <div class="hero-card__media">
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/picture/solene-03.webp')); ?>" alt="Solene sofa in cream boucle in a bright living room">
                    </div>
                    <div class="hero-card__content">
                        <div>
                            <span class="label">New arrival</span>
                            <h3>Solène</h3>
                        </div>
                        <p>Our widest seat yet, with a loose back cushion and a sculpted profile designed for long afternoons.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="services" id="shop">
        <div class="container">
            <div class="section-heading">
                <p class="eyebrow">The essentials</p>
                <h2>Made to sit in, stretch out in, and keep for years.</h2>
            </div>

            <div class="services__grid">
                <article class="service-card">
                    <div class="icon-box">01</div>
                    <h3>Comfort-first design</h3>
                    <p>Low profiles, soft edges, and generous proportions built for slow days and long conversations.</p>
                </article>

                <article class="service-card">
                    <div class="icon-box">02</div>
                    <h3>Natural materials</h3>
                    <p>Textured bouclé, tactile wool, and washed finishes chosen to age beautifully over time.</p>
                </article>

                <article class="service-card">
                    <div class="icon-box">03</div>
                    <h3>Home trial</h3>
                    <p>Order a swatch box or try a piece at home for a week before committing to your final choice.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="showcase" id="work">
        <div class="container">
            <div class="section-heading section-heading--split">
                <div>
                    <p class="eyebrow">Bestsellers</p>
                    <h2>Furniture that settles into a room and feels instantly familiar.</h2>
                </div>
                <a href="#contact" class="text-link">Shop all seating</a>
            </div>

            <div class="showcase__grid">
                <article class="showcase-card showcase-card--large">
                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/picture/solene-01-1.jpg')); ?>" alt="Solène sofa in cream bouclé">
                    <div class="showcase-card__body">
                        <p class="eyebrow muted">Bestseller</p>
                        <h3>Solène sofa</h3>
                        <p>Low, deep and beautifully relaxed — with room for everyone and a silhouette that feels soft at the edges.</p>
                    </div>
                </article>

                <article class="showcase-card">
                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/picture/marchetti-01.webp')); ?>" alt="Marchetti two-seater sofa in charcoal fabric">
                    <div class="showcase-card__body">
                        <p class="eyebrow muted">Compact comfort</p>
                        <h3>Marchetti</h3>
                        <p>Two-seater sofa with a crisp profile and an easy, lived-in sit.</p>
                    </div>
                </article>

                <article class="showcase-card">
                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/picture/roundmodular-01.webp')); ?>" alt="Round-edged modular sofa in cream boucle">
                    <div class="showcase-card__body">
                        <p class="eyebrow muted">Modular</p>
                        <h3>Round modular</h3>
                        <p>Flexible layouts, softened corners, and a generous footprint for slow living.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="process">
        <div class="container">
            <div class="section-heading">
                <p class="eyebrow">How it works</p>
                <h2>Simple, considered and made to suit the way your home really feels.</h2>
            </div>

            <div class="process__grid">
                <div class="step">
                    <span>01</span>
                    <h3>Choose your fabric</h3>
                    <p>Start with a swatch box and see the colours in your own light before you order anything.</p>
                </div>
                <div class="step">
                    <span>02</span>
                    <h3>Tailor the fit</h3>
                    <p>Pick your dimensions, finish and configuration to make the piece feel like it belongs in the room.</p>
                </div>
                <div class="step">
                    <span>03</span>
                    <h3>Delivered home</h3>
                    <p>We ship straight to your door, and you can keep it for a week before deciding if it is yours.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-banner" id="contact">
        <div class="container cta-banner__inner">
            <div>
                <p class="eyebrow" style="color: rgba(255,255,255,.75);">The workshop, London</p>
                <h2>Made with softness, texture and real life in mind.</h2>
            </div>
            <a class="button button-primary" href="mailto:hello@repose.example">Book a consultation</a>
        </div>
    </section>

    <section class="grid-posts latest-posts" id="journal">
        <div class="container">
            <div class="section-heading section-heading--center">
                <p class="eyebrow">Journal</p>
                <h2>Notes from the workshop and the rooms we live in.</h2>
            </div>

            <div class="post-block">
                <article class="post-item item">
                    <div class="item-img">
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/picture/photo-1505693416388-ac5ce068fe85.avif')); ?>" alt="modern living room interior" />
                    </div>
                    <div class="item-text">
                        <h3 class="item-title"><a href="#">How to style a low sofa in a bright room</a></h3>
                        <div class="excerpt">The key is texture, contrast and keeping the palette calm enough for everything to settle.</div>
                        <a href="#" rel="bookmark">Read article</a>
                    </div>
                </article>

                <article class="post-item item">
                    <div class="item-img">
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/picture/photo-1494526585095-c41746248156.avif')); ?>" alt="neutral home interior" />
                    </div>
                    <div class="item-text">
                        <h3 class="item-title"><a href="#">Why boucle works in real homes</a></h3>
                        <div class="excerpt">It softens corners, catches light and hides the signs of everyday life without looking tired.</div>
                        <a href="#" rel="bookmark">Read article</a>
                    </div>
                </article>

                <article class="post-item item">
                    <div class="item-img">
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/picture/photo-1484154218962-a197022b5858.avif')); ?>" alt="home styling inspiration" />
                    </div>
                    <div class="item-text">
                        <h3 class="item-title"><a href="#">Three ways to build a room around one statement chair</a></h3>
                        <div class="excerpt">From oak tables to wool rugs, the right pairing gives a room both calm and personality.</div>
                        <a href="#" rel="bookmark">Read article</a>
                    </div>
                </article>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>