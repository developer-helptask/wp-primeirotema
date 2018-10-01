<?php
require get_template_directory().'/include/setup.php';
//hooks
//--Adiciona Css,Style etc.
add_action('wp_enqueue_scripts', 'ci_theme_styles');
add_action('after_setup_theme', 'ci_after_setup');
add_action('widgets_init', 'ci_widgets');
