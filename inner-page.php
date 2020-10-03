<?php
	/* Template Name: Inner page template */
	include 'php-includes/global-functions.php';
	get_header();
?>
<body> 
	<!-- Inner page template -->
	<?php 
		while (have_posts()) {
			the_post(); 
			get_inner_site_header(get_field('page_title'), get_field('page_subtitle'), '', '', $bcs = array('Homepage' => home_url(), 'Inner page' => ''), 'about-isd--reverse.svg#about'); 
		}
	?>
	<!-- Page content -->
	
	<?php 
		while (have_posts()) {
			the_post();
			the_content();
		}
	?>
	
	<!-- // Frequently asked questions -->
	<?php  
		get_global_CTA();
		get_footer();
	?>