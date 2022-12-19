<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shockwaves
 */

?>


<footer>
    <div class="container">
        <div class="block">© shockwaves</div>
        <?php if(get_theme_mod('email') != ''){ ?>
            <a href="mailto: <?php echo get_theme_mod('email'); ?>" target="_blank" class="block"><?php echo get_theme_mod('email'); ?></a>
        <?php } ?>
        <a href="#" target="_blank" class="block">Terms & Conditions</a>
    </div>
</footer>


<?php wp_footer(); ?>

</body>
</html>
