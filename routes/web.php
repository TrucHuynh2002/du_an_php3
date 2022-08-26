<?php

use App\Http\Controllers\BaivietController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CmtController;
use App\Http\Controllers\DanhmucController;
use App\Http\Controllers\HoadonController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KhachhangController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SanphamController;
use App\Http\Controllers\BinhluanController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//--------------------------------------------- CLIENT ---------------------------------------------- //
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/tintuc', [HomeController::class, 'tintuc'])->name('tintuc');
Route::get('/ct_tintuc/{id_baiviet}', [HomeController::class, 'ct_tintuc'])->name('ct_tintuc');
Route::get('/sanpham', [HomeController::class, 'sanpham'])->name('sanpham');
Route::get('/sanphamdm/{id}', [HomeController::class, 'sanpham_danhmuc'])->name('sanphamdm');
Route::get('/sp_chitiet/{id_sp}', [HomeController::class, 'sp_chitiet'])->name('sp_chitiet');
Route::get('/taikhoan/{id}', [HomeController::class, 'taikhoan'])->name('taikhoan');
Route::post('/taikhoan/{id}', [HomeController::class, 'posttaikhoan'])->name('taikhoan');
Route::get('/hoadon/{id_hd}', [HomeController::class, 'hoadon'])->name('hoadon');

Route::get('/tim-kiem', [HomeController::class, 'timkiem'])->name('timkiem');

//--------------------------------------------- GIỎ HÀNG -------------------------------------------- //
Route::get('/cart', [CartController::class, 'showcart'])->name('giohang');
Route::get('/savecart', [CartController::class, 'savecart'])->name('savecart');
Route::post('/order', [CartController::class, 'order'])->name('order');
Route::get('/deletecart', [CartController::class, 'deletecart'])->name('deletecart');

//--------------------------------------------- ADMIN ----------------------------------------------- //
//--------------------------------------------- DANH MỤC -------------------------------------------- //
Route::get('/admin/dm', [DanhmucController::class, 'danhmuc'])->name('list_dm');
Route::get('/admin/add_dm', [DanhmucController::class, 'themdanhmuc'])->name('add_dm');
Route::post('/admin/add_dm', [DanhmucController::class, 'postthemdanhmuc'])->name('add_dm');
Route::get('/admin/edit_dm/{id_dm}', [DanhmucController::class, 'suadanhmuc'])->name('edit_dm');
Route::post('/admin/edit_dm/{id_dm}', [DanhmucController::class, 'postsuadanhmuc'])->name('edit_dm');
Route::get('/admin/delete_dm/{id_dm}', [DanhmucController::class, 'xoadanhmuc'])->name('delete_dm');

//-------------------------------------------- SẢN PHẨM --------------------------------------------- //
Route::get('/admin/sp', [SanphamController::class, 'sanpham'])->name('list_sp');
Route::get('/admin/add_sp', [SanphamController::class, 'themsanpham'])->name('add_sp');
Route::post('/admin/add_sp', [SanphamController::class, 'postthemsanpham'])->name('add_sp');
Route::get('/admin/edit_sp/{id_sp}', [SanphamController::class, 'suasanpham'])->name('edit_sp');
Route::post('/admin/edit_sp/{id_sp}', [SanphamController::class, 'postsuasanpham'])->name('edit_sp');
Route::get('/admin/delete_sp/{id_sp}', [SanphamController::class, 'xoasanpham'])->name('delete_sp');

//-------------------------------------------- BÀI VIẾT --------------------------------------------- //
Route::get('/admin/bv', [BaivietController::class, 'baiviet'])->name('list_bv');
Route::get('/admin/add_bv', [BaivietController::class, 'thembaiviet'])->name('add_bv');
Route::post('/admin/add_bv', [BaivietController::class, 'postthembaiviet'])->name('add_bv');
Route::get('/admin/edit_bv/{id_baiviet}', [BaivietController::class, 'suabaiviet'])->name('edit_bv');
Route::post('/admin/edit_bv/{id_baiviet}', [BaivietController::class, 'postsuabaiviet'])->name('edit_bv');
Route::get('/admin/delete_bv/{id_baiviet}', [BaivietController::class, 'xoabaiviet'])->name('delete_bv');

//------------------------------------------- BÌNH LUẬN ---------------------------------------------- //
Route::get('/admin/bl', [BinhluanController::class, 'binhluan'])->name('list_bl');
Route::get('/admin/delete_bl/{id_bl}', [BinhluanController::class, 'xoabinhluan'])->name('delete_bl');
Route::resources([
    'binhluan' => CmtController::class,
]);
//------------------------------------------- KHÁCH HÀNG --------------------------------------------- //
Route::get('/admin/kh', [KhachhangController::class, 'khachhang'])->name('list_kh');

//------------------------------------------- HÓA ĐƠN ------------------------------------------------ //
Route::get('/admin/hd', [HoadonController::class, 'hoadon'])->name('list_hd');
Route::get('/admin/hdct/{id_hd}', [HoadonController::class, 'hoadonchitiet'])->name('detail_hd');

// ----------------------------------------- THỐNG KÊ ------------------------------------------------- //
Route::get('/admin', [ChartController::class, 'index'])->name('list_chart');
// MAIL
// Route::get('/sendmail', [MailController::class, 'index_mail']);

// MAIL LIÊN HỆ
Route::get('/lienhe', [ContactController::class, 'index'])->name('lienhe');
Route::post('/lienhe', [ContactController::class, 'store'])->name('contact.us.store');
