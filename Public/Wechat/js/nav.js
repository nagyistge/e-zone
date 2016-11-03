$(window).on('load', function() {
	// Preloader
	$('.preloader img').fadeOut(); // will first fade out
	$('.preloader').delay(320).fadeOut('slow', function() {
	});
});
$(".menu").find('li').eq(1).click(function(event) {
	window.location.href = "{:U('Wechat/Index/index')}";
});
if ('ontouchstart' in window) {
		var click = 'touchstart';
	} else {
		var click = 'click';
	}
	$('.HeadNavIco').on(click, function () {
		if (!$(this).hasClass('open')) {
			openMenu();
		} else {
			closeMenu();
		}
	});
	$('div.menu ul li').on(click, function (e) {
		e.preventDefault();
		closeMenu();
	});
	function openMenu() {
			$('.menu').fadeIn();
			$('div.circle').addClass('expand');
			$('.HeadNavIco').addClass('open');
			$('.x, .y, .z').addClass('collapse');
			$('.menu li').addClass('animate');
			setTimeout(function () {
				$('.y').hide();
				$('.x').addClass('rotate30');
				$('.z').addClass('rotate150');
			}, 70);
			setTimeout(function () {
				$('.x').addClass('rotate45');
				$('.z').addClass('rotate135');
			}, 120);
		}
	function closeMenu() {
		$('.menu').fadeOut();
		$('.HeadNavIco').removeClass('open');
		$('.x').removeClass('rotate45').addClass('rotate30');
		$('.z').removeClass('rotate135').addClass('rotate150');
		$('div.circle').removeClass('expand');
		$('.menu li').removeClass('animate');
		setTimeout(function () {
			$('.x').removeClass('rotate30');
			$('.z').removeClass('rotate150');
		}, 50);
		setTimeout(function () {
			$('.y').show();
			$('.x, .y, .z').removeClass('collapse');
		}, 70);
	}
