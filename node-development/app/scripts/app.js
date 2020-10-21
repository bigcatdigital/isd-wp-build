(function bcScriptsWrap() {
	const $bc = (function bigCatScripts() {
		function _getDOMNode(selector) {
			let $el = null;
			if (typeof selector === 'string') {
				if (document.querySelector(selector) === null) {
					return false;
				}
				$el = document.querySelector(selector);
				return $el;
			} else if (selector instanceof Node) {
				$el = selector;
				return $el;
			} else {
				return false;
			}
		}
		function _getAllDOMNodes(selector) {
			let $els = null;
			if (typeof selector === 'string') {
				if (document.querySelectorAll(selector) === null) {
					return false;
				}
				$els = document.querySelectorAll(selector);
				return $els;
			} else {
				return false;
			}
		}
		function getOffset() {
			let $el = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : document;
			const elRect = $el.getBoundingClientRect();
			const scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;
			const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
			return { top: elRect.top + scrollTop, left: elRect.left + scrollLeft };
		}
		function toggleClass(el, classname, callback) {
			if (el !== undefined && el instanceof Node && classname !== undefined && typeof classname === 'string') {
				el.classList.toggle(classname);
				if (typeof callback == 'function') {
					callback(el, classname);
				}
			} else {
				throw new Error('Function classToggle requires: a HTML Node and a class name of type String');
			}
		}
		function selectSiblings(el, classname, callback) {
			if (el !== undefined && el instanceof Node && classname !== undefined && typeof classname === 'string') {
				//const allSiblings = ;
				var matchingSiblings = Array.from(el.parentNode.childNodes).filter(function (sibling) {
					if (classname) {
						return sibling.tagName !== undefined && sibling.classList.contains(classname) ? sibling : false;
					} else {
						return sibling.tagName !== undefined ? sibling : false;
					}
				});
				if (callback !== undefined && typeof callback == 'function') {
					callback(matchingSiblings);
				} else {
					return matchingSiblings;
				}
			} else {
				throw new Error('Function selectSiblings requires: a HTML Node and a class name of type String');
			}
		}
		function makeResponsiveiFrames(iframeParents) {
			iframeParents = Array.from(document.querySelectorAll(iframeParents));
			if (iframeParents.length > 0) {
				for (let parent in iframeParents) {
					const iframes = Array.from(iframeParents[parent].getElementsByTagName('iframe'));
					for (let iframe in iframes) {
						iframes[iframe].removeAttribute('width');
						iframes[iframe].removeAttribute('height');
					}
					iframeParents[parent].classList.remove('is-not-loaded');
				}
			}
			return;
		}
		function showHide(el, activeClass) {
			const _arguments = arguments;
			function _lerpShowHide($el, currentHeight, targetHeight) {
				if (Math.round(targetHeight) > Math.round(currentHeight)) {
					currentHeight += (targetHeight - currentHeight) * 0.25;
					requestAnimationFrame(function () {
						$el.style.height = currentHeight + 'px';
						_lerpShowHide($el, currentHeight, targetHeight);
					});
				} else if (Math.round(currentHeight) > Math.round(targetHeight)) {
					if (currentHeight < 2) {
						requestAnimationFrame(function () {
							$el.style.height = 0 + 'px';
						});
						return;
					}
					currentHeight -= (currentHeight - targetHeight) * 0.25;
					$el.style.height = currentHeight + 'px';
					requestAnimationFrame(function () {
						$el.style.height = currentHeight + 'px';
						_lerpShowHide($el, currentHeight, targetHeight);
					});
				} else {
					return;
				}
			}
			let $el = null;
			try {
				$el = _getDOMNode(el);
			} catch (err) {
				return console.log(err);
			}
			let elHeight = $el.scrollHeight;
			if ($el.classList.contains(activeClass)) {
				
				var elTransitions = $el.style.transition;
				$el.style.transition = '';
				requestAnimationFrame(function () {
					$el.style.height = elHeight + 'px';
					$el.style.transition = elTransitions;
					_lerpShowHide($el, elHeight, 0);
					$el.classList.remove(activeClass);
				});
			} else {
				requestAnimationFrame(function () {
					_lerpShowHide($el, $el.clientHeight, elHeight);
					$el.style.height = null;
					$el.classList.add(activeClass);
					$el.addEventListener('transitionend', function () {
						$el.removeEventListener('transitionend', _arguments.callee);
					});
				});
			}
		}
		const $gsap = gsap;
		function gsapScrollTo(targetScrollOptions, $el, cb) {
			$el = $el || window;
			$gsap.registerPlugin(ScrollToPlugin);
			const scrollOptions = Object.assign({ scrollTo: { x: 0, y: 0 }, duration: 1, ease: 'power1.in' }, targetScrollOptions);
			const scrollToTween = $gsap.to($el, scrollOptions).pause();
			if (typeof cb === 'function') {
				scrollToTween.eventCallback('onComplete', cb);
				scrollToTween.play();
			} else {
				scrollToTween.play();
			}
		}
		function gsapFadeIn($el, targetFadeInOpts, cb) {
			if ($el) {
				$gsap.to($el, Object.assign({ duration: 0.82, opacity: 1, y: 0 }, targetFadeInOpts));
			} else {
				return new Error('gsapFadeIn requries a target DOMNode');
			}
			if (typeof cb === 'function') {
				cb($el);
			}
		}
		function gsapShowHide($el, GSAPOptions, cb) {
			if ($el) {
				let opts = Object.assign({ duration: 0.482, ease: 'power1.out' }, GSAPOptions);
				opts.height = $el.scrollHeight < opts.height ? opts.height : '0px';
				$gsap.to($el, opts).eventCallback('onComplete', cb, [$el]);
			} else {
				return new Error('gsapFadeIn requries a target DOMNode');
			}
		}
		function gsapShow($el, height, GSAPOptions, cb) {
			if ($el) {
				let opts = Object.assign({ duration: 0.482, ease: 'power1.out' }, GSAPOptions);
				opts.height = height;
				$gsap.to($el, opts).eventCallback('onComplete', cb, [$el]);
			} else {
				return new Error('gsapShow requries a target DOMNode');
			}
		}
		function gsapHide($el, GSAPOptions, cb) {
			if ($el) {
				let opts = Object.assign({ duration: 0.482, ease: 'power1.out' }, GSAPOptions);
				opts.height = 0;
				$gsap.to($el, opts).eventCallback('onComplete', cb, [$el]);
			} else {
				return new Error('gsapHide requries a target DOMNode');
			}
		}
		return {
			toggleClass: toggleClass,
			selectSiblings: selectSiblings,
			responsiveiFrames: makeResponsiveiFrames,
			getElOffset: getOffset,
			showHide: showHide,
			gsap: $gsap,
			gsapFns: { scrollTo: gsapScrollTo, fadeIn: gsapFadeIn, showHide: gsapShowHide, show: gsapShow, hide: gsapHide },
			utils: { getDomNode: _getDOMNode, getDomNodes: _getAllDOMNodes },
		};
	})();
	window.onload = function () {
		$bc.responsiveiFrames('.bc-responsive-embed');
		var $pageFeatures = document.querySelectorAll('.bc-hero, .bc-feature-component').length > 0 ? document.querySelectorAll('.bc-hero, .bc-feature-component') : null;
		function navTogglersFactory($navigationToggler, opts, cb) {
			const $menuIcon = $navigationToggler.querySelector('.bc-menu-icon');
			const $defaultIconTop = $menuIcon.querySelector('.bc-menu-icon__lines__line--top');
			const $defaultIconMiddle = $menuIcon.querySelector('.bc-menu-icon__lines__line--middle');
			const $defaultIconBottom = $menuIcon.querySelector('.bc-menu-icon__lines__line--bottom');
			const $activeIconFirst = $menuIcon.querySelector('.bc-menu-icon__lines__active-line--first');
			const $activeIconSecond = $menuIcon.querySelector('.bc-menu-icon__lines__active-line--second');
			let options = { duration: 0.28, easing: 'power1.out', defaultStroke: '#fff', activeStroke: '#303030' };
			Object.assign(options, opts);
			const defaultIconTopStart = { attr: { x1: 1, y1: 25, x2: 99, y2: 25 }, duration: options.duration, ease: options.easing };
			const defaultIconTopActive = { attr: { x1: -99, y1: 25, x2: -1, y2: 25 }, duration: options.duration, ease: options.easing };
			const defaultIconMiddleStart = { attr: { x1: 1, y1: 50, x2: 99, y2: 50 }, duration: options.duration, ease: options.easing };
			const defaultIconMiddleActive = { attr: { x1: 101, y1: 50, x2: 199, y2: 50 }, duration: options.duration, ease: options.easing };
			const defaultIconBottomStart = { attr: { x1: 1, y1: 75, x2: 99, y2: 75 }, duration: options.duration, ease: options.easing };
			const defaultIconBottomActive = { attr: { x1: -99, y1: 75, x2: -1, y2: 75 }, duration: options.duration, ease: options.easing };
			const activeIconFirstStart = { attr: { x1: -70, y1: -70, x2: 0, y2: 0 }, stroke: options.defaultStroke, duration: options.duration, ease: options.easing };
			const activeIconFirstActive = { attr: { x1: 15, y1: 15, x2: 85, y2: 85 }, stroke: options.activeStroke, duration: options.duration, ease: options.easing };
			const activeIconSecondStart = { attr: { x1: 100, y1: 0, x2: 170, y2: -70 }, stroke: options.defaultStroke, duration: options.duration, ease: options.easing };
			const activeIconSecondActive = { attr: { x1: 15, y1: 85, x2: 85, y2: 15 }, stroke: options.activeStroke, duration: options.duration, ease: options.easing };
			const defaultTl = $bc.gsap.timeline();
			const activeTl = $bc.gsap.timeline();
			$navigationToggler.addEventListener('click', function navIconClickHandler(evt) {
				const $this = evt.currentTarget;
				evt.preventDefault();
				if ($this.classList.contains('is-animating')) {
					return;
				}
				$this.classList.add('is-animating');
				if ($this.classList.contains('is-active')) {
					activeTl.seek(0);
					activeTl.to($activeIconFirst, activeIconFirstStart);
					activeTl.to($activeIconSecond, activeIconSecondStart, '<');
					activeTl.to($defaultIconTop, defaultIconTopStart, '>');
					activeTl.to($defaultIconMiddle, defaultIconMiddleStart, '<');
					activeTl.to($defaultIconBottom, defaultIconBottomStart, '<').eventCallback('onComplete', function () {
						$this.classList.remove('is-active');
						$this.classList.remove('is-animating');
					});
				} else {
					defaultTl.seek(0);
					defaultTl.to($defaultIconTop, defaultIconTopActive, 0);
					defaultTl.to($defaultIconMiddle, defaultIconMiddleActive, 0);
					defaultTl.to($defaultIconBottom, defaultIconBottomActive, 0);
					defaultTl.to($activeIconFirst, activeIconFirstActive, '>');
					defaultTl.to($activeIconSecond, activeIconSecondActive, '<').eventCallback('onComplete', function () {
						$this.classList.add('is-active');
						$this.classList.remove('is-animating');
					});
				}
				if (typeof cb === 'function') {
					cb($this);
				}
			});
			return $navigationToggler;
		}// navtogglersFactory
		const $mainNavIcon = document.querySelector('.bc-main-navigation-toggle .menu-icon-wrap');
		navTogglersFactory($mainNavIcon, { activeStroke: '#017CC0', duration: 0.16 }, function ($mainNavIcon) {
			const $siteHeader = $mainNavIcon.closest('.bc-site-header');
			requestAnimationFrame(function () {
				$siteHeader.classList.toggle('has-active-navigation');
			});
		});
		
		const $floatingWidget = document.querySelector('.bc-floating-widget') ? document.querySelector('.bc-floating-widget') : null;
		if ($floatingWidget) {
			const dur = 0.4;
			const easing = 'back(0.5)';
			const scrollThreshold = $floatingWidget.scrollHeight;
			if (window.scrollY >= scrollThreshold && $floatingWidget.classList.contains('is-visible') === false) {
				if ($floatingWidget.classList.contains('is-visible')) {
					$bc.gsap.to($floatingWidget, { bottom: '-100%', duration: dur, ease: easing }).eventCallback('onComplete', function () {
						$floatingWidget.classList.remove('is-visible');
					});
				} else {
					$bc.gsap.to($floatingWidget, { bottom: '3%', duration: dur, ease: easing }).eventCallback('onComplete', function () {
						$floatingWidget.classList.add('is-visible');
					});
				}
			}
			window.onscroll = function () {
				if (window.scrollY >= scrollThreshold && $floatingWidget.classList.contains('is-visible') === false) {
					if ($floatingWidget.classList.contains('is-visible')) {
						$bc.gsap.to($floatingWidget, { bottom: '-100%', duration: dur, ease: easing }).eventCallback('onComplete', function () {
							$floatingWidget.classList.remove('is-visible');
						});
					} else {
						$bc.gsap.to($floatingWidget, { bottom: '3%', duration: dur, ease: easing }).eventCallback('onComplete', function () {
							$floatingWidget.classList.add('is-visible');
						});
					}
				} else if (window.scrollY < scrollThreshold && $floatingWidget.classList.contains('is-visible')) {
					if ($floatingWidget.classList.contains('is-visible')) {
						$bc.gsap.to($floatingWidget, { bottom: '-100%', duration: dur, ease: easing }).eventCallback('onComplete', function () {
							$floatingWidget.classList.remove('is-visible');
						});
					} else {
						$bc.gsap.to($floatingWidget, { bottom: '3%', duration: dur, ease: easing }).eventCallback('onComplete', function () {
							$floatingWidget.classList.add('is-visible');
						});
					}
				}
			};
			const $floatingNav = document.querySelector('.feature-page-navigation--floating');
			if ($floatingNav) {
				const $floatingNavToggle = $floatingNav.querySelector('.feature-page-navigation__toggle__link');
				navTogglersFactory($floatingNavToggle, { duration: 0.2, defaultStroke: '#fff', activeStroke: '#fff' }, function ($floatingNavToggle) {
					const $floatingNavWrapper = $floatingNavToggle.parentElement.nextElementSibling;
					if ($floatingNavWrapper.classList.contains('is-active')) {
						$bc.gsap.to($floatingNavWrapper, { opacity: 0, duration: 0.328, display: 'none' }).eventCallback('onComplete', function () {
							$floatingNavWrapper.classList.toggle('is-active');
						});
					} else {
						$bc.gsap.to($floatingNavWrapper, { opacity: 1, duration: 0.328, display: 'block' }).eventCallback('onComplete', function () {
							$floatingNavWrapper.classList.toggle('is-active');
						});
					}
				});
			}
			const $toTop = $floatingWidget.querySelector('.bc-to-page-top');
			$toTop.addEventListener('click', function (evt) {
				evt.stopPropagation();
				$bc.gsapFns.scrollTo({ scrollTo: { y: 0 }, duration: 0.36 });
			});
		}
		function featurePageNavClick($link) {
			const $linkTarget = document.getElementById($link.getAttribute('href').slice(1));
			$bc.gsapFns.scrollTo({ scrollTo: { y: $bc.getElOffset($linkTarget).top }, duration: 0.36 });
		}
		const $featurePageNav = document.querySelector('.feature-page-navigation') ? document.querySelector('.feature-page-navigation') : null;
		if ($featurePageNav) {
			const featurePageNavLinks = Array.from($featurePageNav.querySelectorAll('.feature-page-navigation__link'));
			var _loop2 = function _loop2() {
				var $navLink = _featurePageNavLinks[_i];
				$navLink.addEventListener('click', function (evt) {
					evt.preventDefault();
					featurePageNavClick($navLink);
				});
			};
			for (var _i = 0, _featurePageNavLinks = featurePageNavLinks; _i < _featurePageNavLinks.length; _i++) {
				_loop2();
			}
		}
		const $headerSubNav = document.querySelector('.bc-header-sub-nav') ? document.querySelector('.bc-header-sub-nav') : null;
		if ($headerSubNav) {
			const $headerSubNavToggle = $headerSubNav.querySelector('.bc-header-sub-nav__toggle__icon');
			const $headerSubNavToggleIcon = $headerSubNavToggle.querySelector('.bc-header-sub-nav__toggle__icon .bc-svg-icon');
			const $headerSubNavList = $headerSubNav.querySelector('.bc-header-sub-nav__list');
			$headerSubNavToggle.addEventListener('click', function (evt) {
				evt.preventDefault();
				const navBodyHeight = $headerSubNavList.scrollHeight;
				//const duration = 0.28;
				if ($headerSubNavToggle.classList.contains('is-active')) {
					$headerSubNavList.style.height = 0;
					$headerSubNavList.removeAttribute('style');
					$headerSubNavList.classList.toggle('is-active');
					$headerSubNavToggle.classList.toggle('is-active');
					$bc.gsap.to($headerSubNavToggleIcon, { rotate: '45deg', duration: 0.3 });
				} else {
					$headerSubNavList.style.height = navBodyHeight + 'px';
					$headerSubNavList.classList.toggle('is-active');
					$headerSubNavToggle.classList.toggle('is-active');
					$bc.gsap.to($headerSubNavToggleIcon, { rotate: '90deg', duration: 0.3 });
				}
			});
		}
		const $landingPageToggle = document.querySelector('.site-quicklinks__toggle') ? document.querySelector('.site-quicklinks__toggle') : null;
		const $landingPageNavList = document.querySelector('.site-quicklinks__list') ? document.querySelector('.site-quicklinks__list') : null;
		let $landingPageNav =null;
		if($landingPageToggle) {
			$landingPageNav = $landingPageNavList.closest('.site-quicklinks');
			navTogglersFactory($landingPageToggle, {activeStroke:'#fff',duration:.16}, function() { 
				var duration=.4;
				var ease='ease.out';
				var $thisWrapper=$landingPageNav.querySelector('.site-quicklinks__wrapper'); 
				var $thisContainer=$landingPageNav.closest('.site-quicklinks');
				if ($thisWrapper.classList.contains('is-active')) { 
					$thisContainer.classList.toggle('is-active');
					$bc.gsap.to($thisWrapper, {height:0, duration:duration, ease:ease}).eventCallback('onComplete', function() {
						$thisWrapper.classList.toggle('is-active');
					});
				} else {
					$thisContainer.classList.toggle('is-active');
					$bc.gsap.to($thisWrapper, {height: $thisWrapper.scrollHeight, duration:duration, ease:ease}).eventCallback('onComplete', function() {
						$thisWrapper.classList.toggle('is-active');
					});
				}
			});
		}
		if ('IntersectionObserver' in window === false) {
			document.querySelector('body').classList.add('no-intersection-observer');
		} else {
			const bcFeaturesFadeInOptions = { rootMargin: '0% 0% 0% 0%', threshold: [0, 0.2, 0.382, 0.5, 0.75, 0.95] };
			const bcHeroesFadeInOptions = { rootMargin: '0% 0% 0% 0%', threshold: [0.15, 0.2, 0.382, 0.5, 0.75, 0.95] };
			const bcFeaturesFadeInObserver = new IntersectionObserver(function (entries, observer) {
				const targets = entries.filter(function (entry) {
					if (entry.isIntersecting) {
						observer.unobserve(entry.target);
						return entry;
					}
				}).map(function (entry) {
					return entry.target;
				});
				if (targets.length > 0) {
					$bc.gsap.to(targets, { y: 0, opacity: 1, duration: 1.125, ease: 'power4.out', stagger: 0.2 });
				}
			}, bcFeaturesFadeInOptions);
			const bcFadeInFeatures = document.querySelectorAll('.bc-feature-component .bc-fade-in-up--is-not-visible');
			if (bcFadeInFeatures.length > 0) {
				bcFadeInFeatures.forEach((fadeInFeature) => {
					bcFeaturesFadeInObserver.observe(fadeInFeature);
				});// end bcFadeInFeatures.forEach()
			}// end if bcFadeInFeatures
			const bcHeroesFadeInObserver = new IntersectionObserver((entries, observer) => {
				entries.forEach((entry) => {
					if (entry.intersectionRatio >= 0.5) {
						const $target = entry.target;
						const $thisHero = $target.closest('.bc-hero');
						const $animatables = Array.from($target.querySelectorAll('.bc-fade-in-up--is-not-visible'));
						if ($thisHero.classList.contains('bc-hero--inpage')) {
							$bc.gsap.set($animatables, { y: 20 });
							$bc.gsap.to($animatables, { y: 0, opacity: 1, duration: 1.125, ease: 'power4.out', stagger: 0.3 });
						} else {
							var yTarget = -30;
							$bc.gsap.to($animatables, { y: yTarget, opacity: 1, duration: 1.125, ease: 'power4.out', stagger: 0.3 });
							observer.unobserve($target);
						}
					}//end if entry.intersectionRatio >= 0.5
				});// end entries.forEach()
				
			}, bcHeroesFadeInOptions);
			const bcHeroesFadeInFeatures = document.querySelectorAll('.bc-hero .bc-hero__body');
			if (bcHeroesFadeInFeatures.length > 0) {
				bcHeroesFadeInFeatures.forEach((heroFadeInFeature) => {
					bcHeroesFadeInObserver.observe(heroFadeInFeature);
				});// end bcHeroesFadeInFeatures.forEach()
			}// end if bcHeroesFadeInFeatures.length > 0
		}// end if else 'IntersectionObserver' in window === false
		if ($pageFeatures) {
			$pageFeatures.forEach(function ($this) {
				if ($this.classList.contains('has-quick-nav') || $this.classList.contains('is-full-vh') === false) {
					return;
				}
				if ($this.nextElementSibling) {
					let $nextSibling = $this.nextElementSibling;
					if ($nextSibling.classList.contains('.bc-cta-feature')) {
						return;
					}
					let linkText = $nextSibling.getAttribute('aria-label') ? 'Next: ' + $nextSibling.getAttribute('aria-label') : 'Next content';
					let $thisCTA = $this.querySelector('.bc-hero__cta, .bc-feature-component__cta');
					if ($thisCTA && $thisCTA.querySelector('.bc-feature-component__next')) {
						let $nextLinkText = $thisCTA.querySelector('.bc-feature-component__next__text');
						$nextLinkText.innerHTML = '';
						$nextLinkText.append(document.createTextNode(linkText));
						$nextLinkText.addEventListener('click', function (evt) {
							evt.preventDefault();
							$bc.gsapFns.scrollTo({ scrollTo: { y: $nextSibling.offsetTop }, duration: 0.36 });
						});
					}
				} else {
					return;
				}
			});
		}// end if $pageFeatures
		function initializeFlicktySlider($sliderEl, opts) {
			const $sliderWrap = $sliderEl.closest('.bc-flickty-slider');
			const $sliderNext = $sliderWrap.querySelector('.bc-flickty-slider__next');
			const $sliderPrev = $sliderWrap.querySelector('.bc-flickty-slider__prev');
			$sliderEl.querySelectorAll('.bc-flickty-slider__slide').forEach(($slide) => {
				$slide.style.height = $slide.clientHeight + 'px';	
			});
			const $newSlider = new Flickity($sliderEl, opts);
			if ($newSlider.selectedIndex === 0) {
				$sliderPrev.classList.add('is-inactive');
				$sliderNext.classList.remove('is-inactive');
			} else if ($newSlider.selectedIndex === $newSlider.cells.length - 1) {
				$sliderPrev.classList.remove('is-inactive');
				$sliderNext.classList.add('is-inactive');
			} else {
				$sliderPrev.classList.remove('is-inactive');
				$sliderNext.classList.remove('is-inactive');
			}
			$sliderNext.addEventListener('click', function (evt) {
				evt.preventDefault();
				$newSlider.next();
				if ($newSlider.selectedIndex === 0) {
					$sliderPrev.classList.add('is-inactive');
					$sliderNext.classList.remove('is-inactive');
				} else if ($newSlider.selectedIndex === $newSlider.cells.length - 1) {
					$sliderPrev.classList.remove('is-inactive');
					$sliderNext.classList.add('is-inactive');
				} else {
					$sliderPrev.classList.remove('is-inactive');
					$sliderNext.classList.remove('is-inactive');
				}
			});
			$sliderPrev.addEventListener('click', function (evt) {
				evt.preventDefault();
				$newSlider.previous();
				if ($newSlider.selectedIndex === 0) {
					$sliderPrev.classList.add('is-inactive');
					$sliderNext.classList.remove('is-inactive');
				} else if ($newSlider.selectedIndex === $newSlider.cells.length - 1) {
					$sliderPrev.classList.remove('is-inactive');
					$sliderNext.classList.add('is-inactive');
				} else {
					$sliderPrev.classList.remove('is-inactive');
					$sliderNext.classList.remove('is-inactive');
				}
			});
			if ($sliderWrap.querySelector('.bc-flickty-slider__counter')) {
				const $sliderCounter = $sliderWrap.querySelector('.bc-flickty-slider__counter');
				const $sliderCounter__current =  $sliderCounter.querySelector('.bc-flickty-slider__counter__current');
				$sliderCounter__current.innerHTML = $newSlider.selectedIndex + 1;
				const $sliderCounter__total =  $sliderCounter.querySelector('.bc-flickty-slider__counter__total');
				$sliderCounter__total.innerHTML =  $newSlider.cells.length;
				$newSlider.on('change', (idx) => {
					console.log(`${idx} ${idx + 1 > 1 && Number.isInteger(opts.groupCells)}`);
					$sliderCounter__current.innerHTML = (idx + 1 > 1 && Number.isInteger(opts.groupCells)) ? idx + opts.groupCells : idx + 1; 
				});	
			}
			
			return $newSlider;
		}
		const pageSliders = document.querySelectorAll('.bc-flickty-slider__slider:not(.bc-lightbox-slider__slider)'); 
		pageSliders.forEach(function ($thisSlider) {
			const $sliderWrap =  $thisSlider.closest('.bc-flickty-slider');
			let adaptHeight = ($sliderWrap.classList.contains('bc-text-slider')) ? true : false;
			var sliderOpts = {
				cellSelector: '.bc-flickty-slider__slide',
				prevNextButtons: false,
				pageDots: false,
				adaptiveHeight: adaptHeight,
				groupCells: ($sliderWrap.classList.contains('bc-card-slider') && window.innerWidth > 540) ? ((window.innerWidth > 767) ? 3 : 2) : false,
				cellAlign: $sliderWrap.classList.contains('bc-card-slider') ? 'left' : 'center',
				contain: true,
			};
			console.log(`${$sliderWrap.classList} ${sliderOpts.groupCells}`);
			initializeFlicktySlider($thisSlider, sliderOpts);
		});
		function destroyLightboxSlider($lightbox) {
			const $slider = $lightbox.querySelector('.bc-flickty-slider__slider');
			if ($slider.querySelectorAll('.bc-flickty-slider__slide').length > 0) {
				Array.from($slider.querySelectorAll('.bc-flickty-slider__slide')).forEach(function (elm) {
					elm.remove();
				});
			}
		}
		function buildLightboxSlider($lightbox, slides) {
			destroyLightboxSlider($lightbox);
			const $slider = $lightbox.querySelector('.bc-flickty-slider__slider');
			
			slides.forEach(function (slide) {
				$slider.appendChild(slide);
			});
			$lightbox.style.display = 'flex';
		}
		if (Array.from(document.querySelectorAll('.modula.modula-gallery')).length > 0) {
			const imageGalleries = Array.from(document.querySelectorAll('.modula.modula-gallery'));
			const $lightbox = document.querySelector('.bc-lightbox');
			const $sliderCounter = $lightbox.querySelector('.bc-flickty-slider__counter');
			const $closeLightbox = $lightbox.querySelector('.bc-lightbox__close');
			imageGalleries.forEach(function ($thisGallery) {
				const $galleryItems = Array.from($thisGallery.querySelectorAll('.modula-item'));
				const lightboxSlides = [];
				$galleryItems.forEach(function ($galleryItem) {
					const $lightboxSlide = document.createElement('div');
					$lightboxSlide.classList.add('bc-flickty-slider__slide');
					const lightboxCard = document.createElement('div');
					lightboxCard.classList.add('bc-card');
					const lightboxImg = document.createElement('img');
					lightboxImg.src = $galleryItem.querySelector('img').getAttribute('data-src');
					lightboxImg.setAttribute('alt', $galleryItem.querySelector('img').getAttribute('alt'));
					lightboxCard.appendChild(document.createElement('picture').appendChild(lightboxImg));
					const lightboxTitle = document.createElement('h2');
					lightboxTitle.setAttribute('class', 'bc-card__heading');
					if ($galleryItem.querySelector('.jtg-title') !== null) {
						lightboxTitle.appendChild(document.createTextNode($galleryItem.querySelector('.jtg-title').innerHTML));
						lightboxCard.appendChild(lightboxTitle);
					}
					$lightboxSlide.appendChild(lightboxCard);
					lightboxSlides.push($lightboxSlide);
				});
				$galleryItems.forEach(function ($thisItem) {
					$thisItem.addEventListener('click', function (evt) {
						evt.preventDefault();
						const sliderLen = $galleryItems.length;
						let currentIdx = $galleryItems.findIndex(function (el) {
							return evt.currentTarget.isSameNode(el);
						});
						const sliderOpts = {
							cellSelector: '.bc-flickty-slider__slide',
							prevNextButtons: false,
							pageDots: false,
							adaptiveHeight: false,
							initialIndex: currentIdx,
							contain: true,
						};
						buildLightboxSlider($lightbox, lightboxSlides);
						const $thisSlider = initializeFlicktySlider($lightbox.querySelector('.bc-flickty-slider__slider'), sliderOpts);
						const $sliderCounter__current =  $sliderCounter.querySelector('.bc-flickty-slider__counter__current');
						$sliderCounter__current.innerHTML = currentIdx + 1;
						const $sliderCounter__total =  $sliderCounter.querySelector('.bc-flickty-slider__counter__total');
						$sliderCounter__total.innerHTML = sliderLen;
						$thisSlider.on('change', (idx) => {
							currentIdx = idx;
							$sliderCounter__current.innerHTML = idx + 1;
						});
						$closeLightbox.addEventListener('click', function (evt) {
							evt.preventDefault();
							$lightbox.style.display = 'none';
							$thisSlider.destroy();
						});
					});
				});
			});
		}// end if modula.modoula-gallery
		if (document.querySelectorAll('.bc-expandible-block__expander__button').length > 0) {
			const $expandButtons = document.querySelectorAll('.bc-expandible-block__expander__button');
			$expandButtons.forEach(($btn) => {
				const $expandableBlock = $btn.closest('.bc-expandible-block');
				const $expandableBody = $expandableBlock.querySelector('.bc-expandible-block__body');
				$btn.addEventListener('click', function () {
					if ($btn.classList.contains('is-active')) {
						hideAccordionBody($expandableBody, function () {
							$btn.classList.toggle('is-active');
						});
					} else {
						showAccordionBody($expandableBody, function () {
							$btn.classList.toggle('is-active');
						});
					}
				});
			});// end $expandButtons.forEach(($expandButton)
		}// end if .bc-expandible-block__expander__button
		function showAccordionBody(accordionBody, cb) {
			if (accordionBody.classList.contains('is-active') === false) {
				$bc.gsap.to(accordionBody, { height: accordionBody.scrollHeight + 'px' }).eventCallback('onComplete', function () {
					accordionBody.classList.toggle('is-active');
					if (typeof cb === 'function') {
						cb();
					}
				});
			} else {
				return;
			}
		}// showAccordionBody()
		function hideAccordionBody(accordionBody, cb) {
			if (accordionBody.classList.contains('is-active')) {
				$bc.gsap.to(accordionBody, { height: 0 + 'px' }).eventCallback('onComplete', function () {
					accordionBody.classList.toggle('is-active');
					if (typeof cb === 'function') {
						cb();
					}
				});
			} else {
				return;
			}
		}// hideAccordionBody()
		if (document.querySelectorAll('.bc-accordion').length > 0) {
			const accordions = document.querySelectorAll('.bc-accordion');
			accordions.forEach(($accordion) => {
				const accordionTriggers = $accordion.querySelectorAll('.bc-accordion__block-trigger');
				accordionTriggers.forEach(($accordionTrigger) => {
					$accordionTrigger.addEventListener('click', function (evt) {
						evt.preventDefault();
						const $accordionTriggerIcon = $accordionTrigger.querySelector('.bc-accordion__block-trigger__icon > .bc-svg-icon');
						const $accordionBody = $accordionTrigger.closest('.bc-accordion__block-heading').nextElementSibling;
						const $accordionCloseLink = $accordionBody.querySelector('.bc-accordion__close > a');
						if ($accordionTrigger.classList.contains('is-active') === false) {
							showAccordionBody($accordionBody);
							$bc.gsap.to($accordionTriggerIcon, { rotate: '90deg', duration: 0.1 }).eventCallback('onComplete', function () {
								$accordionTrigger.classList.toggle('is-active');
							});
						} else {
							hideAccordionBody($accordionBody);
							$bc.gsap.to($accordionTriggerIcon, { rotate: '45deg', duration: 0.1 }).eventCallback('onComplete', function () {
								$accordionTrigger.classList.toggle('is-active');
							});
						}
						$accordionCloseLink.addEventListener('click', function closeLinkClickHander(evt) {
							evt.preventDefault();
							hideAccordionBody($accordionBody);
							$bc.gsap.to($accordionTriggerIcon, { rotate: '45deg', duration: 0.1 }).eventCallback('onComplete', function () {
								$accordionTrigger.classList.toggle('is-active');
							});
						});
					});
				});// end accordionTriggers.forEach(($accordionTrigger))
			});// end accordions.forEach(($accordion))
		}// end if .bc-accordion
		if (document.querySelector('.bc-hero__video')) {
			const $videoWrapper = document.querySelector('.bc-hero__video');
			const $heroVideo = $videoWrapper.querySelector('.bc-hero__video__video');
			const $videoControls = $videoWrapper.querySelector('.bc-hero__video__controls');
			$videoControls.style.minWidth = $videoControls.offsetWidth + 'px';
			const $videoPlayIcon = $videoControls.querySelector('.bc-hero__video__controls__play-icon');
			const $videoPauseIcon = $videoControls.querySelector('.bc-hero__video__controls__pause-icon');
			$videoControls.addEventListener('click', function (evt) {
				evt.preventDefault();
				let duration = 0.182;
				if ($videoWrapper.classList.contains('.is-paused') && $heroVideo.paused) {
					$heroVideo.play();
					$bc.gsap.to($videoPlayIcon, { opacity: 0, duration: duration }).eventCallback('onComplete', function () {
						$bc.gsap.set($videoPlayIcon, { display: 'none' });
						$videoWrapper.classList.toggle('.is-paused');
						$bc.gsap.set($videoPauseIcon, { display: 'inline-flex' });
						$bc.gsap.to($videoPauseIcon, { opacity: 1, duration: duration });
					});
				} else {
					$heroVideo.pause();
					$bc.gsap.to($videoPauseIcon, { opacity: 0, duration: duration }).eventCallback('onComplete', function () {
						$bc.gsap.set($videoPauseIcon, { display: 'none' });
						$videoWrapper.classList.toggle('.is-paused');
						$bc.gsap.set($videoPlayIcon, { display: 'inline-flex' });
						$bc.gsap.to($videoPlayIcon, { opacity: 1, duration: duration });
					});
				}
			}); 
		}// end if ..bc-hero__video
		function resizeForWaves() {
			const wavyComponents = document.querySelectorAll('.has-waves') ? document.querySelectorAll('.has-waves') : null;
			if (wavyComponents) {
				wavyComponents.forEach(function ($el) {
					const $waves = $el.querySelector('.wave-wrap');
					const $nextEl = $el.nextElementSibling;
					let $nextElWrap = null;
					$nextEl.setAttribute('style', '');
					let paddingTop = Number.parseInt(window.getComputedStyle($nextEl).getPropertyValue('padding-top'));
					$nextEl.style.marginTop = '-' + $waves.clientHeight + 'px';
					if ($nextEl.classList.contains('has-waves')) {
						$nextElWrap = $nextEl.querySelector('.bc-feature-component__wrap');
						$nextElWrap.setAttribute('style', '');
						paddingTop = Number.parseInt(window.getComputedStyle($nextElWrap).getPropertyValue('padding-top'));
						$nextElWrap.style.paddingTop = paddingTop + $waves.clientHeight + 'px';
						$nextEl.style.zIndex = '4';
					} else {
						$nextEl.style.paddingTop = $nextEl.classList.contains('bc-breadcrumbs') ? $waves.clientHeight + 'px' : paddingTop + $waves.clientHeight + 'px';
					}
				});
			}
		}// resizeForWaves()
		resizeForWaves();
		window.addEventListener('resize', function () {
			resizeForWaves();
		});
	};
})();
