<?php

namespace App\Models;

use CodeIgniter\Model;

class FilemModel extends Model
{
    protected $table    ='film';
    protected $primaryKey    ='id';
    protected $useAutoIncrement    =true;
    protected $allowedFields      = ['nama_filem', 'id_genre', 'duration', 'cover'];


    public function getFilem()
    {
        $data = 
        [
            [
                "nama_film" => "Sewu Dinoo",
                "genre" => "Horor",
                "duration" => "1 jam 43 menit"
            ],
            [
                "nama_film" => "Fash X",
                "genre" => "Action",
                "duration" => "3 jam"
            ],
            [
                "nama_film" => "The Nun",
                "genre" => "Horor",
                "duration" => "2 jam"
            ],
            [
                "nama_film" => "T Rex",
                "genre" => "Action",
                "duration" => "2 jam 15 menit"
            ],
            [
                "nama_film" => "Power Ranger",
                "genre" => "Action",
                "duration" => "1 jam 4 menit"
            ],
         ];
         return $data;
    }
    public function getAllDataJoin()
    {
        $query = $this->db->table("film")
        ->select("film.*, genre.nama_genre")
        ->join("genre", "genre.id = film.id_genre");
        return $query->get()->getResultArray();
    }
    public function getAllData(){
        return $this->findAll();
    }

    public function getDataByID($id)
    {
        return $this->find($id);
    }

    // public function getDataBy($data)
    // {
        // return $this->where("genre", $data)->findAll;
    // }

    public function getDataBy($data)
   {
    return $this->where("genre", $data)->findAll();
   }

   public function getOrderBy()
   {
    return $this->orderBy('created_at', 'desc')->findAll();
   }

   public function getLimit()
   {
    return $this->limit(5)->findAll();
}
}
