<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dpstarter
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        <nav class="social-menu">
		<?php wp_nav_menu( array( 'theme_location' => 'social' ) ); ?>
        </nav> <!-- .social-menu -->

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'dpstarter' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'dpstarter' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'dpstarter' ), 'dpstarter', '<a href="https://mor10.com/courses" rel="designer">Morten Rand-Hendriksen</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
