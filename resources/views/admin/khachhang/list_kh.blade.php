@extends('layout.master2')
@section('title')
{{$title}}
@endsection       
    <!-- Begin Page Content -->
@section('main_admin')
    <!-- khách hàng -->
    <div class="alert alert-success">
        <strong>
            <h3 style="text-align: center;">Danh sách khách hàng</h3>
        </strong>
    </div>

    <!-- Nội dung -->
    <div class="row">
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th>ID khách hàng</th>
                <th>Họ tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($listkh as $item)
              <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>                   
                <td>{{$item->sdt}}</td>                   
                <td>{{$item->dia_chi}}</td>                   
              </tr>
            @endforeach
            </tbody>
          </table>
    </div>     
@endsection