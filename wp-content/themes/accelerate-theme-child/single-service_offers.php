<?php
/**
 * The template for displaying service offers
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
			<?php while (have_posts()) : the_post(); ?>
				<h1>This is my service offers page</h1>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop.?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
