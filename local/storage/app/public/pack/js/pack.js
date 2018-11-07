function show(id){
	$('.pack-content').hide();
	$('.pack-img').hide();
	$('.content-' + id).show();
}
$('.pack-content').first().show();
$('.pack-img').first().show();

$('.pack-btn').click(function(){
	$('.pack-btn').removeClass('active');
	$(this).addClass('active');
});