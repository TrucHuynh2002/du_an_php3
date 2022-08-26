@extends('layout.master2')
@section('title')
{{$title}}
@endsection       
    <!-- Begin Page Content -->
@section('main_admin') 
<div class="container">
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card1 border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <a href="{{route('list_dm')}}">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Danh mục</div>
                            </a>
                            <div class="h5 mb-0 font-weight-bold text-dark">{{$danhmuc}}</div>
                        </div>
                        <div class="col-auto">
                            <i class='bx bx-category-alt' style="font-size: 40px;" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- sản phẩm -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card1 border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <a href="{{route('list_sp')}}">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Sản phẩm </div>
                            </a>
                            <div class="h5 mb-0 font-weight-bold text-dark">{{$sanpham}}</div>
                        </div>
                        <div class="col-auto">
                            <i class='bx bx-store-alt' style="font-size: 40px;" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- bình luận -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card1 border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <a href="{{route('list_bl')}}">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Bình luận
                                </div>
                            </a>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-dark">{{$binhluan}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class='bx bx-message-dots' style="font-size: 40px;" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Khách hàng -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card1 border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <a href="{{route('list_kh')}}">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Khách hàng</div>
                            </a>
                            <div class="h5 mb-0 font-weight-bold text-dark">{{$user}}</div>
                        </div>
                        <div class="col-auto">
                            <i class='bx bxs-user' style="font-size: 40px;" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Hóa đơn --}}
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card1 border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <a href="{{route('list_hd')}}">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Hóa đơn</div>
                            </a>
                            <div class="h5 mb-0 font-weight-bold text-dark">{{$hoadon}}</div>
                        </div>
                        <div class="col-auto">
                            <i class='bx bxs-calendar' style="font-size: 40px;" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Bài viết --}}
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card1 border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <a href="{{route('list_bv')}}">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Bài viết</div>
                            </a>
                            <div class="h5 mb-0 font-weight-bold text-dark">{{$baiviet}}</div>
                        </div>
                        <div class="col-auto">
                            <i class='bx bx-news' style="font-size: 40px;" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- <div class="row">
        <div class="col-md-6">
            <div class="chart-left"
                style="border: 1px solid #dedede; width: 100%; height: 300px; box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.2);">
                <!-- biểu đồ doanh thu  -->    
                <canvas id="myChart_doanhthu"></canvas>
            </div>
        </div>
        <div class="col-md-6">
            <div class="chart-right"
                style="border: 1px solid #dedede; width: 100%; height: 300px; box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.2); padding: 30px;">
                <!-- biểu đồ hình tròn thống kê sản phẩm -->
                <canvas id="myChart_sanpham"></canvas>
            </div>
        </div>
    </div> --}}
</div>
@endsection