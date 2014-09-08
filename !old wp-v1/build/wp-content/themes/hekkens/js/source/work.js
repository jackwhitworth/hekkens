
$(document).ready(function() {
	'use strict';

	// debounce so filtering doesn't happen every millisecond
	function debounce( fn, threshold ) {
		var timeout;
		return function debounced() {
			if ( timeout ) {
				clearTimeout( timeout );
			}
			function delayed() {
				fn();
				timeout = null;
			}
			timeout = setTimeout( delayed, threshold || 100 );
		};
	}

	if ( $('work-archive').length ) {

		// quick search regex
		var qsRegex;

		// init Isotope
		var $container = $('#work-archive .isotope-container').isotope({

			filter: function() {
				return qsRegex ? $(this).text().match( qsRegex ) : true;
			}
		});

		// use value of search field to filter
		var $quicksearch = $('#quicksearch').keyup( debounce( function() {
			qsRegex = new RegExp( $quicksearch.val(), 'gi' );
			$container.isotope();
		}, 200 ) );
			
		// Isotope Filtering	
		var filters = [];

		$('.filter-group').on( 'click', 'button', function() {

			var $this = $(this);

			// get group key
			var $buttonGroup = $this.parents('.button-group');
			var filterGroup = $buttonGroup.attr('data-filter-group');

			// set filter for group
			filters[ filterGroup ] = $this.attr('data-filter');

			// combine filters
			var filterValue = '';
			
			for ( var prop in filters ) {
				if ( prop ) {
					filterValue += filters[ prop ];
				}
			}

			// set filter for Isotope
			$container.isotope({ filter: filterValue });

		});

		// Items per row toggle
		$('#work-archive .row-filter button').on( 'click', function(event) {
			event.preventDefault();
			var targetClass = $(this).attr('href');
			console.log( targetClass );

			$('#work-archive').removeClass('one');
			$('#work-archive').removeClass('two');
			$('#work-archive').removeClass('three');

			$('#work-archive').addClass(targetClass);

			$container.isotope('layout');
		});
	}
});