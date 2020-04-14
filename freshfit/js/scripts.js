(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away

		// Replace the review form text
		if (window.location.pathname.indexOf("submit-a-review") > 0) {
			$(".form-label:contains('Testimonial Description: ')").html("YOUR REVIEW");
			$("textarea[name='user_description']").attr("placeholder", "Thanks for taking the time to leave us a review! Go ahead and type it here.");
			$("h3.form-sucess").html("Thanks for leaving your review! It should be posted shortly.");
		}

		function increment() {
			let triggerElement = $(this);
			let id = triggerElement.attr('id');
			let step = -1;
			if (triggerElement.hasClass("lb-step-up-anchor")) {
				step = 1;
			}
			let quantity = $("form." + id).find("input");
			if ((quantity.val() > 1 && step < 0) || (quantity.val() < 99 && step > 0)) {
				quantity.val(parseFloat(quantity.val()) + parseFloat(step));
			}
		}

		$(".lb-step").click(increment);

		let mobileNavOpen = false;
		function toggleMobileNav() {
			if (!mobileNavOpen) {
				$(".nav-dropdown").css("max-height", $(".nav-dropdown").children("ul").height());
			} else {
				$(".nav-dropdown").css("max-height", 0);
			}
			mobileNavOpen = !mobileNavOpen;
		}

		$(".nav-mobile-toggle").click(toggleMobileNav);

		function openContactForm() {
			$(".ff-contact-trigger").addClass("ff-hidden");
			$(".ff-contact-form").addClass( "ff-open-form" );
		}
		$(".ff-contact-trigger").click(openContactForm);

		// Check if they selected contact in the nav
		if (window.location.href.indexOf("#contact") > -1) {
			openContactForm();
		}
		
	});
	
})(jQuery, this);
