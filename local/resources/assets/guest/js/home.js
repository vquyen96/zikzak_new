{
    setTimeout(() => document.body.classList.add('render'), 60);
    const navdemos = Array.from(document.querySelectorAll('nav.demos > .demo'));
    const total = navdemos.length;
    const current = navdemos.findIndex(el => el.classList.contains('demo--current'));
    const navigate = (linkEl) => {
        document.body.classList.remove('render');
        document.body.addEventListener('transitionend', () => window.location = linkEl.href);
    };
    navdemos.forEach(link => link.addEventListener('click', (ev) => {
        ev.preventDefault();
        navigate(ev.target);
    }));
    document.addEventListener('keydown', (ev) => {
        const keyCode = ev.keyCode || ev.which;
        let linkEl;
        if (keyCode === 37) {
            linkEl = current > 0 ? navdemos[current - 1] : navdemos[total - 1];
        }
        else if (keyCode === 39) {
            linkEl = current < total - 1 ? navdemos[current + 1] : navdemos[0];
        }
        else {
            return false;
        }
        navigate(linkEl);
    });
    imagesLoaded('.glitch__img', {background: true}, () => {
        document.body.classList.remove('loading');
        document.body.classList.add('imgloaded');
    });
}

$("#create_question").validate({
    ignore: [],
    rules: {
        'fullname': {
            required: true
        },
        'email': {
            required: true,
            email: true
        },
        'content': {
            required: true,
        }
    },
    messages: {
        'fullname': {
            required: 'Vui lòng nhập họ và tên'
        },
        'email': {
            required: 'Vui lòng nhập email',
            email: 'Email không đúng định dạng'
        },
        'content': {
            required: 'Vui lòng nhập nội dung câu hỏi'
        }
    }
});

$("#login_form").validate({
    ignore: [],
    rules: {
        'email': {
            required: true,
            email: true
        },
        'password': {
            required: true,
        }
    },
    messages: {
        'email': {
            required: 'Vui lòng nhập email',
            email: 'Email không đúng định dạng'
        },
        'password': {
            required: 'Vui lòng nhập mật khẩu'
        }
    }
});

$("#register").validate({
    ignore: [],
    rules: {
        'fullname': {
            required: true
        },
        'email': {
            required: true,
            email : true
        },
        'password': {
            required: true,
            minlength: 8,
        },
        'password_1': {
            required: true,
            equalTo: "#password"
        },
        'card_id': {
            required: true,
            number: true,
            minlength: 9,
            maxlength: 12
        },
        'phone': {
            required: true,
            number: true,
            minlength: 10,
            maxlength: 11
        },
    },
    messages: {
        'fullname': {
            required: 'Vui lòng nhập họ và tên'
        },
        'email': {
            required: 'Vui lòng nhập email',
            email: 'Email không đúng định dạng'
        },
        'password': {
            required: 'Vui lòng nhập mật khẩu',
            minlength: 'Mật khẩu không được nhỏ hơn 8 ký tự'
        },
        'password_1': {
            required: 'Vui lòng xác nhận lại mật khẩu',
            equalTo: "Mật khẩu nhập lại không đúng"
        },
        'card_id': {
            required: 'Vui lòng nhập số chứng minh nhân dân',
            number: 'Số chứng minh nhân dân là một dãy số',
            minlength: 'Số chứng minh không được nhỏ hơn 9 ký tự',
            maxlength: 'Số chứng minh không được lớn hơn 12 ký tự'
        },
        'phone': {
            required: 'Vui lòng nhập số điện thoại',
            number: 'Số điện thoại là một dãy số',
            minlength: 'Số điện thoại không được nhỏ hơn 10 ký tự',
            maxlength: 'Số điện thoại không được lớn hơn 11 ký tự'
        },
    }
});

$("#update-profile").validate({
    ignore: [],
    rules: {
        'user[fullname]': {
            required: true
        },
        'user[email]': {
            required: true,
            email : true
        },
        'user[card_id]': {
            required: true,
            number: true,
            minlength: 9,
            maxlength: 12
        },
        'user[phone]': {
            required: true,
            number: true,
            minlength: 10,
            maxlength: 11
        },
    },
    messages: {
        'user[fullname]': {
            required: 'Vui lòng nhập họ và tên'
        },
        'user[email]': {
            required: 'Vui lòng nhập email',
            email: 'Email không đúng định dạng'
        },
        'user[card_id]': {
            required: 'Vui lòng nhập số chứng minh nhân dân',
            number: 'Số chứng minh nhân dân là một dãy số',
            minlength: 'Số chứng minh không được nhỏ hơn 9 ký tự',
            maxlength: 'Số chứng minh không được lớn hơn 12 ký tự'
        },
        'user[phone]': {
            required: 'Vui lòng nhập số điện thoại',
            number: 'Số điện thoại là một dãy số',
            minlength: 'Số điện thoại không được nhỏ hơn 10 ký tự',
            maxlength: 'Số điện thoại không được lớn hơn 11 ký tự'
        },
    }
});

$("#group_create_client").validate({
    ignore: [],
    rules: {
        'group[name]': {
            required: true,
        },
        'license': {
            required: true,
        }
    },
    messages: {
        'group[name]': {
            required: 'Vui lòng nhập email',
        },
        'license': {
            required: 'Bạn chưa chấp nhận các điều khoản của cuộc thi'
        }
    }
});

$("#add-member").validate({
    ignore: [],
    rules: {
        'email': {
            required: true,
            email: true
        }
    },
    messages: {
        'email': {
            required: 'Bạn vui lòng nhập email',
            email: 'Email không đúng định dạng'
        }
    }
});

$("#change_pass").validate({
    ignore: [],
    rules: {
        'pass_old': {
            required: true,
        },
        'pass_new_1': {
            required: true,
        },
        'pass_new_2': {
            required: true,
            equalTo: "#pass_new_1"
        }
    },
    messages: {
        'pass_old': {
            required: 'Vui lòng nhập mật khẩu cũ',
        },
        'pass_new_1': {
            required: 'Vui lòng nhập mật khẩu mới'
        },
        'pass_new_2': {
            required: 'Vui lòng xác nhận mật khẩu mới',
            equalTo: 'Mật khẩu mới không khớp'
        }
    }
});

$("#forget_pass").validate({
    ignore: [],
    rules: {
        'pass_new_1': {
            required: true,
        },
        'pass_new_2': {
            required: true,
            equalTo: "#pass_new_1"
        }
    },
    messages: {
        'pass_new_1': {
            required: 'Vui lòng nhập mật khẩu mới'
        },
        'pass_new_2': {
            required: 'Vui lòng xác nhận mật khẩu mới',
            equalTo: 'Mật khẩu mới không khớp'
        }
    }
});


$("#form-group").validate({
    ignore: [],
    rules: {
        'group[name]': {
            required: true,
        },
        'group[name_topic]': {
            required: true,
        },
        'group[career]': {
            required: true,
        },
        'name-description_1': {
            required: true,
        },
        'name-video_1': {
            required: true,
        },
        'group[type_product]': {
            required: true,
        },
        'group[source]': {
            required: true,
        },
    },
    messages: {
        'group[name]': {
            required: 'Thiếu tên nhóm',
        },
        'group[name_topic]': {
            required: 'Thiếu tên dự án',
        },
        'group[career]': {
            required: 'Thiếu tên lĩnh vự',
        },
        'name-description_1': {
            required: 'Thiếu file mô tả',
        },
        'name-video_1': {
            required: 'Thiếu file video giới thiệu',
        },
        'group[type_product]': {
            required: 'Thiếu loại mô hình sản phẩm',
        },
        'group[source]': {
            required: 'Thiếu nguồn thông tin',
        },
    },
    // invalidHandler: submit_form()
});


$("#info_project").validate({
    ignore: [],
    rules: {
        'group[name_topic]': {
            required: true,
        },
        'group[career]': {
            required: true,
        },
        'name-description_1': {
            required: true,
        },
        'name-video_1': {
            required: true,
        },
        'group[type_product]': {
            required: true,
        },
        'group[source]': {
            required: true,
        },
    },
    messages: {
        'group[name]': {
            required: 'Thiếu tên nhóm',
        },
        'group[name_topic]': {
            required: 'Thiếu tên dự án',
        },
        'group[career]': {
            required: 'Thiếu tên lĩnh vự',
        },
        'name-description_1': {
            required: 'Thiếu file mô tả',
        },
        'name-video_1': {
            required: 'Thiếu file video giới thiệu',
        },
        'group[type_product]': {
            required: 'Thiếu loại mô hình sản phẩm',
        },
        'group[source]': {
            required: 'Thiếu nguồn thông tin',
        },
    },
    // invalidHandler: info_project()
});


function changeImage(input) {
    //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
    if(input.files && input.files[0]){
        var reader = new FileReader();
        //Sự kiện file đã được load vào website
        reader.onload = function(e){
            //Thay đổi đường dẫn ảnh
            var str = "background-image: url(" + e.target.result + ");";
            $('#avatar_img').attr('style',str)

        };
        reader.readAsDataURL(input.files[0]);
    }
}

$('#upload_avatar').click(function () {
    $('#img').click();
})


$('.user').click(function() {
    $('#header .dropdown ul').slideToggle();
});

if( $('#header').offset().top > 0 ){
    $('#header').css('background-color','#000');
}else{
    $('#header').css('background-color','unset');
}

$(window).scroll(function(){
    if( $('#header').offset().top > 0 ){
        $('#header').css('background-color','#000');
    }else{
        $('#header').css('background-color','unset');
    }

    if( $(window).scrollTop() > 600 ){
        $('#to-top').show();
    }else{
        $('#to-top').hide();
    }
});

$('#to-top').click(function(){
    $('html').animate({ scrollTop: 0 }, 'fast');
});

function submit_form(){
    if($('#form-group').valid()) $('#loading').removeClass('d-none');
    // $('#form-group').submit();
}

function info_project(){
    if($('#info_project')) $('#loading').removeClass('d-none');
    // $('#info_project').submit();
}

function forgot_password() {
    $('#myModal').modal();
}