<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Pixeltemplate
 * @since Pixeltemplate 1.0
 */
?>

</div>
<!-- .main-content-inner -->
</div>
<!-- .main_inner -->
</div>
<!-- #main -->

<footer id="colophon" class="site-footer" role="contentinfo">

	<div class="footer-middle">
		<div class="theme-container">
			<?php get_sidebar('footer'); ?>	
		</div>
	</div>

	<div class="footer-bottom">
		<div class="theme-container">
				<div class="footer-bottom-left">
	
					
					<div class="site-info">  <?php echo esc_attr_e( ' Designed by', '
						Evessi' ); ?> <a href="#" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php echo esc_html(stripslashes(get_option('wntr_footer_slog')));?>
					</a>
					<?php echo esc_attr_e( 'All rights reserved.', '
						Evessi' ); ?>
					<?php do_action( 'wntr_credits' ); ?>
					</div>

					<?php if ( is_active_sidebar( 'footer-bottom-widget-area' ) ) : ?>
					<?php dynamic_sidebar( 'footer-bottom-widget-area' ); ?>
					<?php endif; ?>
					
					
				</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div>
<!-- #page -->
<?php wntr_go_top(); ?>
<?php wntr_get_widget('before-end-body-widget'); ?>
<?php wp_footer(); ?>
</body>
</html>