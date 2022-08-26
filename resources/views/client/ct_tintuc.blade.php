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
    <section class="blog_area single-post-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12 col-md-12 blog_details">
                            <h2>{{$listbvct->tieu_de}}</h2>
                            <p class="excert">{!! $listbvct->noi_dung !!}</p>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
@endsection