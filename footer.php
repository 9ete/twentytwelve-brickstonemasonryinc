<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->

	<section class='prefoot-meta'>
		<div class='pfmeta-one pfmeta-block'>
			Call Us: <?php echo do_shortcode( '[phonenumber]' ); ?>
		</div>

		<div class='pfmeta-two pfmeta-block'>
			Email Us: <a href='mailto:ashley@brickstonemasonry.com'>ashley@brickstonemasonry.com</a>
		</div>

		<div class='pfmeta-three pfmeta-social pfmeta-block'>
			<a href='http://facebook.com/brickstonemasonry'>
				<img src='https://www.facebookbrand.com/img/assets/asset.f.logo.lg.png' width='30' />
			</a>
			<a href='http://instagram.com/brickstonemasonry'>
				<img src='https://fbcdn-dragon-a.akamaihd.net/hphotos-ak-xpa1/t39.2365-6/851582_417171855069447_55288290_n.png' width='30' />
			</a>
			<a href='http://linkedin.com/brickstonemasonry'>
				<img src='https://www.facebookbrand.com/img/assets/asset.f.logo.lg.png' width='30' />
			</a>
		</div>
	</section>

</div><!-- #page -->


<footer id="colophon" role="contentinfo">
	<div class="site-info">
		
	</div><!-- .site-info -->
</footer><!-- #colophon -->

<?php wp_footer(); 

/*

<?php do_action( 'twentytwelve_credits' ); ?>
		<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a>

*/
?>
</body>
</html>