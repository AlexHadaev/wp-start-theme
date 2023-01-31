<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <?php get_template_part( 'template-parts/head' ); ?>
</head>

<body <?php body_class("page-body"); ?>>
<header class="main-header">
    <div class="container main-header-container">
        <!-- logo from customizer.php -->
        <div class="logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"  rel="home" title="<?php bloginfo( 'name' ); ?>">
                <?php if(get_option('custom_theme_options')['logo_image']): ?>
                    <img src="<?php echo get_option('custom_theme_options')['logo_image']; ?>" alt="">
                <?php else : ?>
                    <img src="<?php bloginfo('template_url' ); ?>/assets/images/logo-new.png" alt="">
                <?php endif; ?>
            </a>
        </div>
        <a href="" id="menu_button" class="menu-button ">
            <span class="icon icon-hamburger"></span>
        </a>
        <nav class="main-nav  menu-mobile" role="navigation">
            <a href="" id="menu_button_close" class="menu-button-close">
                <span class="icon icon-close"></span>
            </a>
            <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_class' => 'main-nav__list menu', 'container' => false ) ); ?>
        </nav>
    </div>

</header>
