@extends('layout.master1')
@section('title', 'Quên mật khẩu')
@section('main')
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Quên mật khẩu</h1>                  
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-10">
					<div class="login_form_inner">
						<h3>Quên mật khẩu</h3>
						{{-- kiểm lỗi --}}
						<!-- Session Status -->
						<x-auth-session-status class="mb-4" :status="session('status')" />
						<!-- Validation Errors -->
						<x-auth-validation-errors class="mb-4" :errors="$errors" />

						<form class="row login_form" action="{{ route('password.email') }}" method="post" id="contactForm" novalidate="novalidate">	
							@csrf	
                            <div class="col-md-12 form-group">
								<x-label for="email" :value="__('Email')" />
								<input type="email" class="form-control" id="email" name="email" :value="old('email')" required autofocus>
							</div>			
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">{{ __('Liên kết đặt lại mật khẩu email') }}</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->
@endsection

{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
