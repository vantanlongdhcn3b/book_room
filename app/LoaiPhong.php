<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiPhong extends Model
{
    protected $table='LoaiPhongs';
    protected $fillable = [ 'Ten'];
    protected $primaryKey = 'LoaiPhong_ID';
}
