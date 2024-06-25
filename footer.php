<footer>
    <div class="myfooter">
        <img src="<?php echo get_stylesheet_directory_uri() . '/images/in.png'; ?> " alt="photo linkelin">
        <img src="<?php echo get_stylesheet_directory_uri() . '/images/mail.png'; ?> " alt="photo email">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'footer-menu',
            'menu_class' => 'my-footer-menu',
        ));    ?>
    </div>

</footer>
</body>

</html>