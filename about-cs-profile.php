<?php
	/* Template Name: About - CS Profile */
	include 'php-includes/global-functions.php';
	get_header();
?>
<body> 
	<?php get_inner_site_header('About ISD', 'Cristen Schwab', '', '', $bcs = array('Homepage' => get_permalink(13), 'About ISD' => get_permalink(86), 'Cristen Schwab' => ''), 'about-isd--reverse.svg#about'); ?>
	<!-- FAQs -->
	<section class="bc-feature-component">     
		<article class="bc-feature-component__content">
			<div class="bc-gr-feature isd-staff-profile">
				<picture class="bc-gr-feature__media">
					<img src="<?php echo get_theme_file_uri('/media/people/cristen-schwab.jpg'); ?>" alt="Crsiten Schwab, Head of School">
				</picture>
				<div class="bc-gr-feature__text ">
					<h1 class="bc-inner-page-content__heading">Cristen Schwab</h1>
					<h2>Head of School</h2>
					<p class="bc-feature-component__intro">Cristen has been with ISD for over ten years and is truly inspired by its students. She loves being surrounded by a community eager to learn.</p>
					<p>Cristen came to Dublin from Rochester, Minnesota, USA to complete a masters degree at Trinity College Dublin. She holds a Masters in Education, Bachelors of Science in Primary and Middle School Education and Minor in Psychology.</p> 
					<p>Over her career, in addition to teaching a variety of subjects and grades, she has worked extensively in curriculum development and teacher mentorship.</p>	
				</div>
				

			</div><!-- // .bc-feature-component__content__text-content -->
		</article><!-- //  .bc-feature-component__content -->
	</section><!-- // .bc-feature-component -->
	<!-- // Frequently asked questions -->
	<?php  
		get_global_CTA();
		get_footer();
	?>