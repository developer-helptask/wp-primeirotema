<?php
//incluir outras function
function ii_theme_styles(){
	wp_enqueue_style('theme_css', get_template_directory_uri().'/assets/css/theme.css');
	wp_enqueue_script('theme_js', get_template_directory_uri().'/assets/js/script.js', array('jquery'), '', true);
}
//hooks
//--Adiciona Css,Style etc.
add_action('wp_enqueue_scripts', 'ii_theme_styles');