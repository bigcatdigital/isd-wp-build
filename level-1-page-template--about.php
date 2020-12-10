<?php
	/* Template Name: Level 1 page template -- about */
	include 'php-includes/global-functions.php';
	get_header();
?>
<body> 
	<?php 
		while (have_posts()) {
			the_post();
			$parent_id = $post->post_parent;
			$parent_title = get_the_title($parent_id);
			
			$sub_nav_links_field;
			$sub_nav_links = [];
			if (get_field('sub-navigation-links')) {
				$sub_nav_links_field = get_field('sub-navigation-links');
				foreach ($sub_nav_links_field as $linkfield) {
					if ($linkfield !== null && is_array($linkfield)) {
						array_push($sub_nav_links, $linkfield);	
					}	
				}
			}
			if (the_title !== null) {
				$this_title =  get_the_title() ;
			}
			
			$breadcrumbs = [
				'Homepage' => home_url()
			];
			$ancestor_ids = get_post_ancestors($post);
			foreach ($ancestor_ids as $ancestor_id) {
				$breadcrumbs[get_the_title($ancestor_id)] = get_the_permalink($ancestor_id);
			}
			$breadcrumbs[$this_title] = '';
			
			$section_nav_title = (empty($sub_nav_links)) ? '' : 'More about ' . $this_title ;
			
			$header_icon = get_field('header-icon');
			get_inner_site_header($this_title, '', $section_nav_title, $sub_nav_links, $breadcrumbs, $header_icon); ?>
			
			<section class="bc-feature-component">   
				<article class="bc-feature-component__content">
					<div class="bc-feature-component__content__text-content">
						<h1 class="bc-inner-page-content__heading--large">A Warm Welcome</h1>
						<div class="bc-featured-quote ">
							<h2 class="bc-featured-quote__heading">Welcome from Head of School, Cristen Schwab</h2> 
							<div class="bc-featured-quote__icon">
								<svg class="bc-svg-icon">
									<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#quotes"></use> 
								</svg>	
							</div>
							<div class="bc-featured-quote__body">
								<p class="bc-inner-page-content__intro">Greetings, Hola, Bonjour, こんにちは</p>
								<p>On behalf of the entire International School of Dublin (ISD) it gives me great pleasure to welcome you to our website.  Thank you for your visit. </p>
								<p>At ISD we appreciate the care and consideration families take to choose the best school for their child.  At the heart of our purpose is the overall wellbeing of each and every student.  We endeavor to ensure that all ISD students begin their educational journey with a solid foundation feeling safe, engaged and ultimately empowered and excited by the premise of discovering, creating and sharing knowledge.  
	</p>
								<p>In an ever changing world, we are continually looking at the broader picture for the future.  Our aim is to set each student on an individual course for success.  We provide our students the space to forge their own path whilst equipping them with the essential skills to become autonomous lifelong learners.</p>		
								<p>Since our opening in 2007, we feel privileged and proud to have pioneered international education at the primary level in Ireland as the first International Baccalaureate Primary Years Programme (IB PYP) school. We are passionate in providing a progressive educational option and our methods for success are adaptive.  With community spirit and partnership at the core, we are driven by the combination of a cutting edge, research based curriculum and an outstanding and dedicated team of international educators.</p>
								<p>We feel the most authentic way to get to know us is to walk through the doors of our campus and interact with our dynamic learning community.  Our students are our best asset and we are all keen to make new connections. We are open to supporting you in varying capacities and hope to meet you soon.</p>
								<p>Kind regards,</p>
								<p><a href="javascript:void(0)">Cristen Schwab, Head of School.</a></p>
							</div>	
						</div><!-- // .bc-featured-quote -->
					</div>
				</article><!-- // .bc-feature-component__content -->
		</section><!-- // .bc-feature-component -->
		<?php 
			
			wp_reset_postdata();
			echo do_shortcode('[onecolivdeofeature id="939"]');
			wp_reset_postdata();
			$people_query = new WP_Query([
				'post_type' => 'staffprofile'
			]);
			$bod = [];
			$teachers = [];
			if ($people_query->have_posts()) {
				while($people_query->have_posts()) {
					$people_query->the_post();
					$pr_image = '';
					$has_image = '';
					if (get_field('profile-image') && count(get_field('profile-image'))) { 
						$pr_image = get_field('profile-image');
						$has_image = ' has-image ';
					} else {
						$has_image = '';
					}
					$first_name = get_field('first-name');
					$name = get_field('first-name') . ' ' . get_field('last-name');
					$o = '';
					$o .= '<div class="bc-column bc-card' . $has_image . 'bc-fade-in-up--is-not-visible">';
					if ($pr_image && is_array($pr_image)) {
						$o .= '	<picture class="bc-card__media">';
						$o .= '		<img src="' . esc_url($pr_image['url']) . '" alt="' . esc_html($pr_image['alt']) . '">'	;
						$o .= '	</picture>';
					}
					$o .= '<h2 class="bc-card__heading">' . $name . '</h2>';
					if (get_field('profile-role') && strcmp(get_field('profile-role'), '') !== 0) {
						$o .= '<h3 class="bc-card__sub-heading">'. get_field('profile-role') . '</h3>';	
					}
					$o .= '<div class="bc-card__cta">';
					$o .= '	<a href="' . get_the_permalink() . '" class="bc-icon-link"> ';
					$o .= '		Read more about ' . $first_name .'';
					$o .= '		<svg class="bc-svg-icon"> ';
					$o .= '			<use xlink:href="' . get_theme_file_uri('/media/svg/icons/bc-svgs.svg') . '#arrow"></use>';
					$o .= '		</svg>';
					$o .= '	</a>';
					$o .= '</div>';
					$o .= '</div><!-- // '. $name . ' -->';
					if (get_field('staff-group') && strcmp(get_field('staff-group'), 'board') === 0) {
						array_push($bod, $o);	
					} else {
						array_push($teachers, $o);
					}
							
				}//end while $people_query
			}
		?>
		<?php if (count($teachers) > 0) { ?>
			<section class="bc-feature-component" id="our-team">
				<header class="bc-feature-component__header">
					<div class="bc-feature-component__content__text-content">
						<h1 class="bc-inner-page-content__heading">Meet Our Team</h1>
						<p class="bc-inner-page-content__intro">ISD is very proud of our outstanding team of international educators. Collectively, we share extensive experience in international primary education and like many of our families; have moved to Ireland and made Dublin our home.</p>	
						<p>
							<a class="bc-icon-link" href="<?php echo get_permalink(get_page_by_path('about-isd/employment')) ?>">
								See here for employment opportunities and internships at ISD
								<svg class="bc-svg-icon">
									<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use>  
								</svg>
							</a>
						</p>
					</div>
				</header>
				<div class="bc-feature-component__content"> 
					<article class="bc-3-columns ">
					<?php 
						foreach($teachers as $teacher) {
							echo $teacher;
						}//end foreach $teachers
					?>
					</article><!-- // .bc-3-columns -->
				</div><!-- // .bc-feature-component__content -->
			</section><!-- // .bc-feature-component -->
			<!-- // Meet the tachers -->	
		<?php }//end if empty($teachers) ?>
		
		<?php if (count($bod) > 0) { ?>
		<section class="bc-feature-component">
			<header class="bc-feature-component__header">
				<div class="bc-feature-component__content__text-content">
					<h1 class="bc-inner-page-content__heading">Meet Our Board</h1>
				</div>
			</header>
			<div class="bc-feature-component__content"> 
				<article class="bc-3-columns">
					<?php 
						foreach($bod as $board_memeber) {
							echo $board_memeber;
						}//end foreach $board_memeber
					?>
				</article><!-- // .bc-3-column -->
			</div><!-- // .bc-feature-component__content -->
		</section><!-- // .bc-feature-component -->
		<!-- //Meet the Board -->
		<?php }//end if empty($teachers) ?>
		<!-- ISD Values -->
		<?php 
			wp_reset_postdata();
			echo do_shortcode('[onecolfeature id="930"]');
		?>
		<!-- // ISD Values -->
		<!-- About Dublin -->
		<section class="bc-feature-component has-shade-01 has-background-svg">
			<article class="bc-feature-component__content">
				<div class="bc-feature-component__content__text-content">
					<h1 class="bc-feature-component__heading">About Dublin</h1>
					<p class="bc-feature-component__intro"><em>Céad míle fáilte</em>.</p>
					<p>Dublin city is known for the welcoming nature of its people. It is vibrant and cosmopolitan, enjoying all of the amenities of a capital city with a town size feel.</p>  
					<p>Home to Ireland’s main port, it is the centre of commercial and financial activity on the island. Many multinational companies from around the world have chosen Dublin to base their European headquarters.</p> 
					<p>A place where history meets modernity, Dublin city is easily explored by foot through its winding cobblestone streets. A mild maritime climate combined with parks, Georgian streetscapes, pedestrianized areas and greenspaces abound make Dublin a family friendly choice.</p> 
					<p>Dublin is dynamic and bursting with culture. Gaelic heritage integrated with an ever growing diverse population provides for an eclectic atmosphere. From music filled streets to Michelin star restaurants, there is something for everyone.</p> 
					<p>Geographically situated along the coastline and ringed to the south by the Wicklow and Dublin mountains, nature pursuits and beautiful vistas are easily accessible and an international airport provides an excellent base to explore Europe.</p>
				</div>
			</article>

			<img src="<?php echo get_theme_file_uri('/media/dublin.svg'); ?>" alt="The Dublin Skyline" class="isd-background-svg isd-dublin-skyline">
		</section>
			
		<?php }//end while have_posts()  
		get_inner_section_nav($section_nav_title, $sub_nav_links);	
		wp_reset_postdata();
		if (get_field('show-feature-cta') && get_field('show-feature-cta') !== 'no') {
			get_global_CTA();	
		}
		get_footer();
		if (get_field('show-show-to-top') && get_field('show-show-to-top') === 'yes') {
			
			get_floating_section_nav(); 	
		}
	?>