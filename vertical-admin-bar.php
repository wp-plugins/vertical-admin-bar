<?php
/*
Plugin Name: Vertical Admin Bar
Plugin URI: http://www.gabsoftware.com/products/scripts/vertical-admin-bar
Description: Displays the admin bar vertically on the left of the screen on the blog front-end
Version: 1.0.0
Author: Gabriel Hautclocq
Author URI: http://www.gabsoftware.com/
*/

function vab_stylesheet()
{
	if( ! is_admin() )
	{
		$vab_admin_bar_height = apply_filters( 'vab_admin_bar_height', 740 );

		?>

		<style type="text/css">

			/* fixes html margins */
			html {
				margin-top: 0px !important;
				margin-left: 28px !important;
			}

			/* rotates the whole admin bar */
			#wpadminbar {
				top: <?php echo $vab_admin_bar_height; ?>px;
				width: <?php echo $vab_admin_bar_height; ?>px;
				margin-bottom: -28px;

				-o-transform: rotate(-90deg);
				-o-transform-origin: 0% 0%;

				-webkit-transform: rotate(-90deg);
				-webkit-transform-origin: 0% 0%;

				-moz-transform: rotate(-90deg);
				-moz-transform-origin: 0% 0%;

				-ms-transform: rotate(-90deg);
				-ms-transform-origin: 0% 0%;

				transform: rotate(-90deg);
				transform-origin: 0% 0%;

				progid:DXImageTransform.Microsoft.BasicImage(rotation=3); /* 270° */
			}

			/* rotates the menus back to normal */
			#wpadminbar.nojs li:hover > .ab-sub-wrapper, #wpadminbar li.hover > .ab-sub-wrapper {
				-o-transform: rotate(90deg);

				-webkit-transform: rotate(90deg);

				-moz-transform: rotate(90deg);

				-ms-transform: rotate(90deg);

				transform: rotate(90deg);

				progid:DXImageTransform.Microsoft.BasicImage(rotation=1); /* 90° */
			}

			/* left menus positioning */
			#wpadminbar.nojs li:hover > .ab-sub-wrapper, #wpadminbar li.hover > .ab-sub-wrapper {
				-o-transform-origin: 0% 0%;
				-webkit-transform-origin: 0% 0%;
				-moz-transform-origin: 0% 0%;
				-ms-transform-origin: 0% 0%;
				transform-origin: 0% 0%;
				left: 100%;
			}

			/* right menus positioning */
			#wpadminbar .ab-top-secondary .menupop .ab-sub-wrapper {
				-o-transform-origin: 100% 0%;

				-webkit-transform-origin: 100% 0%;

				-moz-transform-origin: 100% 0%;

				-ms-transform-origin: 100% 0%;

				transform-origin: 100% 0%;

				margin-top: 266px !important;
				right: 1px;
			}

			/* fixes for Opera */
			@media all and (-webkit-min-device-pixel-ratio:10000), not all and (-webkit-min-device-pixel-ratio:0) {
				/* fix for right menus not being clickable */
				#wp-admin-bar-top-secondary .menupop .ab-sub-wrapper, #wp-admin-bar-top-secondary .shortlink-input {
					position: fixed;
				}

				/* fix for right menus positioning */
				#wpadminbar .ab-top-secondary .menupop .ab-sub-wrapper {
					right: 34px;
				}
			}

		</style>

		<!--[if lt IE 9]>
			<style type="text/css">
				/* rotates the whole admin bar */
				#wpadminbar {
					progid:DXImageTransform.Microsoft.BasicImage(rotation=3); /* 270° */
				}

				/* rotates the menus back to normal */
				#wpadminbar.nojs li:hover > .ab-sub-wrapper, #wpadminbar li.hover > .ab-sub-wrapper {
					progid:DXImageTransform.Microsoft.BasicImage(rotation=1); /* 90° */
				}
			</style>
		<![endif]-->

		<?php
	}
}
add_action('wp_head', 'vab_stylesheet');

function vab_remove_admin_bar_css()
{
	if( ! is_admin() )
	{
		add_theme_support( 'admin-bar', array( 'callback' => '__return_false') );
	}
}
add_action( 'after_setup_theme', 'vab_remove_admin_bar_css', 99 );

?>