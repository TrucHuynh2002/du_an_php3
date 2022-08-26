<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\binhluanmodel as bl;
use Illuminate\Http\Request;

class CmtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bl = new bl();
        $bl->id_kh = Auth::id();
        $bl->id_sp = $_POST['id_sp'];
        if (isset($bl->id_kh)) {
            $bl->noi_dung = $_POST['noi_dung'];
            $bl->save();
            return redirect('/sp_chitiet/' . $bl->id_sp)
            ->with(['success' => 'Thêm bình luận thành công !']);
        }
        return redirect('/sp_chitiet/' . $bl->id_sp)
            ->with(['success' => 'Vui lòng đăng nhập tài khoản !']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
