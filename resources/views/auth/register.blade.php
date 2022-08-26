@extends('layout.master1')
@section('title', 'Đăng ký')
@section('main')

<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Đăng ký</h1>                  
            </div>
        </div>
    </div>
</section>

<section class="login_box_area section_gap">
    {{-- kiểm lỗi --}}
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    
    <div class="container">
        <div class="row">				
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>Đăng ký</h3>
                    {{-- kiểm lỗi --}}
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form class="row login_form" action="{{ route('register') }}" method="post" id="contactForm" novalidate="novalidate">
                        @csrf
                        <div class="col-md-12 form-group">
                            <x-label for="name" :value="__('Họ tên')" />
                            <input type="text" class="form-control" id="name" name="name" :value="old('name')" required autofocus>
                        </div>
                        <div class="col-md-12 form-group">
                            <x-label for="dia_chi" :value="__('Địa chỉ')" />
                            <input type="text" class="form-control" id="dia_chi" name="dia_chi" :value="old('dia_chi')" required autofocus>
                        </div>
                        <div class="col-md-12 form-group">
                            <x-label for="sdt" :value="__('Số điện thoại')" />
                            <input type="text" class="form-control" id="sdt" name="sdt" :value="old('sdt')" required autofocus>
                        </div>
                        <div class="col-md-12 form-group">
                            <x-label for="email" :value="__('Email')" />
                            <input type="email" class="form-control" id="email" name="email" :value="old('email')" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <x-label for="password" :value="__('Mật khẩu')" />
                            <input type="password" class="form-control" id="password" name="password" required autocomplete="new-password">
                        </div>	
                        <div class="col-md-12 form-group">
                            <x-label for="password_confirmation" :value="__('Nhập lại mật khẩu')" />
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">{{ __('Đăng ký') }}</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_box_img">
                    <img src="img/login.jpg" alt="">
                    <div class="hover">
                        <a class="primary-btn" href="{{ route('login') }}">
                            {{ __('Đăng nhập?') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

{{-- <x-guest-layout>
    <x-auth-card> --}}
        {{-- <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot> --}}

        <!-- Validation Errors -->
        {{-- <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}