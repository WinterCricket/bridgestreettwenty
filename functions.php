<?php 

function bridgestreet_files() {
	
	wp_enqueue_script('bridgestreet_js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '2.1', true);
	wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('bridgestreet_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','bridgestreet_files');

?>