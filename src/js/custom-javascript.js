+function ($) {
    $body = $('body');

    $body.append('<div id="toTop" class="btn">&nbsp</div>');
    $(window).scroll(function () {
	if ($(this).scrollTop() != 0) {
	    $('#toTop').fadeIn();
	} else {
	    $('#toTop').fadeOut();
	}
    });
    $('#toTop').click(function () {
	$("html, body").animate({scrollTop: 0}, 600);
	return false;
    });
    $('.wpcf7').click(function () {
	$(".wpcf7-mail-sent-ok").hide();
    });

    function checkFormControl() {
	$('.form-control').each(function () {
	    var thisa = $(this);
	    if (thisa.val().length) {
		thisa.parents('.form-group').addClass('on-focus');
	    }
	});
    }
    checkFormControl();

    $body.on('focus', '.form-control', function () {
	$(this).parents('.form-group').addClass('on-focus');
    });

    $body.on('focusout', '.form-control', function () {
	if (!$(this).val().length) {
	    $(this).parents('.form-group').removeClass('on-focus');
	}
    });

    $('.owl-carousel.logo').owlCarousel({
	responsiveClass: true,
	dots: true,
	nav: false,
	margin: 30,
	items: 2,
	loop: true,
	autoplayTimeout: 2000,
	responsive: {
	    375: {
		margin: 15,
		items: 3
	    },
	    576: {
		margin: 30,
		items: 3
	    },
	    768: {
		margin: 30,
		items: 4
	    },
	    992: {
		margin: 46,
		items: 5
	    },
	    1280: {
		margin: 74,
		items: 5
	    }
	}
    });

    /*
     $(window).on("load resize", function () {
     $('.card-content').samesizr({
     mobile: 767
     });
     });
     */
}(jQuery);
