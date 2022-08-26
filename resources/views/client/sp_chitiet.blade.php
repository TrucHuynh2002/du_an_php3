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
                    <h1>Sản phẩm</h1>                 
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Single Product Area =================-->
	<form action="/savecart" method="GET" enctype="multipart/form-data">
		{{-- kiểm lỗi --}}
		@if(Session::has('success'))
		<div class="alert alert-success">
			{{Session::get('success')}}
		</div>
		@endif
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="single-product">
						<img class="img-fluid" src='{{asset("img/".$listspct->hinh)}}' alt="{{$listspct->hinh}}">
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3>{{$listspct->ten_sp}}</h3>
						<h2>{{number_format($listspct->gia)}}<sup>đ</sup></h2>
						<div class="product_count">
							<label for="quantity">Số lượng</label>
							<input type="number" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
							<input type="hidden" name="id" value="{{$listspct->id_sp}}">
							<input type="hidden" name="ten_sp" value="{{$listspct->ten_sp}}">
							<input type="hidden" name="gia_sp" value="{{$listspct->gia}}">
							<input type="hidden" name="hinh_sp" value="{{$listspct->hinh}}">
						</div>
						<div class="card_area d-flex align-items-center">
							<button type="submit" name="submit" class="btn btn-primary btn-addtocart">
								<i class="icon-shopping-cart"></i> 
								Thêm vào giỏ hàng
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
	<!--================End Single Product Area =================-->

	<!--================Product Description Area =================-->
	<section class="product_description_area">
		<div class="container">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Mô tả</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
					 aria-selected="false">Bình luận</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
					{!! $listspct->mo_ta !!}
				</div>	
					{{-- Hiển thị bình luận --}}
				<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
					<div class="row">
						<div class="col-lg-6">
							<div class="comment_list">
								@foreach ($list_bl as $item)
									<div class="review_item">
										<div class="media">
											<div class="d-flex">
												<img src="{{asset('img/R.png')}}" alt="{{asset('img/R.png')}}" style="width:30px">
											</div>
											<div class="media-body">
												<h4>{{$item->name}}</h4>
												<h5>{{$item->created_at}}</h5>
											</div>
										</div>
										<p>{{$item->noi_dung}}</p>
									</div>
								@endforeach
							</div>
						</div>
						<div class="col-lg-6">
							<div class="review_box">
								<h4>Đánh giá sản phẩm</h4>
								<form class="row contact_form" action="{{ route('binhluan.store') }}" method="post" id="contactForm" novalidate="novalidate">
									@csrf
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" name="noi_dung" rows="1" placeholder="Nội dung"></textarea>
										</div>
										<input type="hidden" name="id_sp" value="{{$listspct->id_sp}}">
									</div>
									<div class="col-md-12 text-right">
										<button type="submit" class="btn primary-btn">Gửi bình luận</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</section>
	<!--================End Product Description Area =================-->
@endsection
