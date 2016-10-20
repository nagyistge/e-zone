$(window).on('load', function() {
	// Preloader
	$('.preloader img').fadeOut(); // will first fade out
	$('.preloader').delay(320).fadeOut('slow', function() {

	});
});
$(function () {
	$("#navone").mouseenter(function() {
		$(".navfixedone").stop().slideDown(200);
    })
	.mouseleave(function() {
		$(".navfixedone").stop().slideUp(200);
    });
	 $(".navfixedone").mouseenter(function() {
		$(".navfixedone").stop().slideDown(200);
    })
	.mouseleave(function() {
        $(".navfixedone").stop().slideUp(200);
    });
	$("#navtwo").mouseenter(function() {
		$(".navfixedtwo").stop().slideDown(200);
    })
	.mouseleave(function() {
		$(".navfixedtwo").stop().slideUp(200);
    });
	 $(".navfixedtwo").mouseenter(function() {
		$(".navfixedtwo").stop().slideDown(200);
    })
	.mouseleave(function() {
        $(".navfixedtwo").stop().slideUp(200);
    });
	$("#NavPcweb").mouseenter(function() {
		$(".CaseShownavSecond").stop().fadeIn();
		$(".CaseShownavSecondone").stop().fadeOut();
    });
	$("#NavWx").mouseenter(function() {
		$(".CaseShownavSecondone").stop().fadeIn();
		$(".CaseShownavSecond").stop().fadeOut();
    });	
	$(".NavApp").mouseenter(function() {
		$(".CaseShownavSecondone").stop().fadeOut();
		$(".CaseShownavSecond").stop().fadeOut();
    });	

});