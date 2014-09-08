$(document).ready(function() {
	'use strict';

	// setup up carousel
	function setupCarousel( target, targetContainer, nav, panelRatio ) {

		var pageWidth = $(window).width(),
			panelWidth = pageWidth - (pageWidth / 7.5),

		// Caluculate the panelHeight
			panelHeight = Math.round( panelWidth / panelRatio );

		// Apply container dimensions
		var $container = $(targetContainer),
			containerStyle = 'width: ' + ( parseInt(panelWidth) + 24 ) + 'px; height: ' + ( parseInt(panelHeight) + 24 ) + 'px;';
		$container.attr( 'style', containerStyle );

		// Initialize carousel
		initialiseCarousel( target, nav, panelWidth, panelHeight );

	};

	// init carousel
	function initialiseCarousel( target, nav, panelWidth, panelHeight ) {

		// variables
		var $carousel = $(target),
			$navigation = $(nav),
			prefix = '-webkit-',
			$panelChildren = $carousel.children(),
			panelCount = $panelChildren.length,
			currentAngle = 0,
			panelCurrentAngle = 0,
			angle = 360 / panelCount,
			translateZ = Math.round( ( panelWidth / 2 ) / Math.tan( ( ( Math.PI * 2 ) / panelCount ) / 2 ) );

		// log variables
		console.log('Carousel: ' + target
			+ ' --- panelCount: ' + panelCount
			+ ' --- panelWidth: ' + panelWidth
			+ 'px --- translateZ: ' + translateZ
			+ ' --- Angle: ' + angle
		);

		// initial carousel style
		var initStyle = prefix + 'transform: translateZ(-' + translateZ + 'px);';
			initStyle += ' transform: translateZ(-' + translateZ + 'px);';
		$carousel.attr( 'style', initStyle );

		// individual panel styles
		$panelChildren.each( function() {
			var panelStyle = prefix + 'transform: rotateY(' + panelCurrentAngle + 'deg) translateZ(' + translateZ +
			'px); width: ' + panelWidth + 'px; height: ' + panelHeight + 'px; line-height: ' + panelHeight + 'px; ';

			panelStyle += 'transform: rotateY(' + panelCurrentAngle + 'deg) translateZ(' + translateZ + 'px)';

			$(this).attr( 'style', panelStyle );
			panelCurrentAngle += angle;
		});



		// toggle slides next/prev
		function next_Panel( increment ) {

			currentAngle += angle * increment * -1;
			var nextStyle = prefix + 'transform: translateZ(-' + translateZ + 'px) rotateY(' + currentAngle + 'deg)';
			console.log(nextStyle);
			$carousel.attr('style', nextStyle);
		};

		// toggle slides next/prev
		$navigation.on('click', function( event ) {

			var increment = parseInt( event.target.getAttribute('data-increment') );
			next_Panel( increment );
		});

	};

	// resize width
	$(window).on( 'resize orientationchange', function(event) {
		console.log(event);

		setupCarousel('#carousel', 'div.carousel-container', 'button.navigation', '1.8' );

	});

	setupCarousel('#carousel', 'div.carousel-container', 'button.navigation', '1.8' );

});
