<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThucDon extends Model
{
    protected $table='ThucDon';
    protected $fillable = [ 'TenMon','Gia','MoTa','Loai'];
    protected $primaryKey = 'ThucDon_ID';
}
