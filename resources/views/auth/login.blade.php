@extends('layout.master1')
@section('title', 'Đăng nhập')
@section('main')
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Đăng nhập</h1>                  
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">			
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img src="img/login.jpg" alt="">
						<div class="hover">
							<h4>Bạn chưa có tài khoản ?</h4>
							<a class="primary-btn" href="{{route('register')}}">Đăng ký ngay</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Đăng nhập</h3>
						{{-- kiểm lỗi --}}
						<!-- Session Status -->
						<x-auth-session-status class="mb-4" :status="session('status')" />
						<!-- Validation Errors -->
						<x-auth-validation-errors class="mb-4" :errors="$errors" />

						<form class="row login_form" action="{{ route('login') }}" method="post" id="contactForm" novalidate="novalidate">
							@csrf
							<div class="col-md-12 form-group">
								<x-label for="email" :value="__('Email')" />
								<input type="email" class="form-control" id="email" name="email" :value="old('email')" required autofocus>
							</div>
							<div class="col-md-12 form-group">
								<x-label for="password" :value="__('Mật khẩu')" />
								<input type="password" class="form-control" id="password" name="password" required autocomplete="current-password">
							</div>
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Ghi nhớ') }}</span>
                            </label>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">{{ __('Đăng nhập') }}</button>								
							</div>
							<div class="col-md-12 form-group">
								@if (Route::has('password.request'))
									<a class="nderline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
										{{ __('Quên mật khẩu?') }}
									</a>
								@endif
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->
@endsection