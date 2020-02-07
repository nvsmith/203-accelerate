<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<section>
				<h1 class="error404">404 Error</h1>
				<h2 class="error404">Page Not Found</h2>
				<a class="button" id="goback-button" onclick="goBack()">
					&larr; Go Back
				</a>
			</section>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<script>
function goBack() {
  window.history.back();
}
</script>

<?php get_footer(); ?>
