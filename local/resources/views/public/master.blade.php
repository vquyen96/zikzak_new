<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<base href="{{ asset('local/storage/app/public') }}/">
	<meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″ />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="@yield('description')" />
	<meta name="keywords" content="@yield('keyword')" />
	<meta name="robots" content="index,follow" />
	<meta name="revisit-after" content="1 days" />
	<link href="base/image/favicon.png" rel="shortcut icon" type="image/x-icon" />

	<!-- facebook -->
	<meta property='og:title' content="@yield('title')"/>
	<meta property='og:description' content="@yield('description')"/>
	<meta property='og:type' content='website'/>
	<meta property='og:site_name' content='Sun Fantastic - Tên trang web'/>
	<meta property='og:image' content='Địa chỉ hình ảnh'/>
	<meta property='og:url' content='Địa chỉ URL bài viết'/>
	<meta property='fb:admins' content='ID'/>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-WFCWC9Q');</script>
	<!-- End Google Tag Manager -->



	<!-- css -->
	<link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900&amp;subset=vietnamese" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="header-footer/css/header-footer.css">
	<link rel="stylesheet" type="text/css" href="base/css/base.css">
	@yield('css')
	<!-- end css -->
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WFCWC9Q"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	{{-- LOADING PAGE --}}
	@include('public.header-footer.loading')
	{{-- END LOADING PAGE --}}
	
	{{-- HEADER --}}
	@include('public.header-footer.header')
	{{-- END HEADER --}}

	{{-- MAIN --}}
	<div id="main">
		@yield('main')
	</div>

	<style>
		.fb-livechat,
		.fb-widget {
			display: none
		}

		.ctrlq.fb-button,
		.ctrlq.fb-close {
			position: fixed;
			right: 24px;
			cursor: pointer
		}

		.ctrlq.fb-button {
			z-index: 999;
			background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDEyOCAxMjgiIGhlaWdodD0iMTI4cHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjggMTI4IiB3aWR0aD0iMTI4cHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxnPjxyZWN0IGZpbGw9IiMwMDg0RkYiIGhlaWdodD0iMTI4IiB3aWR0aD0iMTI4Ii8+PC9nPjxwYXRoIGQ9Ik02NCwxNy41MzFjLTI1LjQwNSwwLTQ2LDE5LjI1OS00Niw0My4wMTVjMCwxMy41MTUsNi42NjUsMjUuNTc0LDE3LjA4OSwzMy40NnYxNi40NjIgIGwxNS42OTgtOC43MDdjNC4xODYsMS4xNzEsOC42MjEsMS44LDEzLjIxMywxLjhjMjUuNDA1LDAsNDYtMTkuMjU4LDQ2LTQzLjAxNUMxMTAsMzYuNzksODkuNDA1LDE3LjUzMSw2NCwxNy41MzF6IE02OC44NDUsNzUuMjE0ICBMNTYuOTQ3LDYyLjg1NUwzNC4wMzUsNzUuNTI0bDI1LjEyLTI2LjY1N2wxMS44OTgsMTIuMzU5bDIyLjkxLTEyLjY3TDY4Ljg0NSw3NS4yMTR6IiBmaWxsPSIjRkZGRkZGIiBpZD0iQnViYmxlX1NoYXBlIi8+PC9zdmc+) center no-repeat #0084ff;
			width: 60px;
			height: 60px;
			text-align: center;
			bottom: 50px;
			border: 0;
			outline: 0;
			border-radius: 60px;
			-webkit-border-radius: 60px;
			-moz-border-radius: 60px;
			-ms-border-radius: 60px;
			-o-border-radius: 60px;
			box-shadow: 0 1px 6px rgba(0, 0, 0, .06), 0 2px 32px rgba(0, 0, 0, .16);
			-webkit-transition: box-shadow .2s ease;
			background-size: 80%;
			transition: all .2s ease-in-out
		}

		.ctrlq.fb-button:focus,
		.ctrlq.fb-button:hover {
			transform: scale(1.1);
			box-shadow: 0 2px 8px rgba(0, 0, 0, .09), 0 4px 40px rgba(0, 0, 0, .24)
		}

		.fb-widget {
			background: #fff;
			z-index: 1000;
			position: fixed;
			width: 360px;
			height: 400px;
			overflow: hidden;
			opacity: 0;
			bottom: 0;
			right: 24px;
			border-radius: 6px;
			-o-border-radius: 6px;
			-webkit-border-radius: 6px;
			box-shadow: 0 5px 40px rgba(0, 0, 0, .16);
			-webkit-box-shadow: 0 5px 40px rgba(0, 0, 0, .16);
			-moz-box-shadow: 0 5px 40px rgba(0, 0, 0, .16);
			-o-box-shadow: 0 5px 40px rgba(0, 0, 0, .16)
		}

		.fb-credit {
			text-align: center;
			margin-top: 8px
		}

		.fb-credit a {
			transition: none;
			color: #bec2c9;
			font-family: Helvetica, Arial, sans-serif;
			font-size: 12px;
			text-decoration: none;
			border: 0;
			font-weight: 400
		}

		.ctrlq.fb-overlay {
			z-index: 0;
			position: fixed;
			height: 100vh;
			width: 100vw;
			-webkit-transition: opacity .4s, visibility .4s;
			transition: opacity .4s, visibility .4s;
			top: 0;
			left: 0;
			background: rgba(0, 0, 0, .05);
			display: none
		}

		.ctrlq.fb-close {
			z-index: 4;
			padding: 0 6px;
			background: #365899;
			font-weight: 700;
			font-size: 11px;
			color: #fff;
			margin: 8px;
			border-radius: 3px
		}

		.ctrlq.fb-close::after {
			content: "X";
			font-family: sans-serif
		}

		.bubble {
			width: 20px;
			height: 20px;
			background: #c00;
			color: #fff;
			position: absolute;
			z-index: 999999999;
			text-align: center;
			vertical-align: middle;
			top: -2px;
			left: -5px;
			border-radius: 50%;
		}

		.bubble-msg {
			width: 120px;
			left: -140px;
			top: 5px;
			position: relative;
			background: rgba(59, 89, 152, .8);
			color: #fff;
			padding: 5px 8px;
			border-radius: 8px;
			text-align: center;
			font-size: 13px;
		}
	</style>
	<div class="fb-livechat">
		<div class="ctrlq fb-overlay"></div>
		<div class="fb-widget">
			<div class="ctrlq fb-close"></div>
			<div class="fb-page" data-href="https://www.facebook.com/zikzakcoworkingspace" data-tabs="messages" data-width="360" data-height="400" data-small-header="true" data-hide-cover="true" data-show-facepile="false"> </div>
			{{--<div class="fb-credit"> <a href="https://chanhtuoi.com" target="_blank">Powered by Chanhtuoi</a> </div>--}}
			<div id="fb-root"></div>
		</div><a href="https://m.me/zikzakcoworkingspace" title="Gửi tin nhắn cho chúng tôi qua Facebook" class="ctrlq fb-button">
			<div class="bubble">1</div>
			<div class="bubble-msg">Bạn cần hỗ trợ?</div>
		</a>
	</div>
	<script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script>
        $(document).ready(function() {
            function detectmob() {
                if (navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i)) {
                    return true;
                } else {
                    return false;
                }
            }
            var t = {
                delay: 125,
                overlay: $(".fb-overlay"),
                widget: $(".fb-widget"),
                button: $(".fb-button")
            };
            setTimeout(function() {
                $("div.fb-livechat").fadeIn()
            }, 8 * t.delay);
            if (!detectmob()) {
                $(".ctrlq").on("click", function(e) {
                    e.preventDefault(), t.overlay.is(":visible") ? (t.overlay.fadeOut(t.delay), t.widget.stop().animate({
                        bottom: 0,
                        opacity: 0
                    }, 2 * t.delay, function() {
                        $(this).hide("slow"), t.button.show()
                    })) : t.button.fadeOut("medium", function() {
                        t.widget.stop().show().animate({
                            bottom: "30px",
                            opacity: 1
                        }, 2 * t.delay), t.overlay.fadeIn(t.delay)
                    })
                })
            }
        });
	</script>
	{{--<style>.fb-livechat, .fb-widget{display: none}.ctrlq.fb-button, .ctrlq.fb-close{position: fixed; right: 24px; cursor: pointer}.ctrlq.fb-button{z-index: 999; background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDEyOCAxMjgiIGhlaWdodD0iMTI4cHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjggMTI4IiB3aWR0aD0iMTI4cHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxnPjxyZWN0IGZpbGw9IiMwMDg0RkYiIGhlaWdodD0iMTI4IiB3aWR0aD0iMTI4Ii8+PC9nPjxwYXRoIGQ9Ik02NCwxNy41MzFjLTI1LjQwNSwwLTQ2LDE5LjI1OS00Niw0My4wMTVjMCwxMy41MTUsNi42NjUsMjUuNTc0LDE3LjA4OSwzMy40NnYxNi40NjIgIGwxNS42OTgtOC43MDdjNC4xODYsMS4xNzEsOC42MjEsMS44LDEzLjIxMywxLjhjMjUuNDA1LDAsNDYtMTkuMjU4LDQ2LTQzLjAxNUMxMTAsMzYuNzksODkuNDA1LDE3LjUzMSw2NCwxNy41MzF6IE02OC44NDUsNzUuMjE0ICBMNTYuOTQ3LDYyLjg1NUwzNC4wMzUsNzUuNTI0bDI1LjEyLTI2LjY1N2wxMS44OTgsMTIuMzU5bDIyLjkxLTEyLjY3TDY4Ljg0NSw3NS4yMTR6IiBmaWxsPSIjRkZGRkZGIiBpZD0iQnViYmxlX1NoYXBlIi8+PC9zdmc+) center no-repeat #0084ff; width: 60px; height: 60px; text-align: center; bottom: 50px; border: 0; outline: 0; border-radius: 60px; -webkit-border-radius: 60px; -moz-border-radius: 60px; -ms-border-radius: 60px; -o-border-radius: 60px; box-shadow: 0 1px 6px rgba(0, 0, 0, .06), 0 2px 32px rgba(0, 0, 0, .16); -webkit-transition: box-shadow .2s ease; background-size: 80%; transition: all .2s ease-in-out}.ctrlq.fb-button:focus, .ctrlq.fb-button:hover{transform: scale(1.1); box-shadow: 0 2px 8px rgba(0, 0, 0, .09), 0 4px 40px rgba(0, 0, 0, .24)}.fb-widget{background: #fff; z-index: 1000; position: fixed; width: 360px; height: 435px; overflow: hidden; opacity: 0; bottom: 0; right: 24px; border-radius: 6px; -o-border-radius: 6px; -webkit-border-radius: 6px; box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -webkit-box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -moz-box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -o-box-shadow: 0 5px 40px rgba(0, 0, 0, .16)}.fb-credit{text-align: center; margin-top: 8px}.fb-credit a{transition: none; color: #bec2c9; font-family: Helvetica, Arial, sans-serif; font-size: 12px; text-decoration: none; border: 0; font-weight: 400}.ctrlq.fb-overlay{z-index: 0; position: fixed; height: 100vh; width: 100vw; -webkit-transition: opacity .4s, visibility .4s; transition: opacity .4s, visibility .4s; top: 0; left: 0; background: rgba(0, 0, 0, .05); display: none}.ctrlq.fb-close{z-index: 4; padding: 0 6px; background: #365899; font-weight: 700; font-size: 11px; color: #fff; margin: 8px; border-radius: 3px}.ctrlq.fb-close::after{content: "X"; font-family: sans-serif}.bubble{width: 20px; height: 20px; background: #c00; color: #fff; position: absolute; z-index: 999999999; text-align: center; vertical-align: middle; top: -2px; left: -5px; border-radius: 50%;}.bubble-msg{width: 120px; left: -140px; top: 5px; position: relative; background: rgba(59, 89, 152, .8); color: #fff; padding: 5px 8px; border-radius: 8px; text-align: center; font-size: 13px;}</style><div class="fb-livechat"> <div class="ctrlq fb-overlay"></div><div class="fb-widget"> <div class="ctrlq fb-close"></div><div class="fb-page" data-href="https://www.facebook.com/zikzakcoworkingspace" data-tabs="messages" data-width="360" data-height="400" data-small-header="true" data-hide-cover="true" data-show-facepile="false"> </div><div class="fb-credit"> <a href="https://chanhtuoi.com" target="_blank">Powered by Chanhtuoi</a> </div><div id="fb-root"></div></div><a href="https://m.me/zikzakcoworkingspace" title="Gửi tin nhắn cho chúng tôi qua Facebook" class="ctrlq fb-button"> <div class="bubble">1</div><div class="bubble-msg">Bạn cần hỗ trợ?</div></a></div><script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script><script>$(document).ready(function(){function detectmob(){if( navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i) ){return true;}else{return false;}}var t={delay: 125, overlay: $(".fb-overlay"), widget: $(".fb-widget"), button: $(".fb-button")}; setTimeout(function(){$("div.fb-livechat").fadeIn()}, 8 * t.delay); if(!detectmob()){$(".ctrlq").on("click", function(e){e.preventDefault(), t.overlay.is(":visible") ? (t.overlay.fadeOut(t.delay), t.widget.stop().animate({bottom: 0, opacity: 0}, 2 * t.delay, function(){$(this).hide("slow"), t.button.show()})) : t.button.fadeOut("medium", function(){t.widget.stop().show().animate({bottom: "30px", opacity: 1}, 2 * t.delay), t.overlay.fadeIn(t.delay)})})}});</script>--}}
	{{--end live chat--}}
	{{--<script lang="javascript">var _vc_data = {id : 5708332, secret : '63c0b5d90c2800a709145e068e561bfd'};(function() {var ga = document.createElement('script');ga.type = 'text/javascript';ga.async=true; ga.defer=true;ga.src = '//live.vnpgroup.net/client/tracking.js?id=5708332';var s = document.getElementsByTagName('script');s[0].parentNode.insertBefore(ga, s[0]);})();</script>--}}

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120898677-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-120898677-1');
	</script>
	
	{{--<script type="text/javascript" campaign="461" id="mobileads" src="https://funnycms.com/plugins/mobileads/resources/assets/js/app.js"></script>--}}
	<script type="text/javascript" src="header-footer/js/header-footer.js"></script>
	@yield('javascript')
	<!-- end script -->
</body>
</html>