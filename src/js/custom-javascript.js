+function ($) {
    $('body').append('<div id="toTop" class="btn">&nbsp</div>');
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
    /*
     $(window).on("load resize", function () {
     $('.card-content').samesizr({
     mobile: 767
     });
     });
     */
}(jQuery);
