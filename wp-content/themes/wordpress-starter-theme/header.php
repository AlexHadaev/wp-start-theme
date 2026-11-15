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

        <nav class="main-nav menu-mobile" role="navigation" aria-label="Main navigation">
            <a href="#" id="menu_button_close" class="menu-button-close" aria-label="Close menu">
                <span class="icon icon-close">×</span>
            </a>
            <?php
            if ( has_nav_menu( 'menu-1' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'menu-1',
                    'menu_class' => 'main-nav__list menu',
                    'container' => false,
                    'fallback_cb' => false,
                ) );
            } else {
                echo '<ul class="main-nav__list menu">'
                    . '<li><a href="#">Sofas</a></li>'
                    . '<li><a href="#">Modular Sofas</a></li>'
                    . '<li><a href="#">Chairs</a></li>'
                    . '<li><a href="#">Footstools</a></li>'
                    . '<li><a href="#">Samples</a></li>'
                    . '</ul>';
            }
            ?>
        </nav>

        <div class="header-actions">
            <a class="button button-secondary header-cta" href="#contact">Book a consultation</a>
            <a href="#" id="menu_button" class="menu-button" aria-label="Open menu">
                <span class="icon icon-hamburger">☰</span>
            </a>
        </div>
    </div>
</header>