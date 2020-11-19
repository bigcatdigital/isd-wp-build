<?php
	/* Template Name: Level 2 page template -- Transition support */
	include 'php-includes/global-functions.php';
	get_header();
?>
<body> 
	<?php 
		while (have_posts()) {
			the_post();
			$parent_id = $post->post_parent;
			$sub_nav_links_field;
			$sub_nav_links = [];
			if (get_field('sub-navigation-links', $parent_id)) {
				$sub_nav_links_field = get_field('sub-navigation-links', $parent_id);
				foreach ($sub_nav_links_field as $linkfield) {
					if ($linkfield !== null && is_array($linkfield)) {
						array_push($sub_nav_links, $linkfield);	
					}	
				}
			}
			$parent_title = get_the_title($parent_id);
			if (the_title !== null) {
				$this_title = get_the_title();
			}
			$breadcrumbs = [
				'Homepage' => home_url()
			];
			$ancestor_ids = get_post_ancestors($post);
			foreach ($ancestor_ids as $ancestor_id) {
				$breadcrumbs[get_the_title($ancestor_id)] = get_the_permalink($ancestor_id);
			}
			$breadcrumbs[$this_title] = '';
			
			$section_nav_title = (empty($sub_nav_links)) ? '' : 'More about ' . $parent_title ; 
			$header_icon = get_field('header-icon', $parent_id);
			
			get_inner_site_header($parent_title, $this_title, $section_nav_title, $sub_nav_links, $breadcrumbs, $header_icon); ?> 
	<section class="bc-feature-component">  
		<article class="bc-feature-component__content">
			<div class="bc-gr-feature">
				<picture class="bc-gr-feature__media">
					<img src="<?php echo get_theme_file_uri('/media/fair-fun-2x3.jpg') ?>" alt="Support for your transition to Dublin">
				</picture>
				<div class="bc-gr-feature__text">
					<h1 class="bc-inner-page-content__heading">Transition Support</h1>
					<p class="bc-intro-para">ISD prides itself on its strong sense of community. From your initial expression of interest we provide you with support. We adapt our communication to suit your needs and try to provide support through mother tongues.</p>
					<p>As a new family, you will receive a comprehensive Dublin Information Pack with resources on a wide range of information. A Welcome Back to School event begins the academic year and settling in parent-teacher conferences take place within one month of the school’s commencement.</p>	
					<p>Communication is key at ISD. The School App keeps you updated of student work in real time. We maintain an open door policy and welcome the opportunity to meet with you at any stage should you require assistance.</p>			
				</div>
			</div><!-- // .bc-feature-component__content__text-content -->
				
		</article><!-- // .bc-feature-component__content -->
	</section><!-- // .bc-inner-page-content -->
	
	
	<?php }//end while have_posts()  
		get_inner_section_nav($section_nav_title, $sub_nav_links);	
		get_footer();
		get_floating_section_nav(); 
	?>