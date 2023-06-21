<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\GenreModel;

class Genre extends BaseController
{
    protected $genre;
    public function __construct()
    {
        $this->genre = new GenreModel();
    }


    public function All()
    {
        $data['semua_genre'] = $this->genre->getAllData();
        return view("Genre/SemuaGenre",$data);
    }
}