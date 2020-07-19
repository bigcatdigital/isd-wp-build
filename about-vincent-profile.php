<?php
	/* Template Name: About - Vince Profile */
	include 'php-includes/global-functions.php';
	get_header();
?>
<body> 
	<?php get_inner_site_header('About ISD', 'Vincent McCarthy', '', '', $bcs = array('Homepage' => home_url(), 'About ISD' => get_permalink(13), 'Vincent McCarthy' => ''), 'about-isd--reverse.svg#about'); ?>
	<!-- FAQs -->
	<section class="bc-feature-component">     
		<article class="bc-feature-component__content">
			<div class="bc-gr-feature isd-staff-profile">
				<picture class="bc-gr-feature__media">
					<img src="<?php echo get_theme_file_uri('/media/people/VMC-photo.jpg'); ?>" alt="Vince McCarthy, Chairman of the Board of Directors">
				</picture>
				<div class="bc-gr-feature__text">
					<h1 class="bc-inner-page-content__heading">Vincent McCarthy</h1>
					<h2>Chairman of the Board of Directors</h2>
					<p class="bc-feature-component__intro">Vincent Mc Carthy is the Co-founder &amp; CEO of The Festival of Curiosity, which is Dublin’s international festival of science, arts, design and technology.</p>
					<p>Vincent previously was the Curator of Dublin City of Science 2012, worked with the Irish Department of Foreign Affairs as a consultant on science and technology projects in Mozambique and was a contributor for RTÉ Young Peoples on Science and Technology. Vincent is also the former President of the Ireland United States Alumni Association, which helps promote US-Irish relations and a member of the Smart Dublin Advisory Network.</p> 
					<p>Vincent has a Bachelors of Science in Physics and Mathematics and a Masters in International Relations.</p>
				</div>
			</div><!-- // .bc-feature-component__content__text-content -->
		</article><!-- //  .bc-feature-component__content -->
	</section><!-- // .bc-feature-component -->
	<!-- // Frequently asked questions -->
	<?php  
		get_global_CTA();
		get_footer();
	?>