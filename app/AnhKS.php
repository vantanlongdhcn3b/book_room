<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnhKS extends Model
{
    protected $table='AnhKS';
    protected $fillable = [ 'LinkAnh','KhachSan_ID'];
    protected $primaryKey = 'id';

   
}
