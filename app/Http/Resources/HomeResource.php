<?php

namespace App\Http\Resources;
use DB;
use App\Phong;
use App\AnhKS;
use App\ThucDon;
use Illuminate\Http\Resources\Json\JsonResource;

class HomeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>1,
            'phong'=>Phong::all(),
            'anh'=>AnhKS::all(),
            'thucdon'=>ThucDon::all(),
        ];
    }
}
