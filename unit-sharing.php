<?php
	/* Template Name: Student Experience - Unit Sharing */
	include 'php-includes/global-functions.php';
	get_header();
?>
<body> 
	<?php get_inner_site_header('Student Experience', 'End of Unit Sharing', 'More About Student Experience', array('End of Unit Sharing' => '' . get_permalink(112) . '', 'Field Trips and Guest Speakers' => '' . get_permalink(136) . ''), ['Homepage' => home_url(), 'Student Experience' => '' . get_permalink(24) . '', 'End of Unit Sharing' => ''], 'pupil-experience-reverse.svg#experience--rev'); ?> 
	<!-- Main -->
	<section class="bc-feature-component">     
		<article class="bc-feature-component__content">
			<div class="bc-feature-component__content__text-content">
				<h1 class="bc-inner-page-content__heading">End of Unit Sharings</h1>	
				<p class="bc-feature-component__intro">See students participate in previous End of Unit Sharing events.</p>
				<?php while (have_posts()) {
					the_post(); ?>
					<?php the_content() ?>
				<?php } ?>
			</div>
			<!-- // .bc-feature-component__content__text-content -->
		</article><!-- //  .bc-feature-component__content -->
	</section><!-- // .bc-feature-component -->
	<!-- // Main -->
	<!-- Lightbox -->
	<section class="bc-lightbox"> 
		<a class="bc-lightbox__close">
			<svg version="1.1" class="bc-svg-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#close-x"></use>  
			</svg>
			<span class="bc-lightbox__close__text">
				CLOSE
			</span>
		</a>
		
		<div class="bc-flickty-slider bc-lightbox-slider ">
			<a href="" class="bc-flickty-slider__prev is-inactive">
				<svg version="1.1" class="bc-svg-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
					<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#carat"></use>  
				</svg>
			</a>
			<a href="" class="bc-flickty-slider__next">
				<svg version="1.1" class="bc-svg-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
					<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#carat"></use>  
				</svg>
			</a>
			
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
	<?php  
		get_inner_section_nav('More About Student Experience', array('End of Unit Sharing' => '' . get_permalink(112) . '', 'Field Trips and Guest Speakers' => '' . get_permalink(136) . ''));
		get_global_CTA();
		get_footer();
	?>