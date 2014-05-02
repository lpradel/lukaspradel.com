$(function(){ 
	$(document).ready(function() { 
	 	// Maintenance countdown
	 	if ($('.panda-countdown').length) {
			var date  = new Date(Date.UTC(2013, 12, 5, 12, 0, 0)); // Year/month/Day/hour/min/sec
			var now   = new Date();
			var diff  = date.getTime()/1000 - now.getTime()/1000;
			var clock = $('.panda-countdown').FlipClock(diff, {
			    clockFace: 'DailyCounter',
			    countdown: true
			});
		}

		if ($('#menu').length) {
			$('#menu').slicknav({
				prependTo:'#responsivemenu'
			});
		}

		Responsive()
	});
	
	$(window).load(function(){
		Responsive()
	});

	$(window).resize(function() {
		Responsive()
	});
	function Responsive() {
		$('.panda-404, .panda-maintenance').removeAttr("style")

		windowsHeight = $(window).height();
		p404Height = $('.panda-404').height();
		maintenanceHeight = $('.panda-maintenance').height();

		if (p404Height < windowsHeight - 50) {
			$('.panda-404').css({
				'height':windowsHeight,
				'padding-top': (windowsHeight - 16 - p404Height)/2
			})
		}

		if (maintenanceHeight < windowsHeight - $('footer').height()) {
			$('.panda-maintenance').css({
				'height':windowsHeight - $('footer').height(),
				'padding-top': (windowsHeight - 16 - maintenanceHeight)/2
			})
		}

	}
});

