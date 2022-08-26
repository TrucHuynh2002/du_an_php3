<?php

namespace App\Http\Controllers;
use App\Models\hoadonmodel as hd;
use App\Models\hoadonctmodel as hdct;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function savecart(){
        session_start();
        if (isset($_GET['id']) && $_GET['ten_sp'] && $_GET['gia_sp'] && $_GET['hinh_sp'] && $_GET['quantity']) {
            $id = $_GET['id'];
            $ten_sp = $_GET['ten_sp'];
            $gia_sp = $_GET['gia_sp'];
            $hinh_sp = $_GET['hinh_sp'];
            $quantity = $_GET['quantity'];
        }
        if (isset($_GET['submit'])) {
            if (isset($_SESSION['cart'])) {
                if (isset($_SESSION['cart'][$id]['quantity'])) {
                    $_SESSION['cart'][$id]['quantity'] += $quantity;
                } else {
                    $_SESSION['cart'][$id]['quantity'] = $quantity;
                    $_SESSION['cart'][$id]['id'] = $id;
                    $_SESSION['cart'][$id]['ten_sp'] = $ten_sp;
                    $_SESSION['cart'][$id]['gia_sp'] = $gia_sp;
                    $_SESSION['cart'][$id]['hinh_sp'] = $hinh_sp;
                }                
            } else {
                $_SESSION['cart'][$id]['quantity'] = $quantity;
                $_SESSION['cart'][$id]['id'] = $id;
                $_SESSION['cart'][$id]['ten_sp'] = $ten_sp;
                $_SESSION['cart'][$id]['gia_sp'] = $gia_sp;
                $_SESSION['cart'][$id]['hinh_sp'] = $hinh_sp;
            }
        }    
        return redirect('/cart')->with(['success' => 'Thêm sản phẩm vào giỏ hàng thành công !']);
    }

    public function showcart(){
        session_start();
        $title = 'Giỏ hàng';
        return view('client.giohang', compact('title'));
    }

    public function deletecart(){
        session_start();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            unset($_SESSION['cart'][$id]);
            $title = 'Giỏ hàng';
        }
        return redirect('/cart')->with(['success' => 'Xóa sản phẩm trong giỏ hàng thành công !']);
    }

    public function order()
    {
        session_start();
        $order = new hd();
        $order->id_kh = Auth::id();
        if (isset($order->id_kh)) {
            $order->tong_tien = $_POST['tongtien'];
            // dd($order);
            $order->save();
            $detail = new hdct();
            $order = hd::limit(1)->orderBy('id_hd', 'desc')->get();
            foreach ($order as $value) {
                $abc = $value->id_hd;
            }
            $detail->id_hd = $abc;
            $detail->so_luong = $_POST['quantity'];
            $detail->id_sp = $_POST['id_sp'];
            $detail->save();           
            unset($_SESSION['cart']);
            return redirect('/hoadon/' . $detail->id_hd)
            ->with(['success' => 'Đặt hàng thành công !']);
        } else {
            $title = "Giỏ hàng";
            echo "<script>alert('Vui lòng đăng nhập tài khoản')</script>";
            return view('client.giohang', compact('title'));
        }
    }
}
