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
                    <h1>Tin tức</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
  
    <!--================Blog Area =================-->
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog_left_sidebar">
                        <article class="row blog_item">
                            <div class="col-md-12">
                                @foreach ($listbv as $item)
                                    <div class="blog_post">
                                        <img src='{{asset("img/".$item->hinh)}}' alt="{{$item->hinh}}">
                                        <div class="blog_details">
                                            <a href="{{route('ct_tintuc', ['id_baiviet' => $item->id_baiviet])}}">
                                                <h2>{{$item->tieu_de}}</h2>
                                            </a>
                                            <p>{!! $item->mo_ta !!}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
@endsection