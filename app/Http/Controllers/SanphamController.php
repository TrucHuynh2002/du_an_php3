<?php

namespace App\Http\Controllers;
use App\Models\sanphammodel as sp;
use App\Models\danhmucmodel as dm;
use Illuminate\Http\Request;

class SanphamController extends Controller
{
    public function sanpham(){
        $title = 'Danh sách sản phẩm';
        $listsp = sp::all();     
        return view('admin.sanpham.list_sp', compact('title', 'listsp'));
    }

    public function themsanpham(){
        $title = "Thêm sản phẩm";
        $listdmsp = dm::all();
        return view('admin.sanpham.add_sp', compact('title'), ['listdmsp' => $listdmsp]);
    }

    public function postthemsanpham(Request $request){
        $request->validate([
            'ten_sp' => 'required',
            'gia' => 'required',
            'hinh' => 'required',
            'mo_ta' => 'required',
            'id_dm' => 'required'
        ], [
            'ten_sp.required' => 'Tên sản phẩm bắt buộc nhập',
            'gia.required' => 'Giá sản phẩm bắt buộc nhập',
            'hinh.required' => 'Hình sản phẩm bắt buộc nhập',
            'mo_ta.required' => 'Mô tả sản phẩm bắt buộc nhập',
            'id_dm.required' => 'Id danh mục bắt buộc nhập'
        ]);

        $sanpham = new sp();
        $sanpham->ten_sp = $_POST['ten_sp'];
        $sanpham->gia = $_POST['gia'];
        $sanpham->hinh = $_FILES['hinh']['name'];
        move_uploaded_file($_FILES['hinh']['tmp_name'], public_path('img/') .  $sanpham->hinh);
        $sanpham->mo_ta = $_POST['mo_ta'];
        $sanpham->id_dm = $_POST['id_dm'];
        $sanpham->save();
        return redirect('/admin/sp')->with(['success' => 'Thêm sản phẩm thành công !']);
    }

    public function suasanpham($id_sp){
        $title = "Cập nhật sản phẩm";
        $sanpham = sp::find($id_sp); 
        $listdmsp = dm::all();
        return view('admin.sanpham.edit_sp', compact('title', 'sanpham'), ['listdmsp' => $listdmsp]);
    }

    public function postsuasanpham($id_sp, Request $request){
        $request->validate([
            'ten_sp' => 'required',
            'gia' => 'required',
            'hinh' => 'required',
            'mo_ta' => 'required',
            'id_dm' => 'required'
        ], [
            'ten_sp.required' => 'Tên sản phẩm bắt buộc nhập',
            'gia.required' => 'Giá sản phẩm bắt buộc nhập',
            'hinh.required' => 'Hình sản phẩm bắt buộc nhập',
            'mo_ta.required' => 'Mô tả sản phẩm bắt buộc nhập',
            'id_dm.required' => 'Id danh mục bắt buộc nhập'
        ]);
        $sanpham = sp::find($id_sp);
        $sanpham->ten_sp = $_POST['ten_sp'];
        $sanpham->gia = $_POST['gia'];
        $sanpham->hinh = $_FILES['hinh']['name'];
        move_uploaded_file($_FILES['hinh']['tmp_name'], public_path('img/') .  $sanpham->hinh);
        $sanpham->mo_ta = $_POST['mo_ta'];
        $sanpham->id_dm = $_POST['id_dm'];
        $sanpham->save();
        return redirect('/admin/sp')->with(['success' => 'Cập nhật sản phẩm thành công !']);
    }

    public function xoasanpham($id_sp){
        $sanpham = sp::find($id_sp);
        $sanpham->delete();
        return redirect('/admin/sp')->with(['success' => 'Xóa sản phẩm thành công !']);
    }
}
