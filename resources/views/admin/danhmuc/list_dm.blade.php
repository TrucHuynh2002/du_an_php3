@extends('layout.master2')
@section('title')
{{$title}}
@endsection       
    <!-- Begin Page Content -->
@section('main_admin')
    <!-- danh mục -->
    <div class="alert alert-success">
        <strong>
            <h3 style="text-align: center;">Danh sách danh mục</h3>
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
                <th>ID danh mục</th>
                <th>Tên danh mục</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>                   
              @foreach ($listdm as $item)      
                <tr>
                  <td>{{$item->id_dm}}</td>
                  <td>{{$item->ten_dm}}</td>
                  <td>
                    <a href="{{route('edit_dm', ['id_dm' => $item->id_dm])}}"><button type="button" class="btn btn-outline-info"><i class='bx bxs-edit'></i></button></a>
                  </td>
                  <td>
                    <a href="{{route('delete_dm', ['id_dm' => $item->id_dm])}}"><button type="button" class="btn btn-outline-danger"><i class='bx bxs-trash'></i></button></a>
                  </td>
                </tr>
              @endforeach                              
            </tbody>
        </table>
    </div>      
@endsection