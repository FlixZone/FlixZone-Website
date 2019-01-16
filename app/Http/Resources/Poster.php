<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Poster extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    
    public function toArray($request)
    {
        $path = "http://127.0.0.1:8000/storage/poster_files/";
        $poster = $path.$this->poster;
        return [
            'id'=>$this->id,
            'poster'=>$poster,
        ];
        //return parent::toArray($request);
    }
}
