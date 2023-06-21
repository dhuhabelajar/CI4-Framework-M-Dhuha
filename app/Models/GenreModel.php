<?php

namespace App\Models;

use CodeIgniter\Model;

class GenreModel extends Model
{
    protected $table = 'genre';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = [];
    
    public function getGenre()
    {
        $data = 
        [
            [
                "nama_genre" => "Horror",
                "created_at" => "2023-06-14 08:17:07",
                "update_at" => "2023-06-14 08:17:07"
            ],
            [
                "nama_genre" => "Fantasi",
                "created_at" => "2023-06-14 08:17:07",
                "update_at" => "2023-06-14 08:17:07"
            ],
            [
                "nama_genre" => "Comedy",
                "created_at" => "2023-06-14 08:17:37",
                "update_at" => "2023-06-14 08:17:37"
            ],
            [
                "nama_genre" => "Action",
                "created_at" => "2023-06-14 08:17:37",
                "update_at" => "2023-06-14 08:17:37"
            ],
            [
                "nama_genre" => "Drama",
                "created_at" => "2023-06-14 08:18:09",
                "update_at" => "2023-06-14 08:18:09"
            ],
            [
                "nama_genre" => "Animasi",
                "created_at" => "2023-06-14 08:18:09",
                "update_at" => "2023-06-14 08:18:09"
            ],
    
         ];
         return $data;
    }
    public function getAllData(){
        return $this->findAll();
    }

}