@extends('layout.master1')
@section('title', 'Xác nhận mật khẩu')
@section('main')
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Xác nhận mật khẩu</h1>                  
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
						<h3>Xác nhận mật khẩu</h3>
						{{-- kiểm lỗi --}}
						<x-auth-validation-errors class="mb-4" :errors="$errors" />

						<form class="row login_form" action="{{ route('password.confirm') }}" method="post" id="contactForm" novalidate="novalidate" >	
							@csrf	
                            <div class="col-md-12 form-group">
								<x-label for="password" :value="__('Mật khẩu')" />
								<input type="password" class="form-control" id="password" name="password" required autocomplete="current-password" >
							</div>			
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">{{ __('Xác nhận') }}</button>
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
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <div class="flex justify-end mt-4">
                <x-button>
                    {{ __('Confirm') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
