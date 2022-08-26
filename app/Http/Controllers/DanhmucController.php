<?php

namespace App\Http\Controllers;

use App\Models\danhmucmodel as dm;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DanhmucController extends Controller
{

    public function danhmuc(){
        $title = "Danh sách danh mục";
        $listdm = dm::all();
        return view('admin.danhmuc.list_dm', compact('title', 'listdm'));
    }

    public function themdanhmuc(){
        $title = "Thêm danh mục";
        return view('admin.danhmuc.add_dm', compact('title'));
    }

    public function postthemdanhmuc(Request $request){
        $request->validate([
            'ten_dm' => 'required|min:3|unique:danhmuc'
        ], [
            'ten_dm.required' => 'Tên danh mục bắt buộc nhập',
            'ten_dm.min' => 'Tên danh mục phải từ :min ký tự trở lên',
            'ten_dm.unique' => 'Tên danh mục đã tồn tại'
        ]);
        $danhmuc = new dm();
        $danhmuc->ten_dm = $_POST['ten_dm'];
        $danhmuc->save();
        return redirect('/admin/dm')->with(['success' => 'Thêm danh mục thành công !']);
    }

    public function suadanhmuc($id_dm){
        $title = "Cập nhật danh mục";
        $danhmuc = dm::find($id_dm); 
        return view('admin.danhmuc.edit_dm', compact('title', 'danhmuc'));
    }

    public function postsuadanhmuc($id_dm, Request $request){
        $request->validate([
            'ten_dm' => 'required|min:3|unique:danhmuc'
        ], [
            'ten_dm.required' => 'Tên danh mục bắt buộc nhập',
            'ten_dm.min' => 'Tên danh mục phải từ :min ký tự trở lên',
            'ten_dm.unique' => 'Tên danh mục đã tồn tại'
        ]);
        $danhmuc = dm::find($id_dm);
        $danhmuc->ten_dm = $_POST['ten_dm'];
        $danhmuc->save();
        return redirect('/admin/dm')->with(['success' => 'Cập nhật danh mục thành công !']);
    }

    public function xoadanhmuc($id_dm){
        $danhmuc = dm::find($id_dm);
        $danhmuc->delete();
        return redirect('/admin/dm')->with(['success' => 'Xóa danh mục thành công !']);
    }

}
