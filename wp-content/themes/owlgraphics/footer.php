<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package owlGraphics
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">
        <div class="site-info">
            <ul>
                <li><a href="#">Mentions légales</a></li>
                <a class="no-link" href="<?php bloginfo('home'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/owl.png"></a>
                <li>® owlGraphics - 2016</li>
            </ul>
        </div><!-- .site-info -->
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
