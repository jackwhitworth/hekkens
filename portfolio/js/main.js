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

					$('#navigation').toggleClass('open');

					if ( $('#navigation').hasClass('open') ) {

						$('#navigation').fadeIn( '800', function() {
							console.log('Animated.');
						});

					} else {

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


});
