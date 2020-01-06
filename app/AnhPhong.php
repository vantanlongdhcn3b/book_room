<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnhPhong extends Model
{
    protected $table='anh_phongs';
    protected $fillable = [ 'LinkAnh','Phong_ID'];
    protected $primaryKey = 'id';

}
