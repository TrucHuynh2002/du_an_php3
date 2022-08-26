<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\binhluanmodel as bl;
use Illuminate\Http\Request;

class BinhluanController extends Controller
{
    public function binhluan(){
        $title = 'Danh sách bình luận';
        // $listbl = bl::all();
        $listbl = bl::join('users', 'users.id', '=', 'binhluan.id_kh')->get();
        return view('admin.binhluan.list_bl', compact('title', 'listbl'));
    }

    public function xoabinhluan($id_bl){
        $binhluan = bl::find($id_bl);
        $binhluan->delete();
        return redirect('/admin/bl')->with(['success' => 'Xóa bình luận thành công !']);
    }
}
