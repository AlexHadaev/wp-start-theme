	<footer class="main-footer" role="contentinfo">
        <div class="container page-footer__container">
            <div class="page-footer__columns">
                <?php
                $footer_sections = array(
                    'footer-shop' => esc_html__( 'Shop', 'theme' ),
                    'footer-about' => esc_html__( 'Repose', 'theme' ),
                    'footer-support' => esc_html__( 'Support', 'theme' ),
                );

                foreach ( $footer_sections as $location => $title ) :
                    $menu_location = 'footer-shop' === $location && ! has_nav_menu( $location ) && has_nav_menu( 'menu-footer' )
                        ? 'menu-footer'
                        : $location;

                    if ( ! has_nav_menu( $menu_location ) ) {
                        continue;
                    }
                    ?>
                    <section class="footer-column">
                        <h2 class="footer-column__title"><?php echo esc_html( $title ); ?></h2>
                        <nav aria-label="<?php echo esc_attr( $title ); ?>">
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => $menu_location,
                                'menu_class' => 'footer-nav__list',
                                'container' => false,
                                'fallback_cb' => false,
                            ) );
                            ?>
                        </nav>
                    </section>
                <?php endforeach; ?>

                <section class="footer-column footer-column--contact">
                    <h2 class="footer-column__title"><?php esc_html_e( 'Need a hand?', 'theme' ); ?></h2>
                    <p><?php esc_html_e( 'Our team can help you find the right piece for your home.', 'theme' ); ?></p>
                    <a class="footer-contact-link" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">
                        <?php esc_html_e( 'Book a consultation', 'theme' ); ?>
                    </a>
                </section>
            </div>

            <div class="page-footer__bottom">
                <p class="copyright">&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'theme' ); ?></p>
                <?php if ( has_nav_menu( 'footer-shop' ) && has_nav_menu( 'menu-footer' ) ) : ?>
                    <nav class="footer-nav footer-nav--bottom" aria-label="<?php esc_attr_e( 'Footer legal links', 'theme' ); ?>">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'menu-footer',
                            'menu_class' => 'footer-nav__list',
                            'container' => false,
                            'fallback_cb' => false,
                        ) );
                        ?>
                    </nav>
                <?php endif; ?>
            </div>
        </div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
