@extends('layout.master2')
@section('title')
{{$title}}
@endsection       
    <!-- Begin Page Content -->
@section('main_admin')
    <!-- thêm bài viết -->
    <div class="alert alert-success">
        <strong>
            <h3 style="text-align: center;">Thêm bài viết</h3>
        </strong>
    </div>

    {{-- kiểm lõi --}}
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">Dữ liệu không hợp lệ. Vui lòng kiểm tra lại !</div>
    @endif

    <!-- Nội dung -->
    <div class="row">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <h5>Tiêu đề</h5>
                <input class="form-control" type="text" name="tieu_de" value="">
                @error('tieu_de')
                    <span style="color:red">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <h5>Mô tả</h5>
                <input class="form-control" type="text" name="mo_ta" value="">
                @error('mo_ta')
                    <span style="color:red">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <h5>Hình bài viết</h5>
                <input class="form-control" type="file" name="hinh" value="">
                @error('hinh')
                    <span style="color:red">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <h5>Nội dung</h5>
                <td>
                    <textarea class="ckeditor" id="content" rows="10" cols="150" name="noi_dung"></textarea>
                @error('noi_dung')
                    <span style="color:red">{{$message}}</span>
                @enderror
                </td>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="submit">Thêm bài viết</button>
        </form>                     
    </div>    
@endsection
