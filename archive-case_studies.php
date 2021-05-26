<!--This is the landing page for all the case studies(work/portfolio)-->
<!-- copy and paste the code from the page.php from the parent theme-->
<?php
/**The template for displaying all pages
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */
get_header(); ?>
<!-- archive page will display all case studies(work) below one another
  instead of displaying only one case study only like in the single case study.-->
	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
        $image_1 = get_field('image_1');
        $size="medium";
				$services = get_field('services');
  	?>
		<article class="case-study clearfix">
			 <aside class="case-study-sidebar">
				 <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></h2>
				 <h4><span><?php echo $services; ?></span></h4>
				 <?php the_excerpt();?>
				 <p class="read-more-link"><strong><a href="<?php the_permalink(); ?>"> View Project </a></strong></p>
				</aside>
				<div class="case-study-images">
					<a href="<?php the_permalink(); ?>"><!--will make images clickable-->
					<?php if($image_1) { ?>
						 <?php echo wp_get_attachment_image( $image_1, $size );
					 } ?></a> 
					 </div>
			<?php endwhile; // end of the loop. ?>
		</article>
		</div><!-- .main-content -->
	</div><!-- #primary -->
</br>

<?php get_footer(); ?>
