<!--- this is the single post for the case Studies
(work tab) looks------->

<!-- I will copy the elements from the page.php from the
parent element---->


<?php
/**
 * The template for displaying all pages
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

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
/* getting all the content to display on the page for case studies(work) */
    $services = get_field('services');
    $client = get_field('client');
    $link = get_field('site_link');
    $image_1 = get_field('image_1');
    $image_2 = get_field('image_2');
    $image_3 = get_field('image_3');
    $size = "full";
 ?>
<!-- getting all the content to display on the page for case studies(work) -->
     <article class="case-study clearfix">
      	<aside class="case-study-sidebar">
   		   	<h2><?php the_title(); ?></h2>
   		   	<h4><span><?php echo $services; ?></span></h4>
          <h4><?php echo $client; ?></h4>
			  	<?php the_content(); ?>
          <p class="read-more-link"><a href="<?php echo $link; ?>">Visit Live Site ›</a></p>
         </aside>
     <div class="case-study-images">
         	<?php if($image_1) { ?>
         			<?php echo wp_get_attachment_image( $image_1, $size ); ?>
         	<?php } ?>
         	<?php if($image_2) { ?>
         			<?php echo wp_get_attachment_image( $image_2, $size ); ?>
         	<?php } ?>
         	<?php if($image_3) { ?>
         			<?php echo wp_get_attachment_image( $image_3, $size ); ?>
         	<?php } ?>
  		</div>
    	</article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
<!--- no need for a sidebar on the work page so we can delete the get sidebar
	/*  (<)(?) php get_sidebar(); ?>-->
	</div><!-- #primary -->
<!---single case studies nav bar on the bottom that goes back to work page-->
     <nav id="navigation" class="container">
  	   <div class="left"><a href="<?php echo site_url('case_studies') ?>">&larr; <span>Back to work</span></a></div>
     </nav>
	 </br>
<?php get_footer(); ?>
