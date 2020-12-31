<!DOCTYPE html>
<html>
<head>
	<title>First Laravel Project</title>
	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/customize.css')}}">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
@include('frontend.layouts.header')

@yield('content')

@include('frontend.layouts.footer')

	<!-- <script src="js/jquery-3.2.1.slim.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(window).scroll(function(){
				if($(this).scrollTop()>300){
					$('.gotoup').fadeIn();
				}else{
					$('.gotoup').fadeOut();
				}
			});
			$('.gotoup').click(function(){
				$('html,body').animate({scrollTop:0},1000);
			});
		});
	</script>
	<script src="{{asset('frontend/js/popper.min.js')}}"></script>
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
</body>
</html>