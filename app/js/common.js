$(function() {

	if ($(window).innerWidth() > 991) {
		const navHeight = $('.nav-head').innerHeight()
		$('.content-head').css({
			'height': 'calc(100vh - '+navHeight+'px)',
		})
	}

	// Инит фансибокса
	$('.fancybox').fancybox({
		margin: 0,
		padding: 0,
		touch: false
	});

});
