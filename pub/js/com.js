$(document).ready(function(){
//헤더
	$(window).scroll(function() {
		if ($(window).scrollTop() > 100) {
			$(".header").addClass("fixed");
		} else {
			$(".header").removeClass("fixed");
		}
	});
	$(".btn_menu").click(function(){
		$("html,body").stop(false,true).toggleClass("over_h");
		$(".header").stop(false,true).toggleClass("on");
		$(".header").removeClass("search_on");
		$(".header .search_area").fadeOut("fast");
	});
	$(".header .sitemap .menu .mo_vw").click(function(){
		$(this).next(".snb").stop(false,true).slideToggle("fast").parent().stop(false,true).toggleClass("open").siblings().removeClass("open").removeClass("on").children(".snb").slideUp("fast");
	});
	
	$(".svisual .aside_wrap .btn").click(function(){
		$(this).next(".aside").stop(false,true).slideToggle("fast");
	});

	$(".header .gnb .menu, .header .sub_wrap").mouseover(function(){
		$(".header").addClass("hover search_on");
		$(".header .search_area").fadeOut("fast");
	});
	$(".header .gnb .menu, .header .sub_wrap").mouseleave(function(){
		$(".header").removeClass("hover");
	});
	$(".header .btn_search").click(function(){
		$(".header").addClass("search_on").removeClass("on");
		$(".header .search_area").stop(false,true).fadeToggle("fast");
	});
	$(document).on('click', function (e) {
        const $searchArea = $(".header, .header .search_area");
        if (!$searchArea.is(e.target) && $searchArea.has(e.target).length === 0) {
            $(".header").removeClass("search_on");
           $(".header .search_area").fadeOut("fast");
        }
    });
// gotop
	$(".gotop").click(function(){
		$('body, html').animate({scrollTop:0}, 500);
	});
	$(window).scroll(function () {
		if ($(window).scrollTop() > $('#gotop_stoper').offset().top) {
			$('.gotop').addClass("fixed");
		} else {
			$('.gotop').removeClass("fixed");
		}
	});
//fancybox
	//$(".fancybox").fancybox();
//aside
	/*$(".aside dt").click(function(event){
		$(this).next("dd").stop(false,true).slideToggle("fast").parent().stop(false,true).toggleClass("on").siblings().removeClass("on").children("dd").slideUp("fast");
		event.stopPropagation(); // 이벤트 전파를 막음
	});
	$(document).click(function(event){
		if(!$(event.target).closest('.aside dl').length) {
			$(".aside dl").removeClass("on").children("dd").slideUp("fast");
		}
	});*/
//브라우저 사이즈
	let vh = window.innerHeight * 0.01; 
	document.documentElement.style.setProperty('--vh', `${vh}px`);
//화면 리사이즈시 변경 
	window.addEventListener('resize', () => {
		let vh = window.innerHeight * 0.01; 
		document.documentElement.style.setProperty('--vh', `${vh}px`);
	});
	window.addEventListener('touchend', () => {
		let vh = window.innerHeight * 0.01;
		document.documentElement.style.setProperty('--vh', `${vh}px`);
	});
});