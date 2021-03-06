<?php

namespace App\Http\Controllers;
use App\DatPhong;
use App\LoaiPhong;
use Illuminate\Http\Request;

class DatPhongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lp=LoaiPhong::all();
        return view('reservation',compact('lp'));
    }

    public function DanhSach()
    {
        $lp=LoaiPhong::all();
        $danhsach=DatPhong::all();
        return view('admin.datphong',compact('lp','danhsach'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
       
       return DatPhong::create($request->all());
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

    public function getdelete($id)
    {
        // $dp=DatPhong::find($id);
        // $dp->delete();
        DatPhong::destroy($id);
        return redirect()->route('datphong.danhsach')->with(['flash_level'=>'success','flass_message'=>'Xóa Thành Công']);

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
}
