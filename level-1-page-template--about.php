<?php
	/* Template Name: Level 1 page template -- about */
	include 'php-includes/global-functions.php';
	get_header();
?>
<body> 
	<?php 
		while (have_posts()) {
			the_post();
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
			//Page content
			the_content();
		?>
		<!-- About Dublin -->
		<section class="bc-feature-component has-shade-01 has-background-svg">
			<article class="bc-feature-component__content">
				<div class="bc-feature-component__content__text-content">
					<h1 class="bc-feature-component__heading">About Dublin</h1>
					<p class="bc-feature-component__intro"><em>Céad míle fáilte</em>.</p>
					<p>Dublin city is known for the welcoming nature of its people. It is vibrant and cosmopolitan, enjoying all of the amenities of a capital city with a town size feel.</p>  
					<p>Home to Ireland’s main port, it is the centre of commercial and financial activity on the island. Many multinational companies from around the world have chosen Dublin to base their European headquarters.</p> 
					<p>A place where history meets modernity, Dublin city is easily explored by foot through its winding cobblestone streets. A mild maritime climate combined with parks, Georgian streetscapes, pedestrianized areas and greenspaces abound make Dublin a family friendly choice.</p> 
					<p>Dublin is dynamic and bursting with culture. Gaelic heritage integrated with an ever growing diverse population provides for an eclectic atmosphere. From music filled streets to Michelin star restaurants, there is something for everyone.</p> 
					<p>Geographically situated along the coastline and ringed to the south by the Wicklow and Dublin mountains, nature pursuits and beautiful vistas are easily accessible and an international airport provides an excellent base to explore Europe.</p>
				</div>
			</article>
			<img src="<?php echo get_theme_file_uri('/media/dublin.svg'); ?>" alt="The Dublin Skyline" class="isd-background-svg isd-dublin-skyline">
		</section>
			
		<?php }//end while have_posts()  
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