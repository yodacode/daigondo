var $ = require('jquery');

$("[data-logo]").on('click', function() {
	$("body").animate({
		backgroundColor: "#abcdef"
	}, 1500 );
});

