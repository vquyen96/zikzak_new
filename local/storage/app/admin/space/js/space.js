$(document).ready(function(){
	$('#add-image').click(function(){
		$('#file').click();
	});
});

function changeImg(input){
    //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
    if(input.files && input.files[0]){
    	var reader = new FileReader();
        //Sự kiện file đã được load vào website
        reader.onload = function(e){
            //Thay đổi đường dẫn ảnh
            $('#add-image').css('background-image','url(' + e.target.result + ')');
        }
        reader.readAsDataURL(input.files[0]);

        $('#button').show();
    }
}