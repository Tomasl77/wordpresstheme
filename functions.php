<?php 

define('LTTHE_VERSION','1.0.0');
function ltthe_scripts()
{
			//Load CSS
	
	wp_enqueue_style('ltthe_bootstrap-core' , get_template_directory_uri(). '/css/bootstrap.min.css', array(), LTTHE_VERSION, 'all'); 
	wp_enqueue_style('ltthe_custom' , get_template_directory_uri(). '/style.css', array('ltthe_bootstrap-core'), LTTHE_VERSION, 'all'); 

			//Load scripts
	wp_enqueue_script('ltthe_bootstrap-js' , get_template_directory_uri(). '/js/bootstrap.js', array('jquery'), LTTHE_VERSION, true); 
	wp_enqueue_script('ltthe_javascript-core' , get_template_directory_uri(). '/js/lobthem.js', array('jquery', 'ltthe_bootstrap-js'), LTTHE_VERSION, true); 

}

add_action('wp_enqueue_scripts', 'ltthe_scripts');


function ltthe_admin_scripts()
{
	wp_enqueue_style('bootstrap-adm-core', get_template_directory_uri(). '/css/bootstrap.min.css', array(), LTTHE_VERSION);
}

add_action('admin_init', 'ltthe_admin_scripts');


/*=====================================================================
======================== Utilities ====================================
=======================================================================*/

function ltthe_setup()
{
	add_theme_support('post-thumbnails');

	remove_action('wp_head','wp_generator');

	//remove_filter('the_content','wptexturize');

	add_theme_support('title-tag');
}

add_action('after_setup_theme','ltthe_setup');
