<?php
	/* Template Name: Inner page template */
	include 'php-includes/global-functions.php';
	get_header();
?>
<body> 
	<?php get_inner_site_header('About ISD', 'Subtitle', '', '', $bcs = array('Homepage' => home_url(), 'Inner page' => ''), 'about-isd--reverse.svg#about'); ?>
	<!-- FAQs -->
	<section class="bc-feature-component">     
		<article class="bc-feature-component__content">
			<div class="bc-feature-component__content__text-content">
				<h1 class="bc-inner-page-content__heading">Content Heading</h1>	
				<p class="bc-feature-component__intro">Content intro</p>
				<?php while (have_posts()) {
					the_post(); ?>
					<?php the_content() ?>
				<?php } ?>
			</div>
			<!-- // .bc-feature-component__content__text-content -->
		</article><!-- //  .bc-feature-component__content -->
	</section><!-- // .bc-feature-component -->
	<!-- // Frequently asked questions -->
	<?php  
		get_global_CTA();
		get_footer();
	?>