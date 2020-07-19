<?php
	/* Template Name: About - Nana Profile */
	include 'php-includes/global-functions.php';
	get_header();
?>
<body> 
	<?php get_inner_site_header('About ISD', 'Naná Isa', '', '', $bcs = array('Homepage' => home_url(), 'About ISD' => get_permalink(13), 'Naná Isa' => ''), 'about-isd--reverse.svg#about'); ?>
	<!-- FAQs -->
	<section class="bc-feature-component">     
		<article class="bc-feature-component__content">
			<div class="bc-gr-feature isd-staff-profile">
				<picture class="bc-gr-feature__media">
					<img src="<?php echo get_theme_file_uri('/media/people/nana-isa.jpg'); ?>" alt="Nana Isá">
				</picture>
				<div class="bc-gr-feature__text ">
					<h1 class="bc-inner-page-content__heading">Naná Isa</h1>
					<h2>Primary Years Programme (PYP) Coordinator</h2>
					<p class="bc-feature-component__intro">Naná has been learning languages from a very young age and her love for English has shaped her career. She holds qualifications in Translation,Teaching English as a Foreign Language, and Special Needs Assisting. </p>
					<p>She is currently pursuing a Master’s degree in Education Studies with a focus on Inquiry-Based Learning.</p> 
					<p>From Montevideo, Uruguay, Naná’s favourite thing about ISD is the representation of cultures and languages in a very diverse, close-knit community.</p>	
				</div>
				

			</div><!-- // .bc-feature-component__content__text-content -->
		</article><!-- //  .bc-feature-component__content -->
	</section><!-- // .bc-feature-component -->
	<!-- // Frequently asked questions -->
	<?php  
		get_global_CTA();
		get_footer();
	?>