<?php

namespace App\Http\Controllers;
use App\Phong;
use Illuminate\Http\Request;

class TimKiemController extends Controller
{
    public function TimKiem(Request $request)
    {
        $phong=Phong::all();
        return view('timkiem',compact('phong'));
        
    }
}
