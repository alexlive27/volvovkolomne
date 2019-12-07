<?php
/**
 * The Header for our theme.
 * Displays all of the <head> section and everything up till <div id="wrap">
 *
 * @package Swell Lite
 * @since Swell Lite 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php echo bloginfo( 'pingback_url' ); ?>">

	<!-- виджет из вк -->
	<script type="text/javascript" src="https://vk.com/js/api/openapi.js?162"></script>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<!-- BEGIN #wrapper -->
	<div id="wrapper">

		<!-- BEGIN .container -->
		<div class="container">

			<?php if ( has_nav_menu( 'fixed-menu' ) ) { ?>

				<!-- BEGIN #navigation -->
				<nav id="navigation" class="navigation-main swell-navigation-top fixed-nav clearfix" role="navigation">

					<button class="menu-toggle swell-menu-toggle"><i class="fa fa-bars"></i></button>

					<?php
					wp_nav_menu( array(
						'theme_location' 		=> 'fixed-menu',
						'title_li' 					=> '',
						'depth' 						=> 4,
						'container_class' 	=> '',
						'menu_class'      	=> 'menu',
					)
				);
				?>

				<!-- END #navigation -->
			</nav>

		<?php } ?>

		<!-- BEGIN #header -->
		<div id="header">

			<?php $header_image = get_header_image(); if ( ! empty( $header_image ) ) { ?>

				<div id="custom-header" style="background-image: url(<?php header_image(); ?>);">

					<?php get_template_part( 'content/logo', 'title' ); ?>

					<img class="hide-img" src="<?php header_image(); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" alt="<?php echo esc_attr( get_bloginfo() ); ?>" />

				</div>

			<?php } else { ?>

				<div id="custom-header" class="non-active">

					<div class="title-desc">
						<?php get_template_part( 'content/logo', 'title' ); ?>
					</div>
					
					<!-- begin popup -->

					<div class="feedback col-md-6">
						<p class="tel"><a href="tel:89854200340" class="tel_link">+7 (985) 420-03-40</a></p>
						<button type="button" class="swell-btn-feedback" class="hidden">
							Позвоните нам
						</button>
						</div>

						<!-- end popup -->
					</div>
					

				</div>

			<?php } ?>

			<!-- END #header -->
		</div>

		<?php if ( has_nav_menu( 'main-menu' ) ) { ?>

			<!-- BEGIN #navigation -->
			<nav id="navigation" class="navigation-main swell-navigation-main clearfix" role="navigation">

				<?php if ( ! has_nav_menu( 'fixed-menu' ) ) { ?>
					<button class="menu-toggle"><i class="fa fa-bars"></i></button>
				<?php } ?>

				<?php
				wp_nav_menu( array(
					'theme_location' 		=> 'main-menu',
					'title_li' 					=> '',
					'depth' 						=> 4,
					'container_class' 	=> '',
					'menu_class'      	=> 'menu',
				)
			);
			?>

			<!-- END #navigation -->
		</nav>

	<?php } ?>
