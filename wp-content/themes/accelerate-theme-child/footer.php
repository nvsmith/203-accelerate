<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer clearfix" role="contentinfo">
			<div class="site-info">
				<div class="site-description">
					<p><?php bloginfo('description'); ?></p>
					<a href="<?php echo site_url(); ?>">
						<p>&copy; <?php bloginfo('title'); ?>, Inc</p>
					</a>

					<div class="myhomepage-link">
            <a href="https://nvsmith.com">&#8617; Return to nvsmith.com</a>
          </div><!-- end .myhomepage-link -->
				</div>

				<nav class="social-media-navigation" role="navigation">
					<?php wp_nav_menu(array( 'theme_location' => 'social-media', 'menu_class' => 'social-media-menu' )); ?>

					<div class="social-wrapper">
						<div class="social-icons">
							<a href="http://twitter.com/" target="_blank">
								<i class="fab fa-twitter"></i>
								<span class="screen-reader-text">Twitter</span>
							</a>

							<a href="http://facebook.com" target="_blank">
							<i class="fab fa-facebook"></i>
								<span class="screen-reader-text">Facebook</span>
							</a>

							<a href="http://linkedin.com" target="_blank">
								<i class="fab fa-linkedin"></i>
								<span class="screen-reader-text">LinkedIn</span>
							</a>
						</div><!-- end social-icons -->
					</div><!-- end social-wrapper -->
				</nav>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->

	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
