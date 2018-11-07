$(document).ready(function(){
	$('.menu-01').click(function(){
		$('.menu-02').removeClass('active');
		$(this).addClass('active');
		$('.community-02').removeClass('active');
		$('.community-01').addClass('active');
	});

	$('.menu-02').click(function(){
		$('.menu-01').removeClass('active');
		$(this).addClass('active');
		$('.community-01').removeClass('active');
		$('.community-02').addClass('active');
	});
});