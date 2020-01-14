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
		<?php query_posts('post_type=banners'); ?>
			<?php while (have_posts()) : the_post();
				$hero_banner = get_field('hero_banner');
			?>

			<h3 class="banner-content"><?php echo $hero_banner; ?></h3>

			<?php endwhile; ?>
		<?php wp_reset_query(); ?>
 	</div><!-- .main-content -->
 </div><!-- #primary -->

 <section class="about-page">
	 <div class="tagline-wrapper">
		 <div class="tagline-content">
			 <?php query_posts('post_type=banners'); ?>
 				<?php while (have_posts()) : the_post();
 					$tagline_header = get_field('tagline_header');
					$page_tagline = get_field('page_tagline');
 				?>

 				<h4 class="tagline-header"><?php echo $tagline_header; ?></h4>

				<p id="tagline"><?php echo $page_tagline; ?></p>

 				<?php endwhile; ?>
 			<?php wp_reset_query(); ?>
		</div><!-- end .tagline-content -->
	 </div> <!-- end .tagline-wrapper -->

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
					 </div> <!-- end .service-images -->
				 </div> <!-- end .about-page-images -->

				 <?php endwhile; ?>
			 <?php wp_reset_query(); ?>
		 </div> <!-- end .service-offers -->
	 </div> <!-- end .site content -->
 </section> <!-- end .about-page -->

 <?php get_footer(); ?>
