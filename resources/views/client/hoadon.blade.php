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
                    <h1>Đơn hàng</h1>                 
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Order Details Area =================-->
	<section class="order_details section_gap">
		<div class="container">
			<h3 class="title_confirmation">
				@if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
           		@endif
			</h3>
			<div class="container" style="margin-bottom: 40px;">			
				<div class="row d-flex justify-content-center align-items-center mt-3">
					<div class="col-md-7">
						<div class="table-order"
							style="width: 100%; border-radius: 0%; border: 2px solid #cca772;height: auto; padding:15px;box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.1);">
							<div class="row d-flex justify-content-center align-items-center text-center">
								<div class="table-order">
									<div class="form-group">
										{{-- <h4>Chào <span>{{$list_dh->name}}</span></h4> --}}
										<p>Chúc mừng bạn đã đặt hàng thành công từ shop Karma Store của chúng tôi !</p>
									</div>
								</div>
							</div>
							<div class="row d-flex justify-content-center align-items-center">
								<div class="col-md-12">
									<div class="row d-flex justify-content-center align-items-center" style="padding-left: 15px;">
										<p style="font-weight: bold;">Thông tin hóa đơn</p>
									</div>
			
									<div class="row d-flex justify-content-center align-items-center"
										style="padding-left: 15px; border-bottom: 2px solid #ccc; padding-bottom: 10px;">
										<table>
											<tr>
												<td width="250px">Mã hóa đơn: </td>
												<td style="font-weight: bold;"><span>{{$list_dh->id_hd}}</span></td>
											</tr>
			
											<tr>
												<td width="250px">Dự kiến giao hàng: </td>
												<td style="font-weight: bold;">Từ 3-4 ngày</td>
											</tr>
			
											<tr>
												<td width="250px">Tổng thanh toán: </td>
												<td style="font-weight: bold;"><span>{{number_format($list_dh->tong_tien)}}<sup>đ</sup></span></td>
											</tr>
			
											<tr>
												<td width="250px">Tình trạng: </td>
												<td style="font-weight: bold;"><span>Chưa thanh toán</span></td>
											</tr>
										</table>
									</div>
								</div>
							</div>
			
								<p style="text-align: center">Cảm ơn bạn đã tin tưởng và mua hàng tại Karma Shop. <br> Xin chân thành cảm ơn !</p>
			
							<div class="row d-flex justify-content-center align-items-center">
								<button class="primary-btn"><a style="color: white" href="{{route('sanpham')}}">Quay lại sản phẩm</a></button>								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Order Details Area =================-->
@endsection