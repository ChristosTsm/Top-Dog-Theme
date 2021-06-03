<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Top_Dog
 */

?>

<footer id="colophon" class="site-footer">

	<div class="footer-menu-wrapper">

		<div class="footer-menu footer-menu-left">

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer-menu-left',
					'menu_id'        => 'footer-menu-left',
				)
			);
			?>

		</div>

		<div class="footer-logo">

			<?php $footer_logo = get_field('footer_logo', 'option'); ?>

			<a href="<?php home_url(); ?>">

				<?php echo file_get_contents($footer_logo) ?>

			</a>

		</div>

		<div class="footer-menu footer-menu-right">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer-menu-right',
					'menu_id'        => 'footer-menu-right',
				)
			);
			?>
		</div>

	</div>

	<div class="footer-bottom-bar">

		<p>&copy; <?php _e('Copyright 2021 top dog.All rights reserved.') ?></p>

		<p><?php _e('Designed by ') ?><a target="_blank" rel="noopener" href="https://net22.gr">Net22</a></p>

	</div>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>