$(document).ready(function(){
	$('.menu-01').click(function(){
		$('.menu-02').removeClass('active');
		$(this).addClass('active');
		$('.service-02').removeClass('active');
		$('.service-01').addClass('active');
	});

	$('.menu-02').click(function(){
		$('.menu-01').removeClass('active');
		$(this).addClass('active');
		$('.service-01').removeClass('active');
		$('.service-02').addClass('active');
	});

	$('textarea').each(function(){
		CKEDITOR.replace( this,{
			toolbar: [
				['Bold','Italic','Underline','NumberedList','BulletedList']
			],
			height:'150px'
		});
	});
});

