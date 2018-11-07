$(document).ready(function(){
	$('.loading-page').hide();

	$('.menu-button').click(function(){
		$('.header-right').slideToggle();
	});

	$('.plus-button').click(function(){
		$('.dropdown').slideToggle();
	});
});