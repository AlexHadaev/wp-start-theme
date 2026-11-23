<?php get_header(); ?>

<main id="main" class="page-main page-404-main" role="main">
    <section class="container error-404 page-404 not-found">
        <p class="eyebrow"><?php esc_html_e( 'A little detour', 'theme' ); ?></p>
        <h1 class="page-title">404</h1>
        <p class="page-404__message"><?php esc_html_e( 'Oops! That page can’t be found.', 'theme' ); ?></p>
        <a class="button button-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <?php esc_html_e( 'Back to home', 'theme' ); ?>
        </a>
        <div class="page-search">
            <p><?php esc_html_e( 'Or search for what you need:', 'theme' ); ?></p>
            <?php get_search_form(); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
