$(document).ready(function(){
    $('.add-image').click(function(){
        $(this).prev('.file').click();
    });

    $('.append-btn').click(function(){
        $(this).hide();
        $('.banner-appended').show();
        $(window).scrollTop($(window).scrollTop() + 465);
    });

    $('input[type=checkbox]').change(function() {
        if($(this).is(":checked")) {
            $(this).parents('.form_edit_banner').find('.add-image').hide();
            $(this).parents('.form_edit_banner').find('input[type=file]').show();
        }
        else{
            $(this).parents('.form_edit_banner').find('.add-image').show();
            $(this).parents('.form_edit_banner').find('input[type=file]').hide();
        }
        // $('#textbox1').val($(this).is(':checked'));
    });
});

function changeImg(input){
    //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
    if(input.files && input.files[0]){
    	var reader = new FileReader();
        //Sự kiện file đã được load vào website
        reader.onload = function(e){
            //Thay đổi đường dẫn ảnh
            $(input).next('.add-image').attr('src',e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

