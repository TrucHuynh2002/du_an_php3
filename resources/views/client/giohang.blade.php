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
                    <h1>Giỏ hàng</h1>             
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">

            {{-- kiểm lỗi --}}
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
            @if (isset($_SESSION['cart']))                
            <form action="/order" method="POST" enctype="multipart/form-data">
            @csrf  
                <div class="cart_inner">
                    <div class="table-responsive">   
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <td>Hình ảnh</td>
                                <td>Tên sản phẩm</td>
                                <td>Giá</td>
                                <td>Số lượng</td>
                                <td>Thành tiền</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </thead>
                                    
                        <?php  
                        if (isset($_SESSION['cart'])) {
                        $tong = 0;
                        foreach ($_SESSION['cart'] as $key => $a) { ?>  
                        <tbody>                                                               
                            <tr>
                                <td scope="row" class="cart_product col-lg-2 col-md-2 col-sm-2">
                                    <img width="50px" src="img/<?php echo $a['hinh_sp']?>" style="width:200px" alt="">
                                </td>
                                <td class="cart_description col-lg-2 col-md-2 col-sm-2">
                                    <h4><?php echo $a['ten_sp']?></h4>
                                </td>
                                <td class="cart_price col-lg-2 col-md-2 col-sm-2">
                                    <p class="gia_sp"><?php echo ($a['gia_sp'])?></p>
                                </td>         
                                <td class="cart_quantity col-lg-2 col-md-2 col-sm-2">
                                    <input type="number" name="quantity" value="<?php echo $a['quantity']; ?>"
                                    min="1" class="form-control input-number text-center sl" />
                                </td>                          
                                <td class="cart_quantity col-lg-2 col-md-2 col-sm-2">
                                    <span class="gia_tien"><?php echo ($a['gia_sp'] * $a['quantity'])?></span>
                                </td> 
                                <td class="cart_delete col-lg-2 col-md-2 col-sm-2">
                                    <a href="/deletecart?id=<?php echo $a['id']; ?>" class="closed">X</a>
                                </td> 
                                <input type="text" hidden name="id_sp" value="<?php echo $a['id']; ?>" >
                            </tr>
                            <?php 
                                $tong+=$a['gia_sp'] * $a['quantity'];
                                }
                            ?>
                            <tr>
                                <td>
                                    <ul>
                                        <li>Tổng tiền 
                                            <span id="tongtien" name="tongtien"><?php echo $tong ?></span>
                                            <input id="tongtien_input" hidden name="tongtien" value="<?php echo $tong ?>">
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <?php  
                            } ?>
                        </tbody>             
                    </table>
                    <hr>
                    <td>
                        <button class="primary-btn"><a style="color: white" href="{{route('sanpham')}}">Quay lại sản phẩm</a></button>
                        <button class="primary-btn" name="submit">Đặt hàng</button>
                    </td>
                    
                    </div>
                </div>                                      
            </form> 
            @else
                <h3 style="text-align: center">Không có sản phẩm nào !</h3>
            @endif          
            {{-- <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('sanpham')}}">Quay lại sản phẩm</a>
                </li>
            </ul>     --}}
        </div> 
    </section>
    <!--================End Cart Area =================-->
@endsection

