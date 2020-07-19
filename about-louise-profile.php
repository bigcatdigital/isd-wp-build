<?php
	/* Template Name: About - Louise Profile */
	include 'php-includes/global-functions.php';
	get_header();
?>
<body> 
	<?php get_inner_site_header('About ISD', 'Louise Kearns', '', '', $bcs = array('Homepage' => home_url(), 'About ISD' => get_permalink(13), 'Louise Kearns' => ''), 'about-isd--reverse.svg#about'); ?>
	<!-- FAQs -->
	<section class="bc-feature-component">     
		<article class="bc-feature-component__content">
			<div class="bc-gr-feature isd-staff-profile">
				<picture class="bc-gr-feature__media">
					<img src="<?php echo get_theme_file_uri('/media/people/louise-kearns.jpeg'); ?>" alt="Louise Kearns">
				</picture>
				<div class="bc-gr-feature__text ">
					<h1 class="bc-inner-page-content__heading">Louise Kearns</h1>
					<h2>Office Administrator</h2>
					<p class="bc-feature-component__intro">Louise has over twenty years experience working administrative roles in several business sectors throughout Dublin.</p>
					<p>She holds a Secretarial Diploma. Since joining ISD in 2016 she has enjoyed every aspect of her job, especially getting to know the students and their families.</p> 
				</div>
			</div><!-- // .bc-feature-component__content__text-content -->
		</article><!-- //  .bc-feature-component__content -->
	</section><!-- // .bc-feature-component -->
	<!-- // Frequently asked questions -->
	<?php  
		get_global_CTA();
		get_footer();
	?>