<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */
?>


<footer id="myfooter" class="site-footer">
    <div class="pied-de-page">
        <img src="<?= get_stylesheet_directory_uri() . '/images/in.png'; ?>" style="width:70px;height:50px;" alt="photo linkedin">
        <a href="https://www.linkedin.com/in/nathalie-jean-315311316/" class="monButtonLinkedin">Lien</a>

        <img src="<?= get_stylesheet_directory_uri() . '/images/github.png'; ?>" style="width:70px;height:50px;" alt="photo Github">
        <a href="https://github.com/nathalie550/Portfolio/" class="monButtonGithub">Lien</a>

        <?php
        if (has_nav_menu('footer-menu')) :

            wp_nav_menu(array(
                'theme_location' => 'footer-menu',
                'menu_class' => 'my-footer-menu',
            ));
        endif;
        ?>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>