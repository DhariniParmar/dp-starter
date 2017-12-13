<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all the content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mwstarter
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
	<nav class="social-menu">
	<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-2'
				) );
			?>
			</nav>
			
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
