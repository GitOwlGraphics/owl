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
		<div class="site-info">
			<ul>
				<li>Mentions légales<li>
				<li><a href="<?php bloginfo('home');?>"><img src="<?php bloginfo('template_url');?>/img/owl.png"></a><li>
				<li>® owlGraphics - 2016<li>
			</ul>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
