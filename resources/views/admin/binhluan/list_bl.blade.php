@extends('layout.master2')
@section('title')
{{$title}}
@endsection       
    <!-- Begin Page Content -->
@section('main_admin')
    <!-- bình luận -->
    <div class="alert alert-success">
        <strong>
            <h3 style="text-align: center;">Danh sách bình luận</h3>
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
                <th>ID bình luận</th>
                <th>Nội dung</th>
                <th>Tên khách hàng</th>
                <th>Ngày bình luận</th>
                <th>ID sản phẩm</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($listbl as $item) 
                <tr>
                  <td>{{$item->id_bl}}</td>
                  <td>{{$item->noi_dung}}</td>
                  <td>{{$item->name}}</td>
                  <td>{{$item->created_at}}</td>
                  <td>{{$item->id_sp}}</td>
                  <td>
                    <a href="{{route('delete_bl', ['id_bl' => $item->id_bl])}}"><button type="button" class="btn btn-outline-danger"><i class='bx bxs-trash'></i></button></a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
    </div>      
@endsection