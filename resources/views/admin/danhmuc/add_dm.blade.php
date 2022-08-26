@extends('layout.master2')
@section('title')
{{$title}}
@endsection       
    <!-- Begin Page Content -->
@section('main_admin')
    <!-- danh mục -->
    <div class="alert alert-success">
        <strong>
            <h3 style="text-align: center;">Thêm danh mục</h3>
        </strong>
    </div>

    {{-- kiểm lỗi --}}
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">Dữ liệu không hợp lệ. Vui lòng kiểm tra lại !</div>
    @endif

    <!-- Nội dung -->
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <h5>Tên danh mục</h5>                       
            <input class="form-control" type="text" name="ten_dm">
            @error('ten_dm')
                <span style="color:red">{{$message}}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-block" name="submit">Thêm danh mục</button>
    </form>                          
@endsection
