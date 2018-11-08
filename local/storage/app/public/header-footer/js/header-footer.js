$(document).ready(function(){
	$('.loading-page').hide();

	$('.menu-button').click(function(){
		$('.header-right').slideToggle();
	});

	$('.plus-button').click(function(){
		$('.dropdown').slideToggle();
	});

	$('.btn_show_nav').click(function(){
		$('.header_mobi_nav').slideToggle();
	});
});