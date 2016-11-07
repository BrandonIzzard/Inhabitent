<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Theme
 */
?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
						<div class ="footer-left"><!--contact & business hours-->
								<div class="contact-us">
									<h3>Contact Us</h3>
										<p><i class="fa fa-envelope" aria-hidden="true"></i> info@inhabitent.com</p>
										<p><i class="fa fa-phone" aria-hidden="true"></i> 778-456-7891</p>
										<p><i class="fa fa-facebook-square" aria-hidden="true"></i> <i class="fa fa-twitter-square" aria-hidden="true"></i> <i class="fa fa-google-plus-square" aria-hidden="true"></i></p>
								</div>
								<div class="business-hours">
									<h3>Business Hours</h3>
										<p>Monday - Friday: 9am to 5pm </p>
										<p>Saturday: 10am to 2pm</p>
										<p>Sunday: Closed</p>
								</div>
								<div class = "footer-logo"><!--logo-->
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="logo">
						<img src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-text.svg'; ?>" class="logo" alt="Inhabitent logo" />
					</a>
							</div><!-- end of footer-logo -->
							</div><!--end of footer left -->
							
							<div class = "footer-bottom"><!---copyright-->
								<p><span>Copyright &#169 Inhabitent</p>
								</div><!-- end of footer-bottom -->
					<div>
						
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>