<?php
/**
* Template Name: About Page
*
 * The custom template for displaying the about page
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

		<?php query_posts('post_type=service_offers'); ?>

		<?php while (have_posts()) : the_post();
			$banner_tagline = get_field('banner_tagline');
		?>

		<h3><?php echo $banner_tagline; ?></h3>

		<?php endwhile; ?>

		<?php wp_reset_query(); ?>
 	</div><!-- .main-content -->
 </div><!-- #primary -->

 <section class="about-page">
	 <div class="site-content">
		 <div class="service-offers">

		 <?php query_posts('post_type=service_offers'); ?>

		 <?php while (have_posts()) : the_post();
       $image_1 = get_field('image_1');
       $size = "full";
      ?>

			 <section class="service-content">
				 <aside class="service-offers-sidebar">
					 <h3>
						 <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					 </h3>

					 <p><?php the_content(); ?></p>
				 </aside> <!-- end .service-offers-sidebar -->
			 </section> <!-- end .service-content -->

			 <div class="about-page-images">
				 <div class="service-images">
					 <figure>
						 <a href="<?php the_permalink(); ?>">
							 <?php echo wp_get_attachment_image($image_1, $size) ?>
						 </a>
					 </figure>
				 </div>
			 </div><!-- end .about-page-images -->
		 <?php endwhile; ?>

		 <?php wp_reset_query(); ?>

		 </div> <!-- end .service-offers -->
	 </div> <!-- end .site content -->
 </section> <!-- end .about-page -->

 <?php get_footer(); ?>
