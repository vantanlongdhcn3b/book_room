<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhachSan extends Model
{
    protected $table='KhachSans';
    protected $fillable = [ 'TenKhachSan','DiaChi','SoSao','MoTa'];
    protected $primaryKey = 'KhachSan_ID';
}
