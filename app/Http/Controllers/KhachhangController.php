<?php

namespace App\Http\Controllers;

use App\Models\User as kh;

use Illuminate\Http\Request;

class KhachhangController extends Controller
{
    public function khachhang(){
        $title = 'Danh sách khách hàng';
        $listkh = kh::all();
        return view('admin.khachhang.list_kh', compact('title', 'listkh'));
    }
}
