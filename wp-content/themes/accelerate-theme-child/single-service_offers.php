<?php
/**
 * The template for displaying a single service offer
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
		 <?php while (have_posts()) : the_post();
		 		$banner_tagline = get_field('banner_tagline');
		 ?>
			 <h3><?php echo $banner_tagline; ?></h3>
		 <?php endwhile; // end of the loop.?>
	 </div><!-- .main-content -->
 </div><!-- #primary -->

 	<div id="primary" class="site-content sidebar">
 		<div class="main-content" role="main">
 			<?php while (have_posts()) : the_post();
        $service_offer = get_field('service_offer');
        $back_link = get_field('back_link');
        $image_1 = get_field('image_1');
        $size = "full";
      ?>

 				<article class="case-study">
 					<aside class="case-study-sidebar">
 						<h2><?php the_title(); ?></h2>
 						<?php the_content(); ?>
 						<p class="read-more-link">
 							<a href="<?php echo $back_link; ?>">&lsaquo; Go Back</a>
 						</p>
 					</aside>
 				</article>

 				<div class="case-study-images">
 					<?php if ($image_1) {
          echo wp_get_attachment_image($image_1, $size);
      }?>
 				</div><!-- end case-study-images -->
 			<?php endwhile; // end of the loop.?>
 		</div><!-- .main-content -->
 	</div><!-- #primary -->

 <?php get_footer(); ?>
