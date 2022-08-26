@extends('layout.master2')
@section('title')
{{$title}}
@endsection       
    <!-- Begin Page Content -->
@section('main_admin') 
  <!-- sản phẩm -->
  <div class="alert alert-success">
    <strong>
        <h3 style="text-align: center;">Danh sách sản phẩm</h3>
    </strong>
  </div>

  <!-- Nội dung -->
  <div class="row">
    {{-- kiểm lỗi --}}
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
  @endif
      <table class="table" id="myTable">
          <thead class="thead-light">
            <tr>
              <th>ID sản phẩm</th>
              <th>Tên sản phẩm</th>
              <th>Hình</th>
              <th>Giá</th>
              {{-- <th>Mô tả</th> --}}
              <th>Lượt xem</th>
              <th>Ngày nhập</th>
              <th>ID danh mục</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($listsp as $item) 
              <tr>
                <td>{{$item->id_sp}}</td>
                <td>{{$item->ten_sp}}</td>
                <td><img style="width: 100px" src='{{asset("img/".$item->hinh)}}' alt="{{$item->hinh}}"></td>
                <td>{{number_format($item->gia)}}<sup>đ</sup></td>
                <td>{{$item->luot_xem}}</td>
                <td>{{$item->created_at}}</td> 
                <td>{{$item->id_dm}}</td> 
                <td>
                  <a href="{{route('edit_sp', ['id_sp' => $item->id_sp])}}"><button type="button" class="btn btn-outline-info"><i class='bx bxs-edit'></i></button></a>
                </td>
                <td>
                  <a href="{{route('delete_sp', ['id_sp' => $item->id_sp])}}"><button type="button" class="btn btn-outline-danger"><i class='bx bxs-trash'></i></button></a>
                </td>                  
              </tr>
            @endforeach  
          </tbody>
        </table>
  </div>
@endsection