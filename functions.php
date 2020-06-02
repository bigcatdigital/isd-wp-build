<?php 
	function ISD_build_assets() {
		wp_enqueue_script('isd-scripts',  get_theme_file_uri('/scripts/app-concat.min.js'), array(), microtime(), true);	
		wp_enqueue_style('google-poppins', '//fonts.googleapis.com/css?family=Poppins:100,300,400,500,600&display=swap', NULL, microtime());	
		wp_enqueue_style('isd-styles', get_stylesheet_uri());	
	}
	add_action('wp_enqueue_scripts', 'ISD_build_assets');
	function isd_features() {
		add_theme_support('title-tag');	
		register_nav_menu('headerMenu', 'Header menu');
		register_nav_menu('footerMenu1', 'Footer menu 1');
		register_nav_menu('footerMenu2', 'Footer menu 2');
	}
	add_action('after_setup_theme', 'isd_features');
?>