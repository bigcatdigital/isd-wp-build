<?php
	/* Template Name: About - Silvia Profile */
	include 'php-includes/global-functions.php';
	get_header();
?>
<body> 
	<?php get_inner_site_header('About ISD', 'Silvia Garcia Robles', '', '', $bcs = array('Homepage' => home_url(), 'About ISD' => get_permalink(13), 'Silvia Garcia Robles' => ''), 'about-isd--reverse.svg#about'); ?>
	<!-- FAQs -->
	<section class="bc-feature-component">     
		<article class="bc-feature-component__content">
			<div class="bc-gr-feature isd-staff-profile">
				<picture class="bc-gr-feature__media">
					<img src="<?php echo get_theme_file_uri('/media/people/silvia-garcia-robles.jpg'); ?>" alt="Silvia Garcia Robles">
				</picture>
				<div class="bc-gr-feature__text">
					<h1 class="bc-inner-page-content__heading">Silvia Garcia Robles</h1>
					<h2>Grade 5,6 Class Teacher</h2>
					<p class="bc-feature-component__intro">Silvia comes from León, Spain and has 15 years of international teaching experience working in different countries such as Spain and Guatemala. </p>
					<p>She has obtained a teaching degree specializing in Musical Education and a Bachelors of Arts in Musicology. Since joining ISD in 2012, she has fulfilled a number of teaching and leadership roles.</p> 
				</div>
			</div><!-- // .bc-feature-component__content__text-content -->
		</article><!-- //  .bc-feature-component__content -->
	</section><!-- // .bc-feature-component -->
	<!-- // Frequently asked questions -->
	<?php  
		get_global_CTA();
		get_footer();
	?>