<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phong extends Model
{
    protected $table='Phongs';
    protected $fillable = [ 'TenPhong','Gia','SoKhach','SoGiuong','KhachSan_ID','LoaiPhong_ID'];
    protected $primaryKey = 'Phong_ID';

}
