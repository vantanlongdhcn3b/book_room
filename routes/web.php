<?php

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

Route::get('/','HomeController@index');
Route::get('admin',function(){
    return view('admin.index');
    
});
Route::get('datphong','DatPhongController@DanhSach')->name('datphong.danhsach');

Route::get('datphong/{id}','DatPhongController@getdelete')->name('datphong.xoa');
Route::get('about',function(){
    return view('about');
    
});
Route::post('search','TimKiemController@TimKiem')->name('timkiem');


Route::get('contact',function(){
    return view('contact');
    
});
Route::get('events',function(){
    return view('events');
    
});

Route::resource('reservation', 'DatPhongController');
Route::get('rooms',function(){
    return view('rooms');
    
});
