<?php
	$mess_arr 	 = array();
	$ebody_class = null;
	$mess_arr = get_custom_login_code();
	if (!empty($mess_arr[0])) $ebody_class = 'error';
	$mt_options = mt_get_plugin_options(true);
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php get_page_title(esc_attr($mess_arr[0])); ?>
	<meta name="viewport" content="width=device-width, user-scalable=no, maximum-scale=1, initial-scale=1, minimum-scale=1">
	<meta property="og:title" content="<?php bloginfo('name'); ?>"/>
	<meta property="og:type" content="Maintenance"/>
	<meta property="og:url" content="<?php echo site_url(); ?>"/>
	<meta property="og:description" content="<?php bloginfo('description'); ?>"/>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="icon" type="image/png" href="/wp-content/plugins/maintenance/load/images/favicon.png" />
	<?php do_action('load_custom_scripts'); ?>
	<?php do_action('options_style'); ?>
	<?php do_action('add_single_backstretch_background'); ?>
	<?php do_action('add_gg_analytics_code'); ?>
</head>
<body <?php body_class('maintenance ' . $ebody_class); ?>>

	<div class="main-container">

		<div id="wrapper">

			<div id="content" class="site-content">

				<div id="fond" class="layer" data-depth="0.00">
          <!-- Chargement du landscape -->
					<img src="/wp-content/plugins/maintenance/load/images/test/landscape.png">
				</div>

				<div id="moon" class="layer" data-depth="0.05">
          <!-- Chargement de la lune + chouette -->
					<img src="/wp-content/plugins/maintenance/load/images/test/owlMoon.png">
				</div>

				<div id="texte" class="layer" data-depth="0.05">
          <!-- Chargement de la lune + chouette -->
					<img src="/wp-content/plugins/maintenance/load/images/test/texte.png">
				</div>

			</div> <!-- end content -->

			<div class="center">
					<footer role="contentinfo">
							<?php do_action('footer_section'); ?>
					</footer>
			</div>

		</div> <!-- end wrapper -->

	</div> <!-- end main-container -->


	<?php do_action('after_main_container'); ?>
	<?php if (isset($mt_options['is_login'])) { ?>

		<div class="login-form-container">
			<?php do_login_form(esc_attr($mess_arr[3]), esc_attr($mess_arr[1]), esc_attr($mess_arr[2])); ?>
			<?php do_button_login_form(); ?>
		</div>
	<?php } ?>
	<!-- Scripts -->
	<script src="/wp-content/plugins/maintenance/load/js/deploy/parallax.js"></script>
	<script>
	// effet sur chouette et landscape(a 0)
	var content	 = document.getElementById('content');
	var parallax = new Parallax(content);

	// effet sur le texte
	var textContent	 = document.getElementById('textContent');
	var textContent = new Parallax(textContent);
	</script>
</body>
</html>
