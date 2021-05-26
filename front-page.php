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
<!---Copied the nav/main content from parent theme-->
	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<a class="button" href="<?php echo site_url('/blog/') ?>">View Our Work</a>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->
<!-- Featured work from case studies for the homepage -------->
 <section class="featured-work">
	 <div class="site-content clearfix">
		 <h2> Featured Work</h2>
		 <div class="homepage-featured-work">
<!-- copy the code from blog posts for the loop to showcase it -->
     <?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
     <?php while ( have_posts() ) : the_post();  // loop content here
       $image_1=get_field("image_1");
			 $size="medium";
		  ?>
			<div class="individual-featured-work">
			    <figure>
	<!-- this will get the first image from the case studies(work) to show on the frontpage-->
			  	 <?php echo wp_get_attachment_image($image_1,$size);?>
			   </figure>
        <h3> <a href="<?php the_permalink(); ?>" ><?php the_title();?></a></h3>
	  	</div>
      <?php endwhile; //end of the loop ?>
      <?php wp_reset_query(); // resets the altered query back to the original ?>
    </div>
	 </div>
 </section>

<!--- Blog posts ------------------------------------------------------>
 <section class="recent-posts">
    <div class="site-content">
     <div class="blog-post">
       <h4> From the Blog </h4>
			 <?php query_posts('posts_per_page=1'); ?>
       <?php while ( have_posts() ) : the_post();  // loop content here ?>
			    <h3><?php the_title();?></h3>
			    <?php the_excerpt();?>
			 <?php endwhile; //end of the loop ?>
       <?php wp_reset_query(); // resets the altered query back to the original ?>
		 </div>
    </div>

<!--- Twitter widget ------------------------------------------------->
<div class="tweet-widget">
			 <h4>Recent Tweet</h4>
			 <?php $twitter_link=get_field('twitter_link');
			      $link_name=get_field('link_name'); ?>
			 <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
				 <div id="secondary" class="widget-area tweet-module" role="complementary">
					 <a href="<?php echo $twitter_link ?>"><?php dynamic_sidebar( 'sidebar-2' );?></a>
					 <?php  $stt_options = get_option( 'widget_pi_simpletwittertweets' );
			        	 $twitter_handle = $stt_options[2]['name']; ?>
				</div>
			 <?php endif; ?>
			 <p class="tweet-follow">
			 	<a href="https://twitter.com/<?php echo $twitter_handle;?>" target="_blank">Follow Us ›</a>
			 </p>
	 </div>
 </section>

<?php get_footer(); ?>
