<?php
	include 'php-includes/global-functions.php';
	get_header();
?>
<body> 
	<!-- Inner page template -->
	<?php 
		while (have_posts()) {
			the_post(); 
			get_inner_site_header(get_the_title(), get_field('page_subtitle'), '', '', $bcs = array('Homepage' => home_url(), 'Inner page' => ''), 'about-isd--reverse.svg#about'); 
		}
	?>
	<!-- FAQs -->
	<section class="bc-feature-component">     
		<article class="bc-feature-component__content"> 
			<div class="bc-feature-component__content__text-content">
				
				<?php 
					while (have_posts()) {
						the_post();
						echo '<h1 class="bc-inner-page-content__heading">' . get_the_title() . '</h1>';		
						the_content(); 
					}
				?>
			</div>
			<!-- // .bc-feature-component__content__text-content -->
		</article><!-- //  .bc-feature-component__content -->
	</section><!-- // .bc-feature-component -->
	<!-- // Frequently asked questions -->
	<?php  
		get_global_CTA();
		get_footer();
	?>