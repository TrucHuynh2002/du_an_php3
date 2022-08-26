@extends('layout.master2')
@section('title')
{{$title}}
@endsection       
    <!-- Begin Page Content -->
@section('main_admin')
  <!-- bài viết -->
  <div class="alert alert-success">
      <strong>
          <h3 style="text-align: center;">Danh sách bài viết</h3>
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
      <table class="table">
          <thead class="thead-light">
            <tr>
              <th>ID bài viết</th>
              <th>Tiêu đề</th>
              <th>Hình</th>
              <th>Mô tả</th>
              <th>Ngày đăng</th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($listbv as $item)
              <tr>
                <td>{{$item->id_baiviet}}</td>
                <td>{{$item->tieu_de}}</td>
                <td><img style="width: 100px" src='{{asset("img/".$item->hinh)}}' alt="{{$item->hinh}}"></td>
                <td>{!! $item->mo_ta !!}</td>
                <td>{{$item->created_at}}</td>
                <td>
                  <a href="{{route('edit_bv', ['id_baiviet' => $item->id_baiviet])}}"><button type="button" class="btn btn-outline-info"><i class='bx bxs-edit'></i></button></a>
                </td>
                <td>
                  <a href="{{route('delete_bv', ['id_baiviet' => $item->id_baiviet])}}"><button type="button" class="btn btn-outline-danger"><i class='bx bxs-trash'></i></button></a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
  </div>    
@endsection