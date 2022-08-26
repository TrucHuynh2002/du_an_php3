@extends('layout.master2')
@section('title')
{{$title}}
@endsection       
    <!-- Begin Page Content -->
@section('main_admin')
    <!-- danh mục -->
    <div class="alert alert-success">
        <strong>
            <h3 style="text-align: center;">Cập nhật sản phẩm</h3>
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
            <h5>ID sản phẩm</h5>
            <input class="form-control" disabled type="text" name="id_sp" value="{{$sanpham->id_sp}}">                 
        </div>
        <div class="form-group">
            <h5>Tên sản phẩm</h5>
            <input class="form-control" type="text" name="ten_sp" value="{{$sanpham->ten_sp}}">
            @error('ten_sp')
                <span style="color:red">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <h5>Giá</h5>
            <input class="form-control" type="text" name="gia" value="{{$sanpham->gia}}">
            @error('gia')
                <span style="color:red">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <h5>Hình</h5>
            <input class="form-control" type="file" name="hinh" value="{{$sanpham->hinh}}">
            @error('hinh')
                <span style="color:red">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <h5>Mô tả</h5>
            <td>
                <textarea class="ckeditor" id="content" rows="10" cols="150" name="mo_ta">{{$sanpham->mo_ta}}</textarea>
            </td>
            @error('mo_ta')
                <span style="color:red">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <h5>ID danh mục</h5>
            <select class="form-control" name="id_dm">
                @foreach ($listdmsp as $item)
                  <option value="{{$item->id_dm}}">{{$item->ten_dm}}</option>
                @endforeach
            </select>
            @error('id_dm')
                <span style="color:red">{{$message}}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-block" name="submit">Cập nhật sản phẩm</button>
    </form>                         
@endsection
