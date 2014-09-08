$(document).ready(function() {
	'use strict';

	// BURGER MENU
	var Menu = {

		el: {
			ham: $('.menu-hekkens'),
			menuTop: $('.menu-hekkens-top'),
			menuMiddle: $('.menu-hekkens-middle'),
			menuBottom: $('.menu-hekkens-bottom')
		},

		init: function() {
			Menu.bindUIactions();
		},

		bindUIactions: function() {
			Menu.el.ham
			.on(
			'click',
				function(event) {
					Menu.activateMenu(event);
					event.preventDefault();

					setHeight();

					$('#navigation').toggleClass('closed');

					if ( $('.menu-hekkens-text').text() === 'MENU' ) {

						$('.menu-hekkens-text').text('CLOSE');

						// $('#navigation').show();
						$('#navigation').fadeIn( '800', function() {
							console.log('Animated.');
						});

					} else {

						$('.menu-hekkens-text').text('MENU');

						$('#navigation').fadeOut( '800', function() {
							$('#navigation').hide();
							console.log('Animated and Hidden');
						});
					}
				}
			);
		},

		activateMenu: function() {
			Menu.el.menuTop.toggleClass('menu-hekkens-top-click');
			Menu.el.menuMiddle.toggleClass('menu-hekkens-middle-click');
			Menu.el.menuBottom.toggleClass('menu-hekkens-bottom-click');
		}
	};

	Menu.init();


	// Set the height
	function setHeight() {

		var	windowHeight = $(window).height(),
			dimensions = 'height: ' + windowHeight + 'px;';
	
		$('#navigation').attr( 'style', dimensions );
		
	}

});