@extends('layout.master2')
@section('title')
{{$title}}
@endsection       
    <!-- Begin Page Content -->
@section('main_admin')
    <!-- cập nhật bài viết -->
    <div class="alert alert-success">
        <strong>
            <h3 style="text-align: center;">Cập nhật bài viết</h3>
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
    <div class="row">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <h5>ID bài viết</h5>
                <input class="form-control" disabled type="text" name="id_baiviet" value="{{$baiviet->id_baiviet}}">                 
            </div>
            <div class="form-group">
                <h5>Tiêu đề</h5>
                <input class="form-control" type="text" name="tieu_de" value="{{$baiviet->tieu_de}}">
                @error('tieu_de')
                    <span style="color:red">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <h5>Mô tả</h5>
                <input class="form-control" type="text" name="mo_ta" value="{{$baiviet->mo_ta}}">
                @error('mo_ta')
                    <span style="color:red">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <h5>Hình bài viết</h5>
                <input class="form-control" type="file" name="hinh" value="{{$baiviet->hinh}}">
                @error('hinh')
                    <span style="color:red">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <h5>Nội dung</h5>
                <td>
                    <textarea class="ckeditor" id="content" rows="10" cols="150" name="noi_dung">{{$baiviet->noi_dung}}</textarea>
                @error('noi_dung')
                    <span style="color:red">{{$message}}</span>
                @enderror
                </td>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="submit">Cập nhật bài viết</button>
        </form>                     
    </div>     
@endsection
