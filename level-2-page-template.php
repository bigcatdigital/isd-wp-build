<?php
	/* Template Name: Level 2 page template */
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
					if ($linkfield !== null && is_array($linkfield) && strcmp($linkfield['url'], '') !== 0) {
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
			<div class="bc-feature-component__content__text-content"> 
						<?php the_content(); ?>
				</div><!-- // .bc-feature-component__content__text-content -->
			</article><!-- // .bc-feature-component__content -->
		<?php wp_reset_postdata();
			
			if (get_field('content-shortcodes')) { 
				$shortcodes = get_field('content-shortcodes');
				$pattern = get_shortcode_regex();
				preg_match_all('/' . $pattern . '/s', $shortcodes, $matches);
				foreach ($matches[0] as $shortcode) {
					if (do_shortcode($shortcode) === null) {
						continue;
					} else {
						echo do_shortcode($shortcode);	
					}	
				}
			}//end if 'content-shortcodes'
			wp_reset_postdata();
		?>
	</section><!-- // .bc-inner-page-content -->
	
	
	<?php }//end while have_posts()  
		get_inner_section_nav($section_nav_title, $sub_nav_links);
		get_footer();
		get_floating_section_nav(); 
	?>