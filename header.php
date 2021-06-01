<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Top_Dog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">

		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'top-dog'); ?></a>

		<header id="masthead" class="site-header">

			<div class="nav-wrapper">

				<div class="navbar">

					<div id="open-menu" class="burger-wrapper">

						<?php echo file_get_contents(get_template_directory() . '/assets/images/burger.svg'); ?>

					</div>

					<div id="logo-wrapper">

						<?php if (get_field('header_logo', 'option')) : ?>

							<a href="<?php echo get_home_url(); ?>">

								<?php echo file_get_contents(get_field('header_logo', 'option')); ?>

							</a>

						<?php endif; ?>

					</div>

					<nav id="site-navigation" class="main-navigation">

						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>

					</nav><!-- #site-navigation -->


				</div>

			</div>

			<div class="mobile-menu hide-menu">

				<div class="mobile-menu-header">

					<div id="close-menu">

						<?php echo file_get_contents(get_template_directory() . '/assets/images/menu-close.svg'); ?>

					</div>

					<div class="mobile-menu-logo-wrapper">

						<?php echo file_get_contents(get_template_directory() . '/assets/images/mobile-menu-logo.svg'); ?>

					</div>


				</div>

				<nav id="mobile-navigation" class="mobile-navigation">

					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>

				</nav><!-- #site-navigation -->

			</div>

			<?php if (is_front_page()) : ?>

				<?php $header_image = get_field('header_image'); ?>

				<div class="top-dog-hero-section" style="background: url('<?php echo esc_url($header_image['url']); ?>') bottom center / cover no-repeat;">

					<?php the_field('header_title'); ?>

					<div class="discover-more">

						<span><?php _e('Discover More', 'top-dog'); ?></span>

						<span class="dm-line">|</span>

					</div>

					<div class="curve">
					</div>

					<div class="curve-mobile"></div>

				</div>

			<?php endif; ?>

		</header><!-- #masthead -->