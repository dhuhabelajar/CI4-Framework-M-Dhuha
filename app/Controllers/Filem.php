<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//step1
use App\Models\FilemModel;

class Filem extends BaseController
{

    //step 2
    protected $filem;
    // step 3 buat fungsi konstrak untuk inisiasi model
    public function __construct()
    {
        //step 4
        $this->filem = new FilemModel();
    }

    public function add()
    {
      return view("filem/add");
    }

    public function index()
    {
       //dd($this->filem->getFilem());
       $data['data_filem'] = $this->filem->getAllDataJoin();


       return view("filem/index", $data);
    }
    public function all()
    {
       $data['semuafilem'] = $this->filem->getAllDataJoin();
       return view("filem/semuafilem", $data);
    }

    public function film_by_id()
    {
       dd($this->filem->getDataByID(1));
    }

    // public function film_by_genre()
    // {
    //    dd($this->filem->getDataBy ("Action"));
    // }

    public function film_by_genre()
    {
           dd($this->filem->getDataBy("horor"));
    }

    public function film_order()
    {
           dd($this->filem->getOrderBy());
    }

    public function film_limit_five()
    {
           dd($this->filem->getLimit());
    }

}
