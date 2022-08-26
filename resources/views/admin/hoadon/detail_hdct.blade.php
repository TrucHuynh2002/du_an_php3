@extends('layout.master2')
@section('title')
{{$title}}
@endsection       
    <!-- Begin Page Content -->
@section('main_admin')
    <!-- hóa đơn -->
    <div class="alert alert-success">
        <strong>
            <h3 style="text-align: center;">Hóa đơn chi tiết</h3>
        </strong>
    </div>

    <!-- Nội dung -->
    <div class="row">
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th>ID_HDCT</th>
                <th>Số lượng</th>
                <th>Tên sản phẩm</th>
                <th>ID hóa đơn</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                  <td>{{$listhdct->id_hdct}}</td>
                  <td>{{$listhdct->so_luong}}</td>
                  <td>{{$listhdct->ten_sp}}</td>
                  <td>{{$listhdct->id_hd}}</td>                                        
                </tr>
            </tbody>
          </table>
    </div>     
@endsection