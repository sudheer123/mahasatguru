<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
?>
			</div>
		</div>
	</div><!-- #content -->

	<?php do_action('sydney_before_footer'); ?>

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

    <a class="go-top"><i class="fa fa-angle-up"></i></a>
		
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
		<center>
			<a href="<?php echo esc_url( __( '', 'sydney' ) ); ?>"><?php printf( __( 'Copyright © 2018, MahaSatguru', 'sydney' ), 'WordPress' ); ?></a>
				<img class="footerimg" src="https://mahasatguru.com/wp-content/themes/sydney/images/logo.png" width="100px" height="100px">
				<?php printf( __( 'For any Suggestions or Queries Please Contact: <a href="https://mahasatguru.com/"><span style="color:#7EBA00;">mahasatguru.in@gmail.com</span></a> ', 'sydney' ), '', '' ); ?>
		<center>		
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

	<?php do_action('sydney_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
