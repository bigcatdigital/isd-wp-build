<?php
	/* Template Name: Level 2 page template -- Modula Gallery */
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
			$parent_title = (get_the_title($parent_id)) ? get_the_title($parent_id) : '';
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
	</section><!-- // .bc-inner-page-content -->
	
	<!-- Lightbox -->
	<section class="bc-lightbox"> 
		<a class="bc-lightbox__close">
			<span class="bc-lightbox__close__text">
				CLOSE
			</span>
			<svg version="1.1" class="bc-svg-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg');  ?>#close-x"></use>  
			</svg>
			
		</a>
		
		<div class="bc-flickty-slider bc-lightbox-slider ">
			<div class="bc-flickty-slider__slider bc-lightbox-slider__slider"> 
				
			</div><!-- // .bc-lightbox-slider__slider -->
			<div class="bc-flickty-slider__controls">
				<div class="bc-flickty-slider__counter">
					<span class="bc-flickty-slider__counter__current">0</span>/<span class="bc-flickty-slider__counter__total">0</span>
				</div>
				<a href="" class="bc-flickty-slider__prev is-inactive">
					<svg version="1.1" class="bc-svg-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg');  ?>#carat"></use>  
					</svg>
				</a>
				<a href="" class="bc-flickty-slider__next">
					<svg version="1.1" class="bc-svg-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg');  ?>#carat"></use>  
					</svg>
				</a>
			</div><!-- // .bc-flickty-slider__controls -->
			
		</div><!-- // .bc-flickty-slider -->
		
		<div class="wave-wrap">
			<!--?xml version="1.0" encoding="utf-8"?-->			<!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
			<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1440 50" xml:space="preserve">
				<path style="fill: url(#isd-rainbow-grad)" id="isd-rainbow-wave" class="st1" d="M0,1v1v25.2c0,0,200.9-24.7,360-24.7S923.9,50,1080,50s360-23.5,360-23.5V2V1H0z"></path>
				<path class="isd-wave" id="isd-wave" d="M0,0v1v24.7C0,25.7,200.9,1,360,1s563.9,47,720,47s360-22.5,360-22.5V1V0H0z"></path>
			</svg>
		</div><!-- // .wave-wrap -->
	</section><!-- // .bc-lightbox -->
	<!-- // Lightbox -->
	
	<?php }//end while have_posts()  
		get_inner_section_nav($section_nav_title, $sub_nav_links);
		get_footer();
		get_floating_section_nav(); 
	?>