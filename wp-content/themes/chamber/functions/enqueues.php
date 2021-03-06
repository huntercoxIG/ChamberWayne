<?php

function bst_enqueues() {

	wp_register_script('jquery', get_bloginfo('template_url').'/js/jquery-1.11.2.min.js', __FILE__, false, '1.11.2', true);
	wp_enqueue_script( 'jquery' );

	wp_register_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', false, '3.3.2', null);
	wp_enqueue_style('bootstrap-css');

  	wp_register_style('chamber-css', get_template_directory_uri() . '/css/chamber.css', false, null);
	wp_enqueue_style('chamber-css');

		wp_register_style('font-awesome-css', get_template_directory_uri() . '/css/font-awesome.min.css', false, null);
	wp_enqueue_style('font-awesome-css');	
	
  	wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr-2.6.2.min.js', false, null, true);
	wp_enqueue_script('modernizr');

  	wp_register_script('respond', get_template_directory_uri() . '/js/respond.min.js', false, null, true);
	wp_enqueue_script('respond');

  	wp_register_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', false, null, true);
	wp_enqueue_script('bootstrap-js');

	wp_register_script('chamber-js', get_template_directory_uri() . '/js/chamber.js', false, null, true);
	wp_enqueue_script('chamber-js');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'bst_enqueues', 100);
