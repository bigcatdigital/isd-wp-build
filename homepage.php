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
				<!--<div class="bc-hero__body__text__IB bc-fade-in-up--is-not-visible">
					<img src="<?php echo get_theme_file_uri('/media/ib-world-school-logo-2-colour.png'); ?>" alt="ISD is an International Baccalaureate World School">
					<p>ISD is an International Baccalaureate World School</p> 
				</div>-->
				<div class="bc-hero__body__text bc-fade-in-up--is-not-visible"> 
					<h1 class="bc-hero__heading">International School of Dublin</h1>
					<div class="bc-hero__body__text__IB">
						<img src="<?php echo get_theme_file_uri('/media/ib-world-school-logo-2-colour.png'); ?>" alt="ISD is an International Baccalaureate World School">
						<p>ISD is an International Baccalaureate World School</p> 
					</div>
					<!--<p class="bc-hero__tagline">International Education in the heart of Dublin</p> -->
				</div><!-- // .bc-hero__body__text -->
				<img src="<?php echo get_theme_file_uri('/media/kids-carefree--lines.svg'); ?>" alt="Feel the energy at ISD" class="is-kids-lines">
			</div><!-- // .bc-hero__body -->
			<div class="bc-hero__video">
				<video src="<?php echo get_theme_file_uri('/media/videos/ISD_trailer_no audio_no logos_low-br.mp4'); ?>" class="bc-hero__video__video" autoplay muted preload="metadata" playsinline></video>
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
			
			<!--<img class="bc-hero__image" src="<?php echo get_theme_file_uri('/media/happy-kid.jpg '); ?>" alt="Happy kid" >-->
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
						<div class="site-quicklinks__wrapper">
							<ul class="site-quicklinks__list" style="padding-bottom: 0.75rem"> 
								<li class="site-quicklinks__item "><a class="is-site-quicklink" href="javascript:void(0)">Admissions</a></li>
								<li class="site-quicklinks__item "><a class="is-site-quicklink" href="javascript:void(0)">About the School</a></li>
								<li class="site-quicklinks__item "><a class="is-site-quicklink" href="javascript:void(0)">Teaching and Learning at ISD</a></li>
								<li class="site-quicklinks__item "><a class="is-site-quicklink" href="javascript:void(0)">The International Baccalaureate</a></li>
								<li class="site-quicklinks__item "><a class="is-site-quicklink" href="javascript:void(0)">Support for your transition</a></li>
								<li class="site-quicklinks__item "><a class="is-site-quicklink" href="javascript:void(0)">Language support for your children</a></li>
								<li class="site-quicklinks__item "><a class="is-site-quicklink" href="javascript:void(0)">Parents&apos; Community</a></li>
								<li class="site-quicklinks__item "><a class="is-site-quicklink" href="javascript:void(0)">After School Care</a></li>
								<li class="site-quicklinks__item "><a class="is-site-quicklink" href="javascript:void(0)">Our Mission &amp; Values</a></li>
								<li class="site-quicklinks__item "><a class="is-site-quicklink" href="javascript:void(0)">Meet the people at ISD</a></li>
							</ul>		
						</div>
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
			<h1 class="bc-feature-component__heading">Innovative, inclusive, progressive</h1>
			<p class="bc-feature-component__intro">The International School of Dublin (ISD) was established in 2007 and is the first accredited <a href="https://www.ibo.org/">International Baccalaureate</a> World Primary School in Ireland. It is a culturally diverse, private, not for profit school that is co-educational and non-denominational.</p>
			<p>At ISD, we feel a fundamental goal of education is to encourage a love of learning. Upon a visit, you will find a welcoming and lively environment which is characterised by collaborative and purposeful activity. Students benefit from an innovative form of engagement and a broad education that promotes learning how to think instead of what to think.</p>
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
	<section class="bc-feature-component has-coloured-cards has-shade-01">
		<div class="bc-feature-component__wrap">
			<header class="bc-feature-component__header bc-feature-component__header--minor">
				<div class="bc-feature-component__content__text-content">
					<h1 class="bc-feature-component__heading">Get Started Here</h1>
				</div>
			</header>
			<div class="bc-feature-component__content bc-3-columns ">
				<div class="bc-column bc-card">
					<h2 class="bc-card__heading">Admissions</h2>
					<p>Find the answers to all of your questions about starting at ISD here.</p>
					<a class="bc-icon-link" href="<?php echo get_permalink(20) ?>">
							Our admissions process explained
							<svg class="bc-svg-icon">
								<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use> 	
							</svg>
					</a>
				</div>
				<div class="bc-column bc-card">
					<h2 class="bc-card__heading">Teaching &amp; Learning</h2>
					<p>See why our teaching method is regarded as a gold-standard mesurement by universities and graduate employers.</p>
					<a class="bc-icon-link" href="<?php echo get_permalink(6) ?>">
						Find out about our adademic program
						<svg class="bc-svg-icon">
							<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use>  
						</svg>
					</a>
				</div>
				<div class="bc-column bc-card">
					<h2 class="bc-card__heading">About ISD</h2>
					<p>We provide array of high-standard educational choice in a co-educational, non-denominational and culturally diverse environment.</p>
					<a class="bc-icon-link" href="<?php echo get_permalink(13) ?>">
						Find out more about us
						<svg class="bc-svg-icon">
							<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use>  
						</svg>
					</a>
				</div>
			</div>
		</div><!-- // .bc-feature-component__wrap -->
		
	</section>
	<!-- // Get started here -->
	<section class="bc-feature-component bc-2-col-full-features" aria-label="The Pupil Experience at ISD"> 
		<article class="bc-2-col-full-feature is-brand-primary">
			<div class="bc-feature-component__content">
				<div class="bc-2-col-full-feature__image">
					<picture>
						<source srcset="<?php echo get_theme_file_uri('/media/children-running-up-driveway--16x9.jpg'); ?>" media="(max-width: 859px)">
						<img src="<?php echo get_theme_file_uri('/media/children-running-up-driveway.jpg'); ?>" alt="Find out about the Student Experience at ISD">
					</picture>
				</div>
				<div class="bc-2-col-full-feature__text">
					<p class="bc-content-label ib-world-school">
						<img src="<?php echo get_theme_file_uri('/media/ib-world-school-logo-2-colour.png'); ?>" alt="ISD is an International Baccalaureate World School">
						The International Baccalaureate
					</p>
					<h1 class="bc-2-col-full-feature__heading">An IB World School</h1>
					<p class="bc-feature-component__intro">The International School of Dublin (ISD) is an International Baccalaureate (IB) World School.  There are more than one million IB students (aged 3-19) in over 150 countries worldwide.</p>
					<p>The IB is increasingly recognised as the gold-standard measurement of academic and intellectual development both by universities and leading graduate employers.</p> 

					<a class="bc-button" href="<?php echo get_permalink(13) ?>">
						Find out what sets us apart
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
						<source srcset="<?php echo get_theme_file_uri('/media/children-running-up-driveway--16x9.jpg'); ?>" media="(max-width: 859px)">
						<img src="<?php echo get_theme_file_uri('/media/children-running-up-driveway.jpg'); ?>" alt="Find out about the Student Experience at ISD">
					</picture>
				</div>
				<div class="bc-2-col-full-feature__text">
					<p class="bc-content-label">
						<svg class="bc-svg-icon">
							<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#pupil-experience"></use>  
						</svg>
						Student Experience
					</p>
					<h1 class="bc-2-col-full-feature__heading">An experience for life</h1>
					<p class="bc-feature-component__intro">The International School of Dublin (ISD) is an International Baccalaureate (IB) World School.  There are more than one million IB students (aged 3-19) in over 150 countries worldwide.</p>
					<p>The IB is increasingly recognised as the gold-standard measurement of academic and intellectual development both by universities and leading graduate employers.</p> 
					
					<a class="bc-button" href="<?php echo get_permalink(13) ?>">
						Find out what sets us apart
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
					<h1 class="bc-hero__heading">A progressive learning alternative</h1>
					<p class="bc-hero__tagline">International education for families in Ireland</p>
					<p>The International School of Dublin offers international families and families in Ireland multi-denominational, co-educational and inclusive option for primary education.</p>
					<div class="bc-hero__cta">
						<a href="javascript:void(0)" class="bc-button ">
							Learn about our teaching method
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
	?>