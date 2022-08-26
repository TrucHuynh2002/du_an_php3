@extends('layout.master1')
@section('title', 'Liên hệ')
@section('main')
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Liên hệ</h1>                 
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Contact Area =================-->
	<section class="contact_area section_gap_bottom">
		<div class="container">
			<div class="mapBox">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.108465256293!2d106.68081691382274!3d10.803004061658935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528da3a9815e7%3A0x87a6a76faedb5651!2zMjQvMUEgUGhhbiBYw61jaCBMb25nLCBQaMaw4budbmcgMywgUGjDuiBOaHXhuq1uLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1658938378026!5m2!1sen!2s" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			<div class="row">
				<div class="col-lg-3">
					<div class="contact_info">
						<div class="info_item">
							<i class='bx bx-home'></i>
							<p>24/1A Phan Xích Long, Phường 3, Phú Nhuận, Thành phố Hồ Chí Minh</p>
						</div>
						<div class="info_item">
							<i class='bx bx-phone-call'></i>
							<p>0902.678.910</p>                          
						</div>
						<div class="info_item">
							<i class='bx bx-time'></i>
							<p>Thời gian mở cửa: 8h00 – 22h00</p>
						</div>
					</div>
				</div>
				<div class="col-lg-9">
					{{-- kiểm lỗi --}}
					@if(Session::has('success'))
						<div class="alert alert-success">
							{{Session::get('success')}}
						</div>
                    @endif

					<form class="row contact_form" action="{{ route('contact.us.store') }}" method="post" id="contactForm" novalidate="novalidate">
						@csrf
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" name="name" placeholder="Họ tên" value="{{ old('name') }}">
								@if ($errors->has('name'))
									<span class="text-danger">{{ $errors->first('name') }}</span>
								@endif
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
								@if ($errors->has('email'))
									<span class="text-danger">{{ $errors->first('email') }}</span>
								@endif
							</div>	
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" name="phone" placeholder="Số điện thoại" value="{{ old('phone') }}">
								@if ($errors->has('phone'))
									<span class="text-danger">{{ $errors->first('phone') }}</span>
								@endif
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="subject" placeholder="Tiêu đề" value="{{ old('subject') }}">
								@if ($errors->has('subject'))
									<span class="text-danger">{{ $errors->first('subject') }}</span>
								@endif
							</div>	
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea class="form-control" name="message" rows="3" placeholder="Nội dung">{{ old('message') }}</textarea>
								@if ($errors->has('message'))
									<span class="text-danger">{{ $errors->first('message') }}</span>
								@endif
							</div>
						</div>
						<div class="col-md-12 text-right">
							<button type="submit" value="submit" class="primary-btn">Gửi</button>
						</div>
					</form>

				</div>
			</div>
		</div>
	</section>
	<!--================Contact Area =================-->
@endsection