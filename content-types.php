<?php
		/* Template Name: Sample content types */
	include 'php-includes/global-functions.php';
	get_header('Welcome [Content types]');
?>
<body class="bc-feature-page"> 
	<?php get_site_header(); ?>
	<!-- Hero with image -->
	<section class="bc-hero bc-hero--is-feature has-waves">
		<div class="bc-hero__content">
			<div class="bc-hero__body">
				
				<div class="bc-hero__body__text bc-fade-in-up--is-not-visible"> 
					<h1 class="bc-hero__heading">Hero with image</h1>
					<div class="bc-hero__body__text__IB">
						<img src="<?php echo get_theme_file_uri('/media/ib-world-school-logo-2-colour.png'); ?>" alt="ISD is an International Baccalaureate World School">
						<p>ISD is an International Baccalaureate World School</p> 
					</div>
					<!--<p class="bc-hero__tagline">International Education in the heart of Dublin</p> -->
				</div><!-- // .bc-hero__body__text -->
				<img src="<?php echo get_theme_file_uri('/media/kids-carefree--lines.svg'); ?>" alt="Feel the energy at ISD" class="is-kids-lines">
			</div><!-- // .bc-hero__body -->
			<img class="bc-hero__image" src="<?php echo get_theme_file_uri('/media/happy-kid.jpg '); ?>" alt="Happy kid" >
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
	
	
	<!-- 4-col Grid -->
	<section class="bc-4x4-grid-feature bc-feature-component" aria-label="Learning for Life"> 
		<header class="bc-feature-component__header "> 
			<div class="bc-feature-component__content__text-content">
				<p class="bc-content-label ib-world-school">
					<img src="<?php echo get_theme_file_uri('/media/ib-world-school-logo-1-colour.svg'); ?>" alt="International School of Dublin is an IB World School">
					The International Baccalaureate
				</p>
				<h1 class="bc-feature-component__heading">[<code>4-col grid</code>]</h1>
				<p class="bc-feature-component__intro"><em>“Imagine a worldwide community of schools, educators and students with a shared vision and mission to empower young people with the skills, values and knowledge to create a better and more peaceful world. This is the International Baccalaureate”</em></p>
				<p><b> -- International Baccalaureate Organisation</b></p>
			</div>
		</header>
		<article class="bc-feature-component__content">
			<div class="bc-card has-image bc-fade-in-up--is-not-visible">	
				<picture class="bc-card__media">
					<img src="<?php echo get_theme_file_uri('/media/multicultural-kids-16x9.jpg'); ?>" alt="Happy kids">
				</picture>
				<h2 class="bc-card__heading">Inquiry based learning</h2>
				<p>Inquiry is all about meaning making and demands many skills of a learner, specifically higher-order thinking which includes wondering, planning, analysing, creating and reflecting</p>
			</div>
			<div class="bc-card has-image bc-fade-in-up--is-not-visible">
				<picture class="bc-card__media">
					<img src="<?php echo get_theme_file_uri('/media/multicultural-kids-16x9.jpg'); ?>" alt="Happy kids">
				</picture>
				<h2 class="bc-card__heading">Student Centred</h2>
				<p>Placing learners at the heart of the learning process shifts the focus and ownership of instruction from the teacher to student. It provides choice, agency and self-efficacy.</p>
				
			</div>
			<div class="bc-card has-image bc-fade-in-up--is-not-visible">
				<picture class="bc-card__media">
					<img src="<?php echo get_theme_file_uri('/media/multicultural-kids-16x9.jpg'); ?>" alt="Happy kids">
				</picture>
				<h2 class="bc-card__heading">Skills for the Future</h2>	
				<p>In an ever changing world, the future is unpredictable. At International School of Dublin (ISD) we prepare our learners by creating learning experiences with meaningful and authentic contexts.</p>
				
			</div>
			<div class="bc-card has-image bc-fade-in-up--is-not-visible">
				<picture>
					<img src="<?php echo get_theme_file_uri('/media/multicultural-kids-16x9.jpg'); ?>" alt="Happy kids">
				</picture>
				<h2 class="bc-card__heading">Global citizens</h2>
				<p>The IB Primary Years Programme (IB PYP) is guided by six themes of global significance. They have been created so students are open to others and to the world; are aware of humans&apos; interconnectedness and recognise their common humanity</p>
				
			</div>
		</article><!-- // .bc-4-col-feature__content -->
		<div class="bc-feature-component__cta ">
			<div class="bc-feature-component__content__text-content">
					<a class="bc-button" href="teaching-and-learning.php">
						Learn about the IB at ISD
						<svg class="bc-svg-icon">
							<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use>  
						</svg>
					</a>
			</div>
		</div>
	</section><!-- // .bc-4x4-grid-feature -->
	<!-- Two col media feature -->
	<section id="bc-two-col-media-feature" class="bc-2-col-media-feature bc-feature-component has-shade-gradient">
		<article class="bc-feature-component__content">
			<p class="bc-content-label">
					<svg class="bc-svg-icon"> 
						<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#pupil-experience-reverse"></use>  
					</svg>
					Content label
			</p>
			<div class="bc-2-col-media-feature__media">
				<picture class="bc-2-col-media-feature__image bc-responsive-embed">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/FOhS6viEg4w?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>		
				</picture>
			</div>
			<div class="bc-2-col-media-feature__text">
				
				<h1 class="bc-feature-component__heading">Two-col media feature</h1>
				<p class="bc-feature-component__intro">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni.</p>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. </p>
				<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit ex ea commodi consequatur?</p>
				<div class="bc-feature-component__cta">
					<a class="bc-button" href="javascript:void(0)">
						Find out more about 
						<svg class="bc-svg-icon"> 
							<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use>  
						</svg>
					</a>	
				</div>
			</div>
		</article>
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
	</section><!-- // .bc-2-col-media-feature -->
	<!-- // Two col media feature -->
	<!-- Hero slider -->
	<section id="bc-hero-slider" class="bc-flickty-slider is-full-width"> 
		<a href="javascript:void(0)" class="bc-flickty-slider__prev is-inactive">
			<svg class="bc-svg-icon">
				<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#carat"></use>  
			</svg>
		</a>
		<a href="javascript:void(0)" class="bc-flickty-slider__next">
			<svg class="bc-svg-icon">
				<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#carat"></use>  
			</svg>
		</a>
		<article class="bc-flickty-slider__slide"> 
			<div class="bc-flickty-slider__slide__overlay"></div> 
			
			<img src="<?php echo get_theme_file_uri('/media/irish-family--portrait.jpg'); ?>" alt="A family" class="bc-flickty-slider__slide__image"> 
			<img src="<?php echo get_theme_file_uri('/media/irish-family.jpg'); ?>" alt="A family" class="bc-flickty-slider__slide__image bc-flickty-slider__slide__image--landscape">
			
			<div class="bc-flickty-slider__slide__content">
				<h1 class="bc-flickty-slider__slide__heading">A progressive learning alternative</h1> 
				<h3  class="bc-flickty-slider__slide__sub-heading">Parent/pupil name</h3>
				<p  class="bc-flickty-slider__slide__leader">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam</p>
				<p class="bc-icon-link bc-flickty-slider__slide__link">
					Read all about it 
					<svg class="bc-svg-icon">
						<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use>  
					</svg>
				</p>
			</div>
		</article>
		<article class="bc-flickty-slider__slide"> 
			<div class="bc-flickty-slider__slide__overlay"></div> 
			<img src="<?php echo get_theme_file_uri('/media/irish-family--portrait.jpg'); ?>" alt="A family" class="bc-flickty-slider__slide__image"> 
			<img src="<?php echo get_theme_file_uri('/media/irish-family.jpg'); ?>" alt="A family" class="bc-flickty-slider__slide__image bc-flickty-slider__slide__image--landscape">
			
			<div class="bc-flickty-slider__slide__content">
				<h1 class="bc-flickty-slider__slide__heading">A progressive learning alternative #2</h1> 
				<h3  class="bc-flickty-slider__slide__sub-heading">Parent/pupil name</h3>
				<p  class="bc-flickty-slider__slide__leader">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam</p>
				<p class="bc-icon-link bc-flickty-slider__slide__link">
					Read all about it 
					<svg class="bc-svg-icon">
						<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use>  
					</svg>
				</p>
			</div>
		</article>
	</section><!-- // .bc-flickty-slider - hero slider -->
	<!-- In-page/Campaign Hero -->
	<section class="bc-hero bc-hero--inpage has-waves has-mid-green-grad"> 
		<div class="bc-hero__content">
			<div class="bc-hero__body">
				<div class="bc-content-label bc-fade-in-up--is-not-visible">
					<svg class="bc-svg-icon"> 
						<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#family-simple-icon"></use>  
					</svg>
					Do your campaign
				</div><!-- // .bc-content-label -->
				<div class="bc-hero__body__text bc-fade-in-up--is-not-visible">
					<h1 class="bc-hero__heading ">In-page/Campaign Hero</h1>
					<p class="bc-hero__tagline">Tagline</p>
					<p class="">No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue.</p>
					<div class="bc-hero__cta">
						<a href="<?php echo get_permalink(15) ?>" class="bc-button">
							Everyday&apos;s a school day
							<svg class="bc-svg-icon">
								<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use>  
							</svg>
						</a> 
					</div>
				</div><!-- // .bc-hero__body__text --> 
			</div><!-- // .bc-hero__body -->
			<div class="media-overlay"></div> 
			<img class="bc-hero__image" src="<?php echo get_theme_file_uri('/media/happy-kid.jpg '); ?>" alt="Happy kid" >
		</div><!-- // .bc-hero__content -->
		<div class="wave-wrap">
			<?php
				echo '<?xml version="1.0" encoding="utf-8"?>'
			?>
			<!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
			<svg version="1.1" id="Layer_1" class="wave-wrap__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 viewBox="0 0 1440 50" xml:space="preserve">
				<path id="isd-rainbow-wave" class="wave-wrap__rainbow" d="M0,1v1v25.2c0,0,200.9-24.7,360-24.7S923.9,50,1080,50s360-23.5,360-23.5V2V1H0z"/>
				<path class="isd-wave"class="wave-wrap__wave" id="isd-wave" d="M0,0v1v24.7C0,25.7,200.9,1,360,1s563.9,47,720,47s360-22.5,360-22.5V1V0H0z"/>
			</svg>
		</div><!-- // .bc-wave-wrap -->
	</section><!-- // .bc-hero--inpage -->
	<?php
		get_global_CTA();
		get_footer();
	?>
	
	<script src="scripts/app-concat.min.js"></script>
</body>
</html> 