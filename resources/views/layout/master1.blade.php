<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>@yield('title')</title>
	<!-- ============================================= -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="{{asset('css/linearicons.css')}}">
	{{-- <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"> --}}
	<link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset('css/nouislider.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/ion.rangeSlider.css')}}" />
	<link rel="stylesheet" href="{{asset('css/ion.rangeSlider.skinFlat.css')}}" />
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>
	<!-- Start Header -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="{{route('index')}}"><img src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="{{route('index')}}">Trang chủ</a></li>
							<li class="nav-item"><a class="nav-link" href="{{route('sanpham')}}">Sản phẩm</a></li>
							<li class="nav-item"><a class="nav-link" href="{{route('tintuc')}}">Tin tức</a></li>
							<li class="nav-item"><a class="nav-link" href="{{route('lienhe')}}">Liên hệ</a></li>
						</ul>
					<ul class="nav navbar-nav navbar-right">
						@if (Auth::check()) 
						@if (Auth::User()->vai_tro == 0)
							<ul class="nav navbar-toolbar">
								<li class="dropdown dropdown-user">
									<a class="nav-link dropdown-toggle link" data-toggle="dropdown">
										<span></span><?=Auth::User()->name?>
									</a>
									<ul class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="/admin">Admin</a>
										<a class="dropdown-item" href="/taikhoan/{{Auth::User()->id}}">Thông tin cá nhân</a>
										<a class="dropdown-item" href="/logout">Đăng xuất</a>
									</ul>
								</li>
							</ul>
						@else
							<ul class="nav navbar-toolbar">
								<li class="dropdown dropdown-user">
									<a class="nav-link dropdown-toggle link" data-toggle="dropdown">
										<span></span><?=Auth::User()->name?>
									</a>
									<ul class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="/taikhoan/{{Auth::User()->id}}">Thông tin cá nhân</a>
										<a class="dropdown-item" href="/logout">Đăng xuất</a>
									</ul>
								</li>
							</ul>
						@endif						
						@else
							<li class="nav-item"><a href="{{route('login')}}" class="cart"><span><i class='bx bx-user'></i></span></a></li>
						@endif

						<li class="nav-item"><a href="{{route('giohang')}}" class="cart"><span><i class='bx bx-cart'></i></span></a></li>
							<li class="nav-item">
								<button class="search"><span id="search"><i class='bx bx-search'></i></span></button>
							</li>
					</ul>						
					</div>
				</div>
			</nav>
		</div>
		{{-- tìm kiếm --}}
		<div class="search_input" id="search_input_box">			
			<div class="container">
				<form class="d-flex justify-content-between" method="GET" action="{{route('timkiem')}}" >
					<input type="text" class="form-control" id="search_input" name="q" placeholder="Tìm kiếm">
					<button type="submit" class="btn"></button>
					<span class="" id="close_search" title="Close Search"><i class='bx bx-x'></i></span>
				</form>

			</div>
		</div>
		
	</header>
	<!-- End Header -->

    {{-- Start Content --}}
	@yield('main')
    {{-- End Content --}}

	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
			    <p class="footer-text m-0">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | WEB16301</p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->
	<script src="{{asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('js/jquery.sticky.js')}}"></script>
	<script src="{{asset('js/nouislider.min.js')}}"></script>
	<script src="{{asset('js/countdown.js')}}"></script>
	<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{asset('js/gmaps.min.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
	<script src="{{asset('js/cart.js')}}"></script>
</body>
</html>