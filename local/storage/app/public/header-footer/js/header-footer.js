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
	setTimeout(function () {
        // $('video').prop('muted',false);
    },3000);

    // // $('video').attr('data-keepplaying', '');
	// // $('video').play();
    // document.getElementsByTagName('video').play();
});