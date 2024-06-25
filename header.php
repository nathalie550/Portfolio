<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://kit.fontawesome.com/9ce144fead.js" crossorigin="anonymous"></script>
    </script>

    <title>Portfolio</title>
    <?php wp_head(); ?>
</head>

<div class="global">
    <header>
        <nav>
            <div class="header-portfolio">
                <img src="<?php echo get_stylesheet_directory_uri() . '/images/Logo-wp.png'; ?> " alt="photo de mon logo">
                <h3 class="title-portfolio glow">Portfolio</h3>
                <?php wp_nav_menu([
                    'theme_location' => 'header-menu',
                    'container' => false,
                    'menu_class' => 'liste menu'
                ])     ?>
            </div>
        </nav>
    </header>