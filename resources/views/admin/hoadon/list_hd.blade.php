@extends('layout.master2')
@section('title')
{{$title}}
@endsection       
    <!-- Begin Page Content -->
@section('main_admin')
    <!-- hóa đơn -->
    <div class="alert alert-success">
        <strong>
            <h3 style="text-align: center;">Danh sách hóa đơn</h3>
        </strong>
    </div>

    <!-- Nội dung -->
    <div class="row">
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th>ID hóa đơn</th>
                <th>Tên khách hàng</th>
                <th>Địa chỉ giao</th>
                <th>Sđt</th>
                <th>Email</th>
                <th>Tổng tiền</th>
                <th>Ngày tạo</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($list_hd as $item)
                <tr>
                  <td>{{$item->id_hd}}</td>
                  <td>{{$item->name}}</td>
                  <td>{{$item->dia_chi}}</td>
                  <td>{{$item->sdt}}</td>
                  <td>{{$item->email}}</td>
                  <td>{{number_format($item->tong_tien)}}<sup>đ</sup></td>
                  <td>{{$item->created_at}}</td>
                  <td>
                      <a href="{{route('detail_hd', ['id_hd' => $item->id_hd])}}"><button type="button" class="btn btn-outline-primary"><i class='bx bxs-detail'></i></button></a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
    </div>     
@endsection