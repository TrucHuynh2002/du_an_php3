<?php

namespace App\Http\Controllers;
use App\Models\baivietmodel as bv;
use Illuminate\Http\Request;

class BaivietController extends Controller
{
    public function baiviet(){
        $title = 'Danh sách bài viết';
        $listbv = bv::all();
        return view('admin.baiviet.list_bv', compact('title', 'listbv'));
    }

    // public function detail_bv($id_baiviet){
    //     $title = 'Chi tiết bài viết';
    //     $list_bvct = bv::find($id_baiviet);
    //     return view('admin.baiviet.detail_bv', compact('title', 'list_bvct'));
    // }

    public function thembaiviet(){
        $title = "Thêm bài viết";
        return view('admin.baiviet.add_bv', compact('title'));
    }

    public function postthembaiviet(Request $request){
        $request->validate([
            'tieu_de' => 'required',
            'mo_ta' => 'required',
            'noi_dung' => 'required',
            'hinh' => 'required',
        ], [
            'tieu_de.required' => 'Tiêu đề bắt buộc nhập',
            'mo_ta.required' => 'Tiêu đề bắt buộc nhập',
            'noi_dung.required' => 'Nội dung bắt buộc nhập',
            'hinh.required' => 'Hình bắt buộc nhập'
        ]);
        $baiviet = new bv();
        $baiviet->tieu_de = $_POST['tieu_de'];
        $baiviet->mo_ta = $_POST['mo_ta'];
        $baiviet->noi_dung = $_POST['noi_dung'];
        $baiviet->hinh = $_FILES['hinh']['name'];
        move_uploaded_file($_FILES['hinh']['tmp_name'], public_path('img/') .  $baiviet->hinh);
        $baiviet->save();
        return redirect('/admin/bv')->with(['success' => 'Thêm bài viết thành công !']);
    }

    public function suabaiviet($id_baiviet){
        $title = "Cập nhật bài viết";
        $baiviet = bv::find($id_baiviet); 
        return view('admin.baiviet.edit_bv', compact('title', 'baiviet'));
    }

    public function postsuabaiviet($id_baiviet, Request $request){
        $request->validate([
            'tieu_de' => 'required',
            'mo_ta' => 'required',
            'noi_dung' => 'required',
            'hinh' => 'required',
        ], [
            'tieu_de.required' => 'Tiêu đề bắt buộc nhập',
            'mo_ta.required' => 'Tiêu đề bắt buộc nhập',
            'noi_dung.required' => 'Nội dung bắt buộc nhập',
            'hinh.required' => 'Hình bắt buộc nhập'
        ]);
        $baiviet = bv::find($id_baiviet);
        $baiviet->tieu_de = $_POST['tieu_de'];
        $baiviet->mo_ta = $_POST['mo_ta'];
        $baiviet->noi_dung = $_POST['noi_dung'];
        $baiviet->hinh = $_FILES['hinh']['name'];
        move_uploaded_file($_FILES['hinh']['tmp_name'], public_path('img/') .  $baiviet->hinh);
        $baiviet->save();
        return redirect('/admin/bv')->with(['success' => 'Cập nhật bài viết thành công !']);
    }

    public function xoabaiviet($id_baiviet){
        $baiviet = bv::find($id_baiviet);
        $baiviet->delete();
        return redirect('/admin/bv')->with(['success' => 'Xóa bài viết thành công !']);
    }
}
