<?php

namespace App\Http\Controllers;
use App\Models\hoadonmodel as hd;
use App\Models\hoadonctmodel as hdct;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HoadonController extends Controller
{
    public function hoadon(){
        $title = 'Danh sách hóa đơn'; 
        // $list_hd = hd::all();
        $list_hd = hd::join('users', 'users.id', '=', 'hoadon.id_kh')->get();
        // dd($list_hd);
        return view('admin.hoadon.list_hd', compact('title', 'list_hd'));
    }

    public function hoadonchitiet($id_hdct){
        $title = 'Hóa đơn chi tiết';
        // $listhdct = hdct::find($id_hdct);
        $listhdct = hdct::join('sanpham', 'sanpham.id_sp', '=', 'hoadonchitiet.id_sp')->first();
        // dd($listhdct);
        return view('admin.hoadon.detail_hdct', compact('title', 'listhdct'));
    }
}