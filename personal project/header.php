<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- Top Navigation Bar -->
    <div class="top-nav">
        <div class="container">
            <ul class="nav-links">
                <li><a href="<?php echo home_url(); ?>">Home</a></li>
                <li><a href="<?php echo get_permalink( get_page_by_path( 'shop' ) ); ?>">Shop</a></li>
            </ul>
        </div>
    </div>

    <header>
        <div class="container">
            <nav>
                <div class="logo">
                    <?php if ( has_custom_logo() ) {
                        the_custom_logo();
                    } else {
                        echo '<h1>' . get_bloginfo( 'name' ) . '</h1>';
                    } ?>
                </div>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'nav-menu',
                ) );
                ?>
                <div class="menu-toggle">☰</div>
            </nav>
        </div>
    </header>