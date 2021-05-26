<?php
/**
* Accelerate Marketing Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Accelerate Marketing
* @since Accelerate Marketing 2.0
*/

// Enqueue scripts and styles----------------------------------------------------------------------
function accelerate_child_scripts(){
	wp_enqueue_style( 'accelerate-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'accelerate-style' ));
}
add_action( 'wp_enqueue_scripts', 'accelerate_child_scripts' );

// <!--- creating custom post types on the homepage ----------->
 function create_custom_post_types(){
	 register_post_type('case_studies',
    array(
			'labels'=>array(
				'name'=> _('Case Studies'),
				'singular_name'=>_('Case Study')
			),
			'public'=>true,
			'has_archive'=>true,
			'reqrite'=>array('slug'=>'case-studies'),
		)
 );
 // <!--- creating a new about us page (custom post) ----------->
 	register_post_type('about',
 	 array(
 		 'labels'=>array(
 			 'name'=> _('About'),
 			 'singular_name'=>_('About')
 		 ),
 		 'public'=>true,
 		 'has_archive'=>false,
 		 'reqrite'=>array('slug'=>'about'),
 	 )
 );
 }
 add_action('init','create_custom_post_types');

//<!----- creating a twitter module to show up on the front page sidebar------>
function accelerate_theme_child_widget_init() {

	register_sidebar( array(
	    'name' =>__( 'Homepage sidebar', 'accelerate-theme-child'),
	    'id' => 'sidebar-2',
	    'description' => __( 'Appears on the static front page template', 'accelerate-theme-child' ),
	    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	    'after_widget' => '</aside>',
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>',
	) );

}
add_action( 'widgets_init', 'accelerate_theme_child_widget_init' );
