<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatPhong extends Model
{
    protected $table='DatPhongs';
    protected $fillable = [ 'TenKhach','Email','SDT','DiaChi',
    'TGDen','TGdi','NguoiLon','TreEm','ChuThich','LoaiPhong_ID'];
    protected $primaryKey = 'DatPhong_ID';

   
}
