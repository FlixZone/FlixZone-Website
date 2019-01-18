<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Movie extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $path = "http://127.0.0.1:8000/storage/movie_torrents/";
        $torrent_file = $path.$this->torrent_file;
        return [
            'id'=>$this->id,
            'the_movie_db_id'=>$this->the_movie_db_id,
            'mega_link'=>$this->mega_link,
            'mega_key'=>$this->mega_key,
            'torrent_file'=>$torrent_file
        ];
        //return parent::toArray($request);
    }
}
