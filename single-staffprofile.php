<?php
	include 'php-includes/global-functions.php';
	get_header();
?>
<body> 
	<?php 
		while (have_posts()) {
			the_post();
			$parent_id = get_page_by_title('About ISD');
			$parent_title = get_the_title($parent_id);
			
			$sub_nav_links_field;
			$sub_nav_links = [];
			
			if (get_field('sub-navigation-links', $parent_id) && !empty(get_field('sub-navigation-links', $parent_id))) {
				$sub_nav_links_field = get_field('sub-navigation-links', $parent_id);
				foreach ($sub_nav_links_field as $linkfield) {
					if ($linkfield !== null && is_array($linkfield) && strcmp($linkfield['url'], '') !== 0) {
						array_push($sub_nav_links, $linkfield);	
					}	
				}
			}
			$parent_title = $parent_title;
			$this_title = get_field('first-name') . ' ' . get_field('last-name');
			$breadcrumbs = [
				'Homepage' => home_url(), 
				'About ISD' => get_the_permalink($parent_id),
				$this_title => ''
			];
			$section_nav_title = (empty($sub_nav_links)) ? '' : 'More about ' . $parent_title ; 
			$header_icon = (get_field('header-icon', $parent_id)) ? get_field('header-icon', $parent_id) : 'about-isd--reverse.svg#about';
			get_inner_site_header($parent_title, $this_title, $section_nav_title, $sub_nav_links, $breadcrumbs, $header_icon); 
			//Post fields 
			$profile_image = (get_field('profile-image')) ? get_field('profile-image') : '' ;
			$first_name = (get_field('first-name')) ? get_field('first-name') : '' ;
			$last_name = (get_field('last-name')) ? get_field('last-name') : '' ;
			$role = (get_field('profile-role')) ? get_field('profile-role') : '' ;
			$intro = (get_field('profile-intro')) ? get_field('profile-intro') : '' ;
			$body = (get_field('profile-body')) ? get_field('profile-body') : '' ;
	?>
	<section class="bc-feature-component">     
		<article class="bc-feature-component__content">
			<div class="bc-gr-feature isd-staff-profile">
				<?php if (is_array($profile_image)) { ?>
				<picture class="bc-gr-feature__media">
						<img src="<?php echo esc_url($profile_image['url']); ?>" alt="<?php echo esc_url($profile_image['alt']); ?>">
				</picture>	
				<?php }//end if $profile_image  ?>
				<div class="bc-gr-feature__text">
					<h1 class="bc-inner-page-content__heading"><?php echo $this_title ?></h1>
					<?php if (strcmp($role, '') !== 0) { ?>
					<h2><?php echo $role ?></h2>
					<?php }//end if $role ?>
					<?php if (strcmp($intro, '') !== 0) { ?>
					<p class="bc-feature-component__intro"><?php echo $intro ?></p>
					<?php }//end if $intro ?>
					<?php if (strcmp($body, '') !== 0) { ?>
					<?php echo $body ?>
					<?php }//end if $body ?>
					
				</div>
			</div><!-- // .bc-feature-component__content__text-content -->
		</article><!-- //  .bc-feature-component__content -->
	</section><!-- // .bc-feature-component -->
	<!-- // Frequently asked questions -->
	<?php }//end while have_posts()  
		get_footer();
		get_floating_section_nav(); 
	?>