<?php
/**
* Template Name: About Page Template
*
 * The child template for displaying a custom about page
 *
 * This is the template that displays a template for a custom about page.
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
 				<?php the_content(); ?>
 			<?php endwhile; // end of the loop.?>
 		</div><!-- .main-content -->
 	</div><!-- #primary -->



 <?php get_footer(); ?>
