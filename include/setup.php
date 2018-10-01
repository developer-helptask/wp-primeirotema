<?php

function ci_theme_styles(){
	wp_enqueue_style('fonte_css', get_template_directory_uri().'/assets/css/fonte.css');
	wp_enqueue_style('theme_css', get_template_directory_uri().'/assets/css/theme.css');
	wp_enqueue_style('aos_css', get_template_directory_uri().'/assets/css/aos.css');
	wp_enqueue_script('aos_js', get_template_directory_uri().'/assets/js/aos.js', array('jquery'), '', true);
	wp_enqueue_script('theme_js', get_template_directory_uri().'/assets/js/script.js', array('aos'), '', true);
}

function ci_after_setup(){
	add_theme_support('menus');
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	add_theme_support('custom-logo');
	register_nav_menu('primary', __('Primary Menu', 'canavans'));
	register_nav_menu('secondary', __('Secondary Menu', 'canavans'));

}

function ci_widgets(){
	register_sidebar(array(
		'name' => __('sidebar', 'canavans'),
		'id' => 'ci_sidebar',
		'description' => __('Sidebar do theme', 'canavans'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="title_widget">',
		'after_title' => '</h4>',
	));
}