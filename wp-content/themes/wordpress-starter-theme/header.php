<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <?php get_template_part( 'template-parts/head' ); ?>
</head>

<body <?php body_class('page-body'); ?>>
<header class="main-header">
    <div class="container main-header-container">
        <div class="logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php bloginfo( 'name' ); ?>">
                <?php if ( ! empty( get_option('custom_theme_options')['logo_image'] ) ) : ?>
                    <img src="<?php echo esc_url( get_option('custom_theme_options')['logo_image'] ); ?>" alt="<?php bloginfo( 'name' ); ?>">
                <?php else : ?>
                    <span class="brand-wordmark"><?php bloginfo( 'name' ); ?></span>
                <?php endif; ?>
            </a>
        </div>

        <?php
        $blog_page_id = absint( get_option( 'page_for_posts' ) );
        $blog_page = $blog_page_id ? get_post( $blog_page_id ) : null;

        if ( ! $blog_page || 'publish' !== $blog_page->post_status ) {
            $blog_pages = get_pages( array(
                'meta_key' => '_wp_page_template',
                'meta_value' => 'blog.php',
                'post_status' => 'publish',
                'number' => 1,
            ) );
            $blog_page = $blog_pages ? $blog_pages[0] : null;
        }

        $contact_pages = get_pages( array(
            'meta_key' => '_wp_page_template',
            'meta_value' => 'page-contact.php',
            'post_status' => 'publish',
            'number' => 1,
        ) );
        $contact_page = $contact_pages ? $contact_pages[0] : null;

        $primary_menu_links = array(
            array(
                'label' => __( 'Blog', 'theme' ),
                'url' => $blog_page ? get_permalink( $blog_page ) : home_url( '/blog/' ),
                'page_id' => $blog_page ? (int) $blog_page->ID : 0,
            ),
            array(
                'label' => __( 'Contact Us', 'theme' ),
                'url' => $contact_page ? get_permalink( $contact_page ) : home_url( '/contact-us/' ),
                'page_id' => $contact_page ? (int) $contact_page->ID : 0,
            ),
        );

        $append_missing_primary_links = static function ( $items, $args ) use ( $primary_menu_links ) {
            if ( ! isset( $args->theme_location ) || 'menu-1' !== $args->theme_location ) {
                return $items;
            }

            $existing_urls = array();
            if ( preg_match_all( '/href=(["\'])(.*?)\1/i', $items, $matches ) ) {
                foreach ( $matches[2] as $href ) {
                    $href = html_entity_decode( $href, ENT_QUOTES, get_bloginfo( 'charset' ) );
                    $existing_urls[] = untrailingslashit( esc_url_raw( $href ) );
                }
            }

            foreach ( $primary_menu_links as $link ) {
                $has_page = $link['page_id'] && preg_match(
                    '/class=(["\'])[^"\']*\bmenu-item-' . $link['page_id'] . '\b[^"\']*\1/i',
                    $items
                );
                $normalized_url = untrailingslashit( esc_url_raw( $link['url'] ) );

                if ( $has_page || in_array( $normalized_url, $existing_urls, true ) ) {
                    continue;
                }

                $items .= '<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="' . esc_url( $link['url'] ) . '">' . esc_html( $link['label'] ) . '</a></li>';
            }

            return $items;
        };
        ?>

        <nav class="main-nav menu-mobile" role="navigation" aria-label="Main navigation">
            <a href="#" id="menu_button_close" class="menu-button-close" aria-label="Close menu">
                <span class="icon icon-close"></span>
            </a>
            <?php
            if ( has_nav_menu( 'menu-1' ) ) {
                add_filter( 'wp_nav_menu_items', $append_missing_primary_links, 10, 2 );
                wp_nav_menu( array(
                    'theme_location' => 'menu-1',
                    'menu_class' => 'main-nav__list menu',
                    'container' => false,
                    'fallback_cb' => false,
                ) );
                remove_filter( 'wp_nav_menu_items', $append_missing_primary_links, 10 );
            } else {
                echo '<ul class="main-nav__list menu">'
                    . '<li><a href="#">Sofas</a></li>'
                    . '<li><a href="#">Modular Sofas</a></li>'
                    . '<li><a href="#">Chairs</a></li>'
                    . '<li><a href="#">Footstools</a></li>'
                    . '<li><a href="#">Samples</a></li>'
                    . '<li><a href="' . esc_url( $primary_menu_links[0]['url'] ) . '">' . esc_html( $primary_menu_links[0]['label'] ) . '</a></li>'
                    . '<li><a href="' . esc_url( $primary_menu_links[1]['url'] ) . '">' . esc_html( $primary_menu_links[1]['label'] ) . '</a></li>'
                    . '</ul>';
            }
            ?>
        </nav>

        <div class="header-actions">
            <a class="button button-secondary header-cta" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Book a consultation</a>
            <a href="#" id="menu_button" class="menu-button" aria-label="Open menu">
                <span class="icon icon-hamburger"></span>
            </a>
        </div>
    </div>
</header>