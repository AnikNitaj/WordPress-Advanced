<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <nav>
                <?php
                if ( has_nav_menu( 'primary' ) ) {
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'nav-menu',
                    ) );
                } else {
                    ?>
                    <ul class="nav-menu">
                        <li><a href="<?php echo home_url(); ?>">Home</a></li>
                        <li><a href="<?php echo get_permalink( get_page_by_path( 'shop' ) ); ?>">Shop</a></li>
                        <li><a href="<?php echo get_permalink( get_page_by_path( 'about' ) ); ?>">About</a></li>
                    </ul>
                    <?php
                }
                ?>
                <div class="menu-toggle">☰</div>
            </nav>
        </div>
    </header>