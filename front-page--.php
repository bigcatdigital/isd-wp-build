<?php
	/* Template Name: Homepage */
	include 'php-includes/global-functions.php';
	get_header();
?>

<body class="bc-feature-page"> 
	<?php get_site_header(); ?>

		<!-- Hero with image -->
		<section class="bc-hero bc-hero--is-feature has-waves">
			<div class="bc-hero__content">
				<div class="bc-hero__body">
					<div class="bc-hero__body__text bc-fade-in-up--is-not-visible"> 
						<h1 class="bc-hero__heading"><?php the_field('hero-title', 18) ?></h1>
						<div class="bc-hero__body__text__IB">
							<?php if (get_field('show-world-school-icon', 18)[0] == 'Yes') { ?>
								<img src="<?php echo get_theme_file_uri('/media/ib-world-school-logo-2-colour.png'); ?>" alt="ISD is an International Baccalaureate World School">
								<p>ISD is an International Baccalaureate World School</p> 
							<?php } ?>
						</div><!-- // .bc-hero__body__text__IB -->
					</div><!-- // .bc-hero__body__text -->
					<img src="<?php echo get_theme_file_uri('/media/kids-carefree--lines.svg'); ?>" alt="Feel the energy at ISD" class="is-kids-lines">		
				</div><!-- // .bc-hero__body -->
				<div class="bc-hero__video">
					<video src="<?php the_field('hero-video', 18); ?>" class="bc-hero__video__video" autoplay muted preload="metadata" playsinline></video>
					<a href="javascript:void(0)" class="bc-hero__video__controls">
						<span class="bc-hero__video__controls__play-icon">
							<svg class="bc-svg-icon ">
								<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#play"></use>  
							</svg>	
							<span class="bc-hero__video__controls__text">Play video</span>
						</span>
						<span class="bc-hero__video__controls__pause-icon">
							<svg class="bc-svg-icon bc-hero__video__controls__pause-icon">
								<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#pause"></use>  
							</svg>	
							<span class="bc-hero__video__controls__text">Pause video</span>
						</span>
					</a>
				</div>
				<div class="media-overlay"></div><!-- // .media-overlay -->
			</div><!-- // .bc-hero__content -->
			<div class="wave-wrap">
				<?php
					echo '<?xml version="1.0" encoding="utf-8"?>'
				?>
				<!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 viewBox="0 0 1440 50" xml:space="preserve">
					<path style="fill: url(#isd-rainbow-grad)" id="isd-rainbow-wave" class="st1" d="M0,1v1v25.2c0,0,200.9-24.7,360-24.7S923.9,50,1080,50s360-23.5,360-23.5V2V1H0z"/>
					<path class="isd-wave" id="isd-wave" d="M0,0v1v24.7C0,25.7,200.9,1,360,1s563.9,47,720,47s360-22.5,360-22.5V1V0H0z"/>
				</svg>
			</div><!-- // .bc-wave-wrap -->
		</section><!-- // .bc-hero -->
	<section class="bc-feature-component site-quicklinks-component has-waves has-shade-01">
		<div class="bc-feature-component__wrap">
			<div class="bc-feature-component__content">
				<div class="bc-feature-component__content__text-content">
						<nav class="site-quicklinks">
						<h2 class="site-quicklinks__heading">
							<span class="site-quicklinks__heading__label">
								What would you like to know?	
							</span>
							<a href="javascript:void(0)" class="site-quicklinks__toggle bc-navigation-toggle">
									<?php
							echo '<?xml version="1.0" encoding="utf-8"?>'
						?>
									<!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
									<svg version="1.1" class="bc-menu-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
										 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
										<g class="bc-menu-icon__lines">
											<line class="bc-menu-icon__line bc-menu-icon__lines__line bc-menu-icon__lines__line--top" x1="1" y1="25" x2="99" y2="25"/>
											<line class="bc-menu-icon__line bc-menu-icon__lines__line bc-menu-icon__lines__line--middle" x1="1" y1="50" x2="99" y2="50"/>
											<line class="bc-menu-icon__line bc-menu-icon__lines__line bc-menu-icon__lines__line--bottom" x1="1" y1="75" x2="99" y2="75"/>						
										</g>
										<g class="bc-menu-icon__active-lines">
											<line class="bc-menu-icon__line bc-menu-icon__lines__active-line bc-menu-icon__lines__active-line--first" x1="-70" y1="-70" x2="0" y2="0"/>
											<line class="bc-menu-icon__line bc-menu-icon__lines__active-line bc-menu-icon__lines__active-line--second" x1="100" y1="0" x2="170" y2="-70"/>
										</g>
									</svg>
							</a>
						</h2>
						<!-- What would you like to know links -->
						<div class="site-quicklinks__wrapper">
							<ul class="site-quicklinks__list" style="padding-bottom: 0.75rem"> 
								<li class="site-quicklinks__item "><a class="is-site-quicklink" href="<?php echo get_permalink(20) ?>">Admissions</a></li>
								<li class="site-quicklinks__item "><a class="is-site-quicklink" href="<?php echo get_permalink(13) ?>">About the School</a></li>
								<li class="site-quicklinks__item "><a class="is-site-quicklink" href="<?php echo get_permalink(86) ?>">Learning and Teaching at ISD</a></li>
								<li class="site-quicklinks__item "><a class="is-site-quicklink" href="<?php echo get_permalink(176) ?>">Support for your transition</a></li>
								<li class="site-quicklinks__item "><a class="is-site-quicklink" href="<?php echo rtrim(get_permalink(86), '/') . '#language-support' ?>">Language support for your children</a></li>
								<li class="site-quicklinks__item "><a class="is-site-quicklink" href="<?php echo get_permalink(15) . '#isd-community' ?>">Parents&apos; Community</a></li> 
								<li class="site-quicklinks__item "><a class="is-site-quicklink" href="<?php echo get_permalink(102) ?>">After School Program</a></li>
								<li class="site-quicklinks__item "><a class="is-site-quicklink" href="<?php echo get_permalink(13) ?>">Our Mission &amp; Values</a></li>
								<li class="site-quicklinks__item "><a class="is-site-quicklink" href="<?php echo rtrim(get_permalink(13), '/') . '#our-team'?>">Meet the people at ISD</a></li>
							</ul>		
						</div>
						<!-- //What would you like to know links -->
					</nav><!-- // .site-quicklinks --> 
				</div><!-- // .bc-feature-component__content -->
			</div><!-- // .bc-feature-component__content .site-quicklinks --> 
			<div class="media-overlay"></div><!-- // .media-overlay -->
		</div><!-- // .bc-feature-component__wrap -->
		<div class="wave-wrap">
			<?php
				echo '<?xml version="1.0" encoding="utf-8"?>'
			?>
			<!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
			<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 viewBox="0 0 1440 50" xml:space="preserve">
				<path style="fill: url(#isd-rainbow-grad)" id="isd-rainbow-wave" class="st1" d="M0,1v1v25.2c0,0,200.9-24.7,360-24.7S923.9,50,1080,50s360-23.5,360-23.5V2V1H0z"/>
				<path class="isd-wave" id="isd-wave" d="M0,0v1v24.7C0,25.7,200.9,1,360,1s563.9,47,720,47s360-22.5,360-22.5V1V0H0z"/>
			</svg>
		</div><!-- // .bc-wave-wrap -->
		
	</section><!-- // .bc-feature-component -->
	<section class="bc-one-col-feature bc-feature-component has-high-chroma--orange" aria-label="Welcome to ISD"> 
		<article class="bc-feature-component__content"> 
			<div class="bc-feature-component__content__text-content">
			<p class="bc-content-label">
				<svg class="bc-svg-icon">
					<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#about-isd"></use>  
				</svg>
				Welcome to ISD
			</p>
			<h1 class="bc-feature-component__heading">Innovative, Inclusive, Progressive</h1>
			<p class="bc-feature-component__intro">The International School of Dublin (ISD) was established in 2007 and is the first accredited <a href="https://www.ibo.org/">International Baccalaureate</a> (IB) World Primary School in Ireland. It is a culturally diverse, private, not for profit school that is co-educational and non-denominational.</p>
			<p>At ISD, one of the fundamental goals of education is to encourage a love of learning. Upon a visit, you will find a welcoming and lively environment which is characterised by collaborative and purposeful activity. Students benefit from an innovative form of engagement and a broad education that promotes learning how to think instead of what to think.</p>
			<p>Small class sizes are guided by internationally experienced staff. Through inquiry, learners explore the world in which they live and ultimately develop themselves as internationally-minded citizens</p>
			</div>
		</article><!-- // .bc-feature-component__content -->
		<div class="bc-feature-component__cta">
			<div class="bc-feature-component__content__text-content">
					<a class="bc-button" href="<?php echo get_permalink(13) ?>">
						Find out what sets us apart
						<svg class="bc-svg-icon">
							<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use>  
						</svg>
					</a>	
			</div><!-- // .bc-feature-component__cta -->
		</div>
		<div class="bc-elipses"> 
			<svg class="bc-elipses__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 280"> 
				<title>Elipses</title>
				<!-- fill:url(#linear-gradient) -->
				<circle class="bc-elipses__elipse" /> 
				<circle class="bc-elipses__elipse" /> 
				<circle class="bc-elipses__elipse" /> 
				<circle class="bc-elipses__elipse" /> 
				<circle class="bc-elipses__elipse" /> 
			</svg>
		</div>
	</section><!-- // .bc-one-col-feature -->
	<section class="bc-feature-component bc-2-col-full-features" aria-label="An IB Word School and Student Experience"> 
		<article class="bc-2-col-full-feature is-brand-primary">
			<div class="bc-feature-component__content">
				<div class="bc-2-col-full-feature__image">
					<picture>
						<source srcset="<?php echo get_theme_file_uri('/media/ib-world-school-logo-2-colour-padded.png'); ?>" media="(max-width: 859px)">
						<img src="<?php echo get_theme_file_uri('/media/ib-world-school-logo-2-colour-padded.png'); ?>" alt="International Baccalaureate World School logo">
					</picture>
				</div>
				<div class="bc-2-col-full-feature__text">
					<p class="bc-content-label ib-world-school">
						<img src="<?php echo get_theme_file_uri('/media/ib-world-school-logo-2-colour.png'); ?>" alt="ISD is an International Baccalaureate World School">
						The International Baccalaureate
					</p>
					<h1 class="bc-2-col-full-feature__heading">An IB World School</h1>
					<p class="bc-feature-component__intro">The International School of Dublin (ISD) is an International Baccalaureate (IB) World School. There are more than one million IB students (aged 3-19) in over 150 countries worldwide.</p>
					<p>The IB is increasingly recognised as the gold-standard measurement of academic and intellectual development both by universities and leading graduate employers.</p> 

					<a class="bc-button" href="<?php echo get_permalink(86) ?>">
						Learning &amp; Teaching at ISD
						<svg class="bc-svg-icon">
							<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use>  
						</svg>
					</a>	
				</div>	
			</div><!-- // .bc-feature-component__content -->
		</article><!-- // .bc-2-col-full-feature -->
		<article class="bc-2-col-full-feature">
			<div class="bc-feature-component__content">
				<div class="bc-2-col-full-feature__image">
					<picture>
						<source srcset="<?php echo get_theme_file_uri('/media/children-together.jpg'); ?>" media="(max-width: 859px)">
						<img src="<?php echo get_theme_file_uri('/media/children-together.jpg'); ?>" alt="Find out about the Student Experience at ISD">
					</picture>
				</div>
				<div class="bc-2-col-full-feature__text">
					<p class="bc-content-label">
						<svg class="bc-svg-icon">
							<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#pupil-experience"></use>  
						</svg>
						Student Experience
					</p>
					<h1 class="bc-2-col-full-feature__heading">An Experience for Life</h1>
					<p class="bc-feature-component__intro">At ISD we work hard to ensure our students&apos; learning experiences are distinctive, varied and eclectic.</p>
					<p>We pride ourselves on our ability to make students&apos; educational journeys fun and engaging.</p> 
					<a class="bc-button" href="<?php echo get_permalink(24) ?>">
						The ISD Student Experience
						<svg class="bc-svg-icon">
							<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use>  
						</svg>
					</a>	
				</div>
			</div><!-- // .bc-feature-component__content -->
		</article><!-- // .bc-2-col-full-feature -->
	</section><!-- // .bc-2-col-full-features -->
	<section class="bc-hero bc-hero--inpage has-mid-green-grad"> 
		<div class="bc-hero__content">
			<div class="bc-hero__body">
				<div class="bc-hero__body__text__IB bc-content-label bc-fade-in-up--is-not-visible">
					<svg class="bc-svg-icon"> 
						<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#family-simple-icon"></use>  
					</svg>
					Families in Ireland
				</div><!-- // .bc-content-label -->
				<div class="bc-hero__body__text bc-fade-in-up--is-not-visible">
					<h1 class="bc-hero__heading">A Progressive Learning Alternative</h1>
					<p class="bc-hero__tagline">International education for families in Ireland</p>
					<p>An international education is not solely for international families, find out how ISD offers local families a progressive learning alternative.</p>
					<div class="bc-hero__cta">
						<a href="<?php echo get_permalink(15) ?>" class="bc-icon-link--featured">
							Learn more about this learning alternative
							<svg class="bc-svg-icon">
								<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use> 	
							</svg>
						</a> 
					</div>
				</div><!-- // .bc-hero__body__text --> 
			</div><!-- // .bc-hero__body -->
			<img class="bc-hero__image" src="<?php echo get_theme_file_uri('/media/irish-family.jpg '); ?>" alt="A family" >
			<div class="media-overlay"></div> 
			
		</div><!-- // .bc-hero__content -->
		
	</section><!-- // .bc-hero--inpage -->
	<section class="bc-feature-component bc-one-col-feature  has-shade-02">     
		<div class="bc-feature-component__content">
			<div class="bc-feature-component__content__text-content">
				<h1 class="bc-feature-component__heading">Mission statement</h1>
				<p>ISD endeavours to develop the intellectual, aesthetic, moral, physical, social and emotional potential of its students through inquiry-based teaching and learning. </p>
				<p>ISD strives to be a centre for professional and curriculum development. The school provides excellent international education through the promotion of high academic standards, international understanding and full parental involvement.</p>
			</div>
		</div><!-- // .bc-inner-page-content__content -->
	</section><!-- // .bc-inner-page-content Mission Statement -->
	<?php  
		get_global_CTA();
		get_footer();
		get_floating_section_nav(); 
	?>