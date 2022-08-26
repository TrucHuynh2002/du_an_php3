@extends('layout.master1')
@section('title', 'Cập nhật mật khẩu')
@section('main')
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Cập nhật mật khẩu</h1>                  
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
						<h3>Cập nhật mật khẩu</h3>
						{{-- kiểm lỗi --}}
						<x-auth-validation-errors class="mb-4" :errors="$errors" />

						<form class="row login_form" action="{{ route('password.update') }}" method="post" id="contactForm" novalidate="novalidate">	
							@csrf	
							<input type="hidden" name="token" value="{{ $request->route('token') }}">
                            <div class="col-md-12 form-group">
								<x-label for="email" :value="__('Email')" />
								<input type="email" class="form-control" id="email" name="email" :value="old('email', $request->email)" required autofocus />
							</div>	
							<div class="col-md-12 form-group">
								<x-label for="password" :value="__('Mật khẩu')" />
								<input type="password" class="form-control" id="password" name="password" required />
							</div>
							<div class="col-md-12 form-group">
								<x-label for="password_confirmation" :value="__('Nhập lại mật khẩu')" />
								<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required />
							</div>		
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">{{ __('Cập nhật mật khẩu') }}</button>
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

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
