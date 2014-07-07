$(document).ready(function() {
	'use strict';


	// Items per row toggle
	$('#work .row-filter a').on( 'click', function(event) {
		event.preventDefault();
		var targetClass = $(this).attr('href');
		console.log( targetClass );

		$('#work').removeClass('one');
		$('#work').removeClass('two');
		$('#work').removeClass('three');

		$('#work').addClass(targetClass);
	});
	

});