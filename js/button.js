/*---- w góre ----*/
$(document).ready(function() {
		var duration = 700;
		jQuery(window).scroll(function() {
			if (jQuery(this).scrollTop() > 200) {
				jQuery('.to-top').fadeIn(duration);
			} else {
				jQuery('.to-top').fadeOut(duration);
			}
		});

		jQuery('.to-top').click(function(event) {
			event.preventDefault();
			jQuery('html').animate({scrollTop: 0}, duration);
			return false;
		})
	});
/*---- w dół ----*/
$(document).ready(function() {
		var duration = 700;
		jQuery(window).scroll(function() {
			if (jQuery(this).scrollTop() <= 500) {
				jQuery('.to-bottom').fadeIn(duration);
			} else {
				jQuery('.to-bottom').fadeOut(duration);
			}
		});

		jQuery('.to-bottom').click(function(event) {
			event.preventDefault();
			jQuery('html').animate({scrollTop: $('html, body').height()}, duration);
			return false;
		})
	});