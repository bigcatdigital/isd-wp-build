<?php
	/* Template Name: Level 1 page template -- Student Experience */
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
			the_content(); 
	?>
			
			<section class="bc-feature-component">   
				<div class="bc-feature-component__content__text-content">
					<h1 class="bc-feature-component__heading">Global Connections</h1>
				</div>
				<div class="bc-feature-component__content">
					<div class="bc-feature-component__content__text-content"> 
						<article class="bc-1-columns bc-expandible-block">
							<div class="bc-column"> 
								<p class="bc-feature-component__intro">ISD is a proud member of the International Baccalaureate (IB) World Schools network. ISD students have the opportunity to connect and collaborate with other IB schools around the globe.</p> 
								<p>Grade 6 students have inspired others classes with their virtual Exhibition event. Grade 1,2 students have compared and contrasted learning communities with an IB school in the USA. Likewise, ISD staff have personal and professional relationships with IB colleagues.</p>

								<div class="bc-expandible-block__body">
									<div class="bc-expandible-block__body__text">
								<p>These relationships arise from previous teaching experience, attending professional development workshops, and being part of professional learning communities. Curriculum development, evaluation process, differentiation, and assessments are some of the areas in which the school has engaged in meaningful discussions to promote best practice.</p>  
								<p>ISD alumni are making their mark around the world. After graduation, students move on to secondary schools in Ireland, in their home countries, or in new locations all over the globe. ISD alumni keep in close contact with ISD. Those who are abroad often pay us a visit when they come back to Dublin. And local students continue to collaborate with Exhibition as guest speakers.</p>

									</div>
								</div><!-- // .bc-expandible-block__body -->
								<div class="bc-expandible-block__expander">
									<a href="javascript:void(0)" class="bc-expandible-block__expander__button">
										<span class="bc-expandible-block__expander__button__text">
											<span class="inactive-text">Show more</span> 
											<span class="active-text">Show less</span>
										</span>
										<span class="bc-expandible-block__expander__button__icon">
											<svg class="bc-svg-icon">
												<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#close-x"></use> 	
											</svg>	
										</span>
									</a>
								</div><!-- // .bc-expandible-block__expander -->
							</div>

						</article><!-- // .bc-feature-component__content -->
					</div>	
				</div>

			</section><!-- // .bc-inner-page-content -->
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