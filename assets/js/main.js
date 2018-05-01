/*
	Prologue by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

$(document).ready(function(){
    // More info buttons
    $("#228907").click(function(){
        $("#service-description-228907").slideToggle();
    });
    $("#192855").click(function(){
        $("#service-description-192855").slideToggle();
    });
    $("#225233").click(function(){
        $("#service-description-225233").slideToggle();
    });
    $("#193080").click(function(){
        $("#service-description-193080").slideToggle();
    });
    $("#193087").click(function(){
        $("#service-description-193087").slideToggle();
    });
    $("#193354").click(function(){
        $("#service-description-193354").slideToggle();
    });
    $("#192856").click(function(){
        $("#service-description-192856").slideToggle();
    });
    $("#193089").click(function(){
        $("#service-description-193089").slideToggle();
    });
    $("#193358").click(function(){
        $("#service-description-193358").slideToggle();
    });
    $("#193078").click(function(){
        $("#service-description-193078").slideToggle();
    });

    $("#275279").click(function(){
        $("#service-description-275279").slideToggle();
    });
    $("#296907").click(function(){
        $("#service-description-296907").slideToggle();
    });
    //Eo m

    //pedekyr
    $("#202577").click(function(){
        $("#service-description-202577").slideToggle();
    });
    $("#202576").click(function(){
        $("#service-description-202576").slideToggle();
    });
    // Eo pedekyr

    // fotvård
    $("#190438").click(function(){
        $("#service-description-190438").slideToggle();
    });
    $("#190439").click(function(){
        $("#service-description-190439").slideToggle();
    });
    $("#190440").click(function(){
        $("#service-description-190440").slideToggle();
    });
    $("#190459").click(function(){
        $("#service-description-190459").slideToggle();
    });
    $("#190434").click(function(){
        $("#service-description-190434").slideToggle();
    });
    $("#190432").click(function(){
        $("#service-description-190432").slideToggle();
    });
    // Eo fotvård
    //Eo more infop buttons.
});

(function($) {

	skel.breakpoints({
		wide: '(min-width: 961px) and (max-width: 1880px)',
		normal: '(min-width: 961px) and (max-width: 1620px)',
		narrow: '(min-width: 961px) and (max-width: 1320px)',
		narrower: '(max-width: 960px)',
		mobile: '(max-width: 736px)'
	});

	$(function() {

		var	$window = $(window),
			$body = $('body');

		// Disable animations/transitions until the page has loaded.
			$body.addClass('is-loading');

			$window.on('load', function() {
				$body.removeClass('is-loading');
			});

		// CSS polyfills (IE<9).
			if (skel.vars.IEVersion < 9)
				$(':last-child').addClass('last-child');

		// Fix: Placeholder polyfill.
			$('form').placeholder();

		// Prioritize "important" elements on mobile.
			skel.on('+mobile -mobile', function() {
				$.prioritize(
					'.important\\28 mobile\\29',
					skel.breakpoint('mobile').active
				);
			});

		// Scrolly links.
			$('.scrolly').scrolly();

		// Nav.
			var $nav_a = $('#nav a');

			// Scrolly-fy links.
				$nav_a
					.scrolly()
					.on('click', function(e) {

						var t = $(this),
							href = t.attr('href');

						if (href[0] != '#')
							return;

						e.preventDefault();

						// Clear active and lock scrollzer until scrolling has stopped
							$nav_a
								.removeClass('active')
								.addClass('scrollzer-locked');

						// Set this link to active
							t.addClass('active');

					});

			// Initialize scrollzer.
				var ids = [];

				$nav_a.each(function() {

					var href = $(this).attr('href');

					if (href[0] != '#')
						return;

					ids.push(href.substring(1));

				});

				$.scrollzer(ids, { pad: 200, lastHack: true });

		// Header (narrower + mobile).

			// Toggle.
				$(
					'<div id="headerToggle">' +
						'<a href="#header" class="toggle"></a>' +
					'</div>'
				)
					.appendTo($body);

			// Header.
				$('#header')
					.panel({
						delay: 500,
						hideOnClick: true,
						hideOnSwipe: true,
						resetScroll: true,
						resetForms: true,
						side: 'left',
						target: $body,
						visibleClass: 'header-visible'
					});

			// Fix: Remove transitions on WP<10 (poor/buggy performance).
				if (skel.vars.os == 'wp' && skel.vars.osVersion < 10)
					$('#headerToggle, #header, #main')
						.css('transition', 'none');

	});

})(jQuery);
