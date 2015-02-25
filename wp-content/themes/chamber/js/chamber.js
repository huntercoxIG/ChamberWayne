(function ($) {
	
	"use strict";

	$(document).ready(function() {

		// Comments
		$(".commentlist li").addClass("panel panel-default");
		$(".comment-reply-link").addClass("btn btn-default");
	
		// Forms
		$('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
		$('input[type=submit]').addClass('btn btn-primary');
		
		// You can put your own code in here

		// For Header collapse on scroll past 98px on browser
			$(window).scroll(function() {
    		var scrollPos = $(window).scrollTop();

					if(scrollPos  > 1) {
						if (! $(".navbar-default").hasClass("scrolled")) {
							$(".navbar-default").addClass("scrolled");
						}
					} else {
						if ($(".navbar-default").hasClass("scrolled")) {
							$(".navbar-default").removeClass("scrolled");
						}
					}
			});

		
		
	});

}(jQuery));
