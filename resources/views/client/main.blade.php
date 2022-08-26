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
					<h1>Trang chủ</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	<section class="features-area section_gap">
		{{-- kiểm lỗi --}}
		@if(Session::has('success'))
			<div class="alert alert-success">
				{{Session::get('success')}}
			</div>
		@endif
		<div class="container">
			<div class="row features-inner">
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/f-icon1.png" alt="">
						</div>
						<h6>Miễn phí giao hàng</h6>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/f-icon2.png" alt="">
						</div>
						<h6>Chính sách đổi trả</h6>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/f-icon3.png" alt="">
						</div>
						<h6>Hỗ trợ 24/7</h6>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/f-icon4.png" alt="">
						</div>
						<h6>Thanh toán an toàn</h6>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end features Area -->

	<!-- start product Area -->
	<section class="lattest-product-area pb-40 category-list">
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Sản phẩm mới nhất</h1>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->
					@foreach ($spmn as $item)						
						<div class="col-lg-3 col-md-6">
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
				</div>
			</div>
		</div>
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Sản phẩm bán chạy</h1>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->
					@foreach ($spbc as $item)
						<div class="col-lg-3 col-md-6">
							<div class="single-product">
								<img class="img-fluid" src='{{asset("img/".$item->hinh)}}' alt="{{$item->hinh}}">
								<div class="product-details">
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
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
	<!-- end product Area -->
	
@endsection