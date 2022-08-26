@extends('layout.master1')
@section('title')
{{$title}}
@endsection 
@section('main')
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Tìm kiếm</h1>               
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!-- End Banner Area -->
	<div class="container">
		<div class="row">

			<div class="col-xl-9 col-lg-8 col-md-7">
				<!-- Start Filter Bar -->
				{{-- phân trang --}}
				{{-- <div class="filter-bar d-flex flex-wrap align-items-center"> --}}
					{{-- {{ $list->links() }} --}}
				{{-- </div> --}}
				<!-- End Filter Bar -->
				<!-- Start Best Seller -->
				<section class="lattest-product-area pb-40 category-list">
					<div class="row">
						@if(isset($list))
						@foreach ($list as $item)
							<!-- single product -->
							<div class="col-lg-4 col-md-6">
								<div class="single-product">
									<img class="img-fluid" src='{{asset("img/".$item->hinh)}}' alt="{{$item->hinh}}">
									<div class="product-details">
										<a href="{{route('sp_chitiet', ['id_sp' => $item->id_sp])}}" class="social-info">
											<h6>{{$item->ten_sp}}</h6>
										</a>
										<div class="price">
											<h6>{{number_format($item->gia)}}<sup>đ</sup></h6>
										</div>
									</div>
								</div>
							</div>
						@endforeach 
						@else
							<h3 style="text-align: center">Không tìm thấy sản phẩm</h3>
						@endif
					</div>
				</section>
				<!-- End Best Seller -->
			</div>
		</div>
	</div>
@endsection