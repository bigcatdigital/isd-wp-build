<?php
	/* Template Name: Level 1 page template -- Student Experience */
	include 'php-includes/global-functions.php';
	get_header();
?>
<body> 
	<?php 
		while (have_posts()) {
			the_post();
			
			/* Set up page title area */
			$parent_id = $post->post_parent;
			$parent_title = get_the_title($parent_id);
			
			$sub_nav_links_field;
			$sub_nav_links = [];
			if (get_field('sub-navigation-links')) {
				$sub_nav_links_field = get_field('sub-navigation-links');
				foreach ($sub_nav_links_field as $linkfield) {
					if ($linkfield !== null && is_array($linkfield)) {
						array_push($sub_nav_links, $linkfield);	
					}	
				}
			}
			if (the_title !== null) {
				$this_title =  get_the_title() ;
			}
			$breadcrumbs = [
				'Homepage' => home_url()
			];
			$ancestor_ids = get_post_ancestors($post);
			foreach ($ancestor_ids as $ancestor_id) {
				$breadcrumbs[get_the_title($ancestor_id)] = get_the_permalink($ancestor_id);
			}
			$breadcrumbs[$this_title] = '';
			$section_nav_title = (empty($sub_nav_links)) ? '' : 'More about ' . $this_title ; 
			$header_icon = get_field('header-icon');
			get_inner_site_header($this_title, '', $section_nav_title, $sub_nav_links, $breadcrumbs, $header_icon); 
			
			/** The content **/
			the_content(); 
			/** End the content **/
			
	}//end while have_posts()  
	get_inner_section_nav($section_nav_title, $sub_nav_links);	
	wp_reset_postdata();
	if (get_field('show-feature-cta') && get_field('show-feature-cta') !== 'no') {
		get_global_CTA();	
	}
	get_footer();
	if (get_field('show-show-to-top') && get_field('show-show-to-top') === 'yes') {
		get_floating_section_nav(); 	
	}
?>