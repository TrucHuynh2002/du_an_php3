<?php

namespace App\Http\Controllers;
use App\Models\baivietmodel as bv;
use App\Models\sanphammodel as sp;
use App\Models\danhmucmodel as dm;
use App\Models\binhluanmodel as bl;
use App\Models\hoadonmodel as hd;
use App\Models\hoadonctmodel as hdct;
use App\Models\sanphammodel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $title = "Trang chủ";
        $spmn  =  sp::limit(4)->orderBy('id_sp','desc')->get();
        $spbc  =  sp::limit(4)->orderBy('id_sp','asc')->get();
        return view('client.main', compact('title', 'spmn', 'spbc'));
    }

    public function tintuc(){
        $title = "Tin tức";
        $listbv = bv::all();
        return view('client.tintuc', compact('title', 'listbv'));
    }

    public function ct_tintuc($id_baiviet){
        $title = "Chi tiết tin tức";
        $listbvct = bv::find($id_baiviet);
        return view('client.ct_tintuc', compact('title', 'listbvct'));
    }

    public function sanpham(){
        $title = "Sản phẩm";
        $listdm = dm::all();
        $listsp = sp::paginate(6)->withQueryString();
        return view('client.sanpham', compact('title', 'listdm', 'listsp'));
    }

    public function sanpham_danhmuc($id){
        $title = "Sản phẩm";
        $listdm = dm::all();
        $listsp = sp::where('id_dm','=', $id)->paginate(6);
        return view('client.sanpham', compact('title', 'listdm', 'listsp'));
    }

    public function sp_chitiet($id_sp){
        $title = "Sản phẩm chi tiết";
        $listspct = sp::find($id_sp);
        $quality = 1;
        $listspct->luot_xem += $quality;
        $listspct->save();
        $list_bl = bl::join('users', 'users.id', '=', 'binhluan.id_kh')->where('id_sp', '=', $id_sp)->get();
        return view('client.sp_chitiet', compact('title', 'listspct', 'list_bl'));
    }

    public function giohang(){
        $title = "Giỏ hàng";
        $listhd = hd::all();
        return view('client.giohang', compact('title', 'listhd'));
    }

    public function taikhoan($id){
        $title = "Thông tin cá nhân";
        $taikhoan = User::find($id); 
        return view('client.taikhoan', compact('title', 'taikhoan'));
    }

    public function posttaikhoan($id){
        $taikhoan = User::find($id);
        $taikhoan->name = $_POST['name'];
        $taikhoan->dia_chi = $_POST['dia_chi'];
        $taikhoan->sdt = $_POST['sdt'];
        $taikhoan->email = $_POST['email'];
        $taikhoan->password = $_POST['password'];
        $taikhoan->save();
        return redirect('/')->with(['success' => 'Cập nhật thông tin cá nhân thành công !']);
        // return redirect('/');
    }

    public function hoadon($id_hd){
        $title = "Thông tin hóa đơn";
        $list_dh = hd::find($id_hd);
        // $list_dh = hd::join('users', 'users.id', '=', 'hoadon.id_kh')->get();
        // dd($list_hddh);
        // dd($list_dh);
        return view('client.hoadon', compact('title', 'list_dh'));
    }

    public function timkiem(Request $request)
    {
        $title = "Tìm kiếm";
        if(isset($request->q) && $request->q != null){
            $list = sanphammodel::where('ten_sp', 'LIKE', '%'.$request->q.'%')->get();      
        }else{
            $list = null;
        }
        return view('client.timkiem' ,compact('list','title'));
    }
}
