<?php

namespace App\Http\Controllers;
use App\Models\baivietmodel as bv;
use App\Models\sanphammodel as sp;
use App\Models\danhmucmodel as dm;
use App\Models\binhluanmodel as bl;
use App\Models\hoadonmodel as hd;
use App\Models\hoadonctmodel as hdct;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ChartController extends Controller
{

    public function index(){
        // phần index admin
        $title = "Admin";
        // đếm xem có bao nhiêu sản phẩm 
        $sanpham = sp::all()->count(); 

        // đếm xem có bao nhiêu danh mục
        $danhmuc = dm::all()->count(); 

        // đếm bình luận 
        $binhluan = bl::all()->count(); 

       // đếm hóa đơn 
       $hoadon = hd::all()->count(); 

       // đếm bài viết
       $baiviet = bv::all()->count(); 

       // đếm người 
       $user = User::all()->count();

        return view('admin.thongke.dashboard', compact('title', 'sanpham', 'danhmuc', 'binhluan', 'hoadon',
        'baiviet', 'user'));

    }

}
