<!--this is the page for about , the template was copied
from the parent theme page.php-->

<?php
/**
 * The template for displaying all pages
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>
<?php
/*using advanced custom fields and then creating the fields to
be input by client, and then displaying them on the page*/
    $services_intro_title = get_field('services_intro_title');
     //$services_intro_title  = get_post_meta($post->ID, "services_intro_title", true);
    $services_intro_text = get_field('services_intro_text');
    $service_1_title = get_field('service_1_title');
    $service_1_description = get_field('service_1_desc');
    $service_1_image = get_field('service_1_image');
    $service_2_title = get_field('service_2_title');
    $service_2_description = get_field('service_2_desc');
    $service_2_image = get_field('service_2_image');
    $service_3_title = get_field('service_3_title');
    $service_3_description = get_field('service_3_desc');
    $service_3_image = get_field('service_3_image');
    $service_4_title = get_field('service_4_title');
    $service_4_description = get_field('service_4_desc');
    $service_4_image = get_field('service_4_image');
    $about_contact_title = get_field('about_contact_title');
    $contact_button_text = get_field('contact_button_text');
    $contact_tagline = get_field('contact_tagline');
    $contact_button = get_field('contact_button');
    $size = "small";
    ?>
    	<section class="hero-about">
    			<?php while ( have_posts() ) : the_post(); ?>
    			<div class="hero-text">
    				<h3><?php the_content(); ?></h3>
    			</div>
    				<?php endwhile; // end of the loop. ?>
    	</section>
    	<div class="site-content">
    		<section class="about-intro">
    			<h5><?php echo $services_intro_title; ?></h5>
    			<p><?php echo $services_intro_text; ?><p>
    		</section>
      </div>
    <div class="services-content">
        <div>
    		<section class="about-section">
    			<figure class="service-image align-left">
    				<?php echo wp_get_attachment_image( $service_1_image, $size ); ?>
    			</figure>
    			<div class="service-description">
    					<h2><?php echo $service_1_title; ?></h2>
    					<p><?php echo $service_1_description; ?></p>
    			</div>
    		</section>
      </div>
      <div>
    		<section class="about-section">
          <div class="service-description">
    					<h2><?php echo $service_2_title; ?></h2>
    					<p><?php echo $service_2_description; ?></p>
    			</div>
    			<figure class="service-image align-right">
    				<?php echo wp_get_attachment_image( $service_2_image, $size ); ?>
    			</figure>
    		</section>
      </div>
      <div>
    		<section class="about-section">
    			<figure class="service-image align-left">
    				<?php echo wp_get_attachment_image( $service_3_image, $size ); ?>
    			</figure>
    			<div class="service-description">
    					<h2><?php echo $service_3_title; ?></h2>
    					<p><?php echo $service_3_description; ?></p>
    			</div>
    		</section>
      </div>
      <div>
    		<section class="about-section">
          <div class="service-description">
    				<h2><?php echo $service_4_title; ?></h2>
    				<p><?php echo $service_4_description; ?></p>
    			</div>
    			<figure class="service-image align-right">
    				<?php echo wp_get_attachment_image( $service_4_image, $size ); ?>
    			</figure>
    		</section>
      </div>
    </div>
      <div>
        <section class="about-contact">
			<div class="contact-description">
				<h4><?php echo $contact_tagline; ?></h4>
			</div>
			<div class="contact-button">
				<a class="button" href="<?php echo esc_url( home_url() ); ?>/contact"><?php echo $contact_button; ?></a>
			</div>
		</section>
    	</div>

    <?php get_footer(); ?>
