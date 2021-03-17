<?php
	/* Template Name: Level 1 page template */
	include 'php-includes/global-functions.php';
	get_header();
?>
<body> 
	<?php 
			$breadcrumbs = [
				'Homepage' => home_url(),
				'Page not found' => ''
			];
			get_inner_site_header('Page not found', '', null, null, $breadcrumbs, ''); 
		?>
		<section class="bc-one-col-feature bc-feature-component  bc-feature-component--text-slider " aria-label="Page not found"> 
		
				<article class="bc-feature-component__content"> 
					<div class="bc-feature-component__content__text-content">
						
						<p class="bc-feature-component__intro"><?php _e("Were sorry, we can't find the page you were looking for.") ; ?></p>
						<p>These are our major site sections:</p>
						<ul>
							<li><a href="<?php echo get_permalink(86) ?>">Learning and Teaching</a></li>
							<li><a href="<?php echo get_permalink(24) ?>">Student Experience</a></li>
							<li><a href="<?php echo get_permalink(20) ?>">Admissions</a></li>
							<li><a href="<?php echo get_permalink(15) ?>">For Families in Ireland</a></li>
							<li><a href="<?php echo get_permalink(13) ?>">About the School</a></li>
						</ul>
					</div><!-- // .bc-feature-component__content__text-content -->
				</article><!-- // .bc-feature-component__content -->
		
		</section>
		<?php get_inner_section_nav($section_nav_title, $sub_nav_links);	
		wp_reset_postdata();
		if (get_field('show-feature-cta') && get_field('show-feature-cta') !== 'no') {
			get_global_CTA();	
		}
		get_footer();
		if (get_field('show-show-to-top') && get_field('show-show-to-top') === 'yes') {	
			get_floating_section_nav(); 	
		}
		wp_reset_postdata();
	?>