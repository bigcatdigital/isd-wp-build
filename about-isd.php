<?php
	/* Template Name: About the School */
	include 'php-includes/global-functions.php';
	get_header();
?>
<body> 
	<?php get_inner_site_header('About ISD','',  '', '', ['Homepage' => home_url(), 'About ISD' => '' ], 'about-isd--reverse.svg#about'); ?>
	<section class="bc-feature-component">   
			<article class="bc-feature-component__content">
				<div class="bc-feature-component__content__text-content">
					<p class="bc-content-label">
						<svg class="bc-svg-icon">
							<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#about-isd"></use>  
						</svg>
						Welcome to ISD
					</p>
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
	<section class="bc-feature-component has-shade-01">   
		<header class="bc-feature-component__header">
			<div class="bc-feature-component__content__text-content">
				<h1 class="bc-inner-page-content__heading">Our Story</h1>	
				<p class="bc-feature-component__intro">ISD is the first accredited IB World Primary School in Ireland. Founded in 2007, ISD is very proud of forging the path to demonstrate the demand for, and success in, a progressive education at the primary level.  </p>  
			</div>
		</header>
		<article class="bc-feature-component__content">
			<div class="bc-feature-component__content__text-content">
				<div class="bc-media-embed">
					<div class="bc-media-embed__media">
						<iframe width="" height="" src="https://videopress.com/embed/BnS1zBSC?hd=0&autoPlay=0&permalink=0&loop=0" frameborder="0" title="The International School of Dublin Story"></iframe>
					</div>
					<div class="bc-media-embed__caption">The ISD Story</div>
				</div>
				<p>Established to expand diversity within the educational offering across Ireland, ISD provides an array of educational choice in a culturally diverse environment. We are co-educational and non-denominational. <a href="<?php echo get_permalink(86) ?>">The curriculum is learner driven</a>, facilitated through inquiry and focused on intercultural understanding, lifelong learning and respect.</p>  
				<p>Community is maintained as the heart of the school’s mission.  The welcoming, responsive and warm atmosphere of the school provides a home for both local and international families. ISD prides itself on its strong connections with alumni all over the globe.</p>
			</div>
		</article>
	</section><!-- // .bc-inner-page-content Our Story-->
	<!-- Meet the team -->
	<section class="bc-feature-component" id="our-team">
		<header class="bc-feature-component__header">
			<div class="bc-feature-component__content__text-content">
				<h1 class="bc-inner-page-content__heading">Meet Our Team</h1>
				<p class="bc-inner-page-content__intro">ISD is very proud of our outstanding team of international educators. Collectively, we share extensive experience in international primary education and like many of our families; have moved to Ireland and made Dublin our home.</p>	
				<p>
					<a class="bc-icon-link" href="javascript:void(0)">
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
				<div class="bc-column bc-card has-image bc-fade-in-up--is-not-visible">	
					<picture class="bc-card__media">
						<img src="<?php echo get_theme_file_uri('/media/people/cristen-schwab.jpg'); ?>" alt="Crsiten Schwab, Head of School">
					</picture>
					<h2 class="bc-card__heading">Cristen Schwab</h2>
					<h3 class="bc-card__sub-heading">Head of School</h3>
					<div class="bc-card__cta">
						<a href="<?php echo get_permalink(60) ?>" class="bc-icon-link">
							Read more about Cristen 
							<svg class="bc-svg-icon">
								<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use> 
							</svg>
						</a>
					</div>
				</div><!-- // Cristen Schwab -->
				<div class="bc-column bc-card has-image bc-fade-in-up--is-not-visible">	
					<picture class="bc-card__media">
						<img src="<?php echo get_theme_file_uri('/media/people/nana-isa.jpg'); ?>" alt="Nana Isa">
					</picture>
					<h2 class="bc-card__heading">Naná Isa</h2>
					<h3 class="bc-card__sub-heading">PYP Coordinator</h3>
					<div class="bc-card__cta">
						<a href="<?php echo get_permalink(62) ?>" class="bc-icon-link">
							Read more about Naná
							<svg class="bc-svg-icon">
								<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use> 
							</svg>
						</a>
					</div>
				</div><!-- // Nana -->
				<div class="bc-column bc-card has-image bc-fade-in-up--is-not-visible">	
					<picture class="bc-card__media">
						<img src="<?php echo get_theme_file_uri('/media/people/louise-kearns.jpeg'); ?>" alt="Louise Kearns">
					</picture>
					<h2 class="bc-card__heading">Louise Kearns</h2>
					<h3 class="bc-card__sub-heading">Office Adminstrator</h3>
					<div class="bc-card__cta">
						<a href="<?php echo get_permalink(64) ?>" class="bc-icon-link">
							Read more about Louise 
							<svg class="bc-svg-icon">
								<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use> 
							</svg>
						</a>
					</div>
				</div><!-- // Louise Kearns -->
				<div class="bc-column bc-card has-image bc-fade-in-up--is-not-visible">	
					<!--<picture class="bc-card__media">
						<img src="<?php echo get_theme_file_uri('/media/people/louise-kearns.jpeg'); ?>" alt="Louise Kearns">
					</picture>-->
					<h2 class="bc-card__heading">Marcella Tesoriero</h2>
					<h3 class="bc-card__sub-heading">Kindergarten Class Teacher</h3>
					<div class="bc-card__cta">
						<a href="<?php echo get_permalink(66) ?>" class="bc-icon-link">
							Read more about Louise 
							<svg class="bc-svg-icon">
								<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use> 
							</svg>
						</a>
					</div>
				</div><!-- // Marcella Tesoriero -->
				<div class="bc-column bc-card has-image bc-fade-in-up--is-not-visible">	
					<!--<picture class="bc-card__media">
						<img src="<?php echo get_theme_file_uri('/media/people/louise-kearns.jpeg'); ?>" alt="Louise Kearns">
					</picture>-->
					<h2 class="bc-card__heading">Mairead Lawyer</h2>
					<h3 class="bc-card__sub-heading">Grade 1,2 Class Teacher</h3>
					<div class="bc-card__cta">
						<a href="<?php echo get_permalink(68) ?>" class="bc-icon-link">
							Read more about Louise 
							<svg class="bc-svg-icon">
								<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use> 
							</svg>
						</a>
					</div>
				</div><!-- // Mairead Lawyer -->
				<div class="bc-column bc-card has-image bc-fade-in-up--is-not-visible">	
					<picture class="bc-card__media">
						<img src="<?php echo get_theme_file_uri('/media/people/pedro-perez-laplaza.jpg'); ?>" alt="Pedro">
					</picture>
					<h2 class="bc-card__heading">Pedro Pérez Laplaza</h2>
					<h3 class="bc-card__sub-heading">Grade 3,4 Class Teacher</h3>
					<div class="bc-card__cta">
						<a href="<?php echo get_permalink(71) ?>" class="bc-icon-link">
							Read more about Pedro
							<svg class="bc-svg-icon">
								<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use> 
							</svg>
						</a>
					</div>
				</div><!-- // Pedro -->
				<div class="bc-column bc-card has-image bc-fade-in-up--is-not-visible">	
					<picture class="bc-card__media">
						<img src="<?php echo get_theme_file_uri('/media/people/silvia-garcia-robles.jpg'); ?>" alt="Silvia Garcia Robles">
					</picture>
					<h2 class="bc-card__heading">Silvia García Robles</h2>
					<h3 class="bc-card__sub-heading">Grade 5,6 Class Teacher</h3>
					<div class="bc-card__cta">
						<a href="<?php echo get_permalink(74) ?>" class="bc-icon-link">
							Read more about Silvia
							<svg class="bc-svg-icon">
								<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use> 
							</svg>
						</a>
					</div>
				</div><!-- // Silvia -->
			</article><!-- // .bc-3-columns -->
			
		</div><!-- // .bc-feature-component__content -->
		
	</section><!-- // .bc-feature-component -->
	<!-- // Meet the team -->
	<hr class="is-featured">
	<!-- Meet the Board -->
	<section class="bc-feature-component">
		<header class="bc-feature-component__header">
			<div class="bc-feature-component__content__text-content">
				<h1 class="bc-inner-page-content__heading">Meet Our Board</h1>
			</div>
		</header>
		<div class="bc-feature-component__content"> 
			<article class="bc-3-columns">
				<div class="bc-column bc-card has-image bc-fade-in-up--is-not-visible">	
					<picture class="bc-card__media">
						<img src="<?php echo get_theme_file_uri('/media/people/VMC-photo.jpg'); ?>" alt="Vince McCarthy, Chairman of the Board of Directors">
					</picture>
					<h2 class="bc-card__heading">Vince McCarthy</h2>
					<h3 class="bc-card__sub-heading">Chairman of the Board of Directors</h3>
					<div class="bc-card__cta">
						<a href="<?php echo get_permalink(76) ?>" class="bc-icon-link">
							Read more about Vince
							<svg class="bc-svg-icon">
								<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use> 
							</svg>
						</a>
					</div>
				</div><!-- // Vince -->
				<div class="bc-column bc-card has-image bc-fade-in-up--is-not-visible">	
					<!--<picture class="bc-card__media">
						<img src="<?php echo get_theme_file_uri('/media/people/VMC-photo.jpg'); ?>" alt="Ann Hinds, Director">
					</picture>-->
					<h2 class="bc-card__heading">Ann Hinds</h2>
					<h3 class="bc-card__sub-heading">Director</h3>
					<div class="bc-card__cta">
						<a href="<?php echo get_permalink(78) ?>" class="bc-icon-link">
							Read more about Ann
							<svg class="bc-svg-icon">
								<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use> 
							</svg>
						</a>
					</div>
				</div><!-- // Ann -->
				<div class="bc-column bc-card has-image bc-fade-in-up--is-not-visible">	
					<!--<picture class="bc-card__media">
						<img src="<?php echo get_theme_file_uri('/media/people/vince-mcc-photo.jpg'); ?>" alt="Frank Cooney, Director">
					</picture>-->
					<h2 class="bc-card__heading">Frank Cooney</h2>
					<h3 class="bc-card__sub-heading">Director</h3>
					<div class="bc-card__cta">
						<a href="<?php echo get_permalink(82) ?>" class="bc-icon-link">
							Read more about Frank
							<svg class="bc-svg-icon">
								<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use> 
							</svg>
						</a>
					</div>
				</div><!-- // Frank -->
				<div class="bc-column bc-card has-image bc-fade-in-up--is-not-visible">	
					<picture class="bc-card__media">
						<img src="<?php echo get_theme_file_uri('/media/people/andy-atkinson.jpeg'); ?>" alt="Andy Atkinson, Director">
					</picture>
					<h2 class="bc-card__heading">Andy Atkinson</h2>
					<h3 class="bc-card__sub-heading">Director</h3>
					<div class="bc-card__cta">
						<a href="<?php echo get_permalink(80) ?>" class="bc-icon-link">
							Read more about Andy
							<svg class="bc-svg-icon">
								<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use> 
							</svg>
						</a>
					</div>
				</div><!-- // Frank -->
			</article><!-- // .bc-3-column -->
		</div><!-- // .bc-feature-component__content -->
	</section><!-- // .bc-feature-component -->
	<!-- //Meet the Board -->
	<!-- ISD Values -->
	<section class="bc-feature-component bc-one-col-feature has-brand-darker-background">     
		<div class="bc-feature-component__content">
			<div class="bc-feature-component__content__text-content">
				<h1>Our Values</h1>
				<p class="bc-feature-component__intro">The <a href="https://www.ibo.org/benefits/learner-profile/">International Baccalaureate (IB) Learner Profile</a> represents a common set of values across all IB World Schools. The Learner Profile provides a long-term vision of education.</p> 
				<p>At ISD all community members are encouraged to recognise, model and support these attributes.</p>
				<p>The Learner Profile encourages IB students to become:</p>
				<ul class="bc-en-dash-list">  
					<li>Inquirers</li>
					<li>Knowledgeable</li>
					<li>Thinkers</li>
					<li>Communicators</li>
					<li>Principled</li>
					<li>Open-minded</li>
					<li>Caring</li>
					<li>Risk-takers</li>
					<li>Balanced</li>
					<li>Reflective</li>
				</ul>
			</div>
		</div><!-- // .bc-inner-page-content__content -->
	</section><!-- // .bc-feature-component -->
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
	<!-- // About Dublin -->
	<?php  
		//get_inner_section_nav('More About ISD', array('Frequently Asked Questions' => '' . get_permalink(22) . '', 'Fees' => '' . get_permalink(57) . ''));
		get_inner_section_nav();
		get_global_CTA();
		get_footer();
		get_floating_section_nav(); 
	?>