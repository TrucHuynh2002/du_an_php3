@extends('layout.master1')
@section('title')
{{$title}}
@endsection
@section('main')

<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Thông tin cá nhân</h1>                  
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
            <div class="col-lg-12">
                <div class="login_form_inner">
                    <h3>Thông tin cá nhân</h3>

                    <form class="row login_form" action="" method="post">
                        @csrf
                        <div class="col-md-12 form-group">
                            <label for="name">Họ tên</label>
                            <input type="text" class="form-control" name="name" value="{{$taikhoan->name}}">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="name">Địa chỉ</label>
                            <input type="text" class="form-control" name="dia_chi" value="{{$taikhoan->dia_chi}}">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="name">Số điện thoại</label>
                            <input type="text" class="form-control" name="sdt" value="{{$taikhoan->sdt}}">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="name">Email</label>
                            <input type="email" class="form-control" name="email" value="{{$taikhoan->email}}">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="name">Mật khẩu</label>
                            <input type="password" class="form-control" name="password" value="{{$taikhoan->password}}">
                        </div>	
                        <div class="col-md-12 form-group">
                            <button type="submit" name="submit" class="primary-btn">Cập nhật thông tin</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
