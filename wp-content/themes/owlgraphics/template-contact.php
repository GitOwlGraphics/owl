<?php
/* Template Name: Contact */
get_header(); ?>
<div id="content" class="pageContent">
	<section id="overAll">
		<div class="container">
			<?php
			// TO SHOW THE PAGE CONTENTS
			while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
			<div class="entry-content-page">
				<?php the_content(); ?> <!-- Page Content -->
			</div><!-- .entry-content-page -->

			<?php
		endwhile; //resetting the page loop
		wp_reset_query(); //resetting the page query
		?>
	</div>
</section>
</div>

<?php
get_footer();
?>
