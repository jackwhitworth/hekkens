$(document).ready(function() {
	'use strict';

	// setup up carousel
	function setupCarousel( target, targetContainer, panelRatio ) {

		// var pageWidth = $(window).width(),
		var containerWidth = $('section').width(),
			panelWidth = containerWidth - 30,

		// Caluculate the panelHeight
			panelHeight = Math.round( panelWidth / panelRatio );

		// Apply container dimensions
		var $container = $(targetContainer),
			containerStyle = 'width: ' + parseInt(panelWidth) + 'px; height: ' + parseInt(panelHeight) + 'px;';
		$container.attr( 'style', containerStyle );

		// Initialize carousel
		initialiseCarousel( target, panelWidth, panelHeight );

	}

	// init carousel
	function initialiseCarousel( target, panelWidth, panelHeight ) {

		// variables
		var $carousel = $(target),
			prefix = '-webkit-',
			$panelChildren = $carousel.children(),
			panelCount = $panelChildren.length,
			currentAngle = 0,
			panelCurrentAngle = 0,
			angle = 360 / panelCount,
			translateZ = Math.round( ( panelWidth / 2 ) / Math.tan( ( ( Math.PI * 2 ) / panelCount ) / 2 ) );

		// log variables
		console.log('Carousel: ' + target +
			' --- panelCount: ' + panelCount +
			' --- panelWidth: ' + panelWidth +
			'px --- translateZ: ' + translateZ +
			' --- Angle: ' + angle
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
		}

		// toggle slides next/prev
		$('#previous').on('click', function() {
			
			next_Panel( 1 );
		});

		// toggle slides next/prev
		$('#next').on('click', function() {
			
			next_Panel( -1 );
		});

		// toggle slides next/prev
		$carousel.swipe( {
			swipe:function(event, direction, distance){
				if ( direction === 'left' && distance > 100) {
					next_Panel( 1 );
				} else if ( direction === 'right' && distance > 100 ) {
					next_Panel( -1 );
				}
			},
			fingers:'all'
		});

	}

	// resize width
	$(window).on( 'resize orientationchange', function(event) {
		console.log(event);

		setupCarousel('#carousel', 'div.carousel-container', '1.5' );
		
	});

	setupCarousel('#carousel', 'div.carousel-container', '1.5' );
 
});

