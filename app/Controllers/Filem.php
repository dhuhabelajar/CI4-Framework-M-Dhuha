<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//step1
use App\Models\FilemModel;
use App\Models\GenreModel;

class Filem extends BaseController
{

    //step 2
    protected $filem;
    protected $genre;
    // step 3 buat fungsi konstrak untuk inisiasi model
    public function __construct()
    {
        //step 4
        $this->filem = new FilemModel();
        $this->genre = new GenreModel();
    }

    public function add()
    {
      $data["genre"] = $this->genre->getAllData();
      $data["errors"] = session("errors");
      return view("filem/add", $data);
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
    public function destroy($id)
    {
        $this->filem->delete($id);
        session()->setFlashData('success', 'Data Berhasil Dihapus.');   
        return redirect()->to('filem');
    }

    public function film_limit_five()
    {
           dd($this->filem->getLimit());
    }
    public function update($id)
    {
        $data["genre"] = $this->genre->getAllData();
        $data["errors"] = session('errors');
        $data["semuafilem"] = $this->filem->getDataByID($id);
        return view("filem/edit", $data);
    }

    public function store()
    {
        $validation = $this->validate([
            'nama_filem' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Nama Film Harus diisi'
                ]
            ],
            'id_genre'  => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Genre Harus diisi'
                ]
            ],
            'duration'  => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Durasi Harus diisi'
                ]
            ],
            'cover'     => [
                'rules' => 'uploaded[cover]|mime_in[cover,image/jpg,image/jpeg,image/png]|max_size[cover,2048]',
                'errors' => [
                    'uploaded' => 'Kolom Cover harus berisi file.',
                    'mime_in' => 'Tipe file pada Kolom Cover harus berupa JPG, JPEG, atau PNG',
                    'max_size' => 'Ukuran file pada Kolom Cover melebihi batas maksimum'
                ]
            ]
        ]);

        if (!$validation) {
            $errors = \Config\Services::validation()->getErrors();

            return redirect()->back()->withInput()->with('errors', $errors);
        }
        $image = $this->request->getFile('cover');
        $imageName = $image->getRandomName();
        $image->move(ROOTPATH . 'public/assets/cover/', $imageName);

        $data = [
            'nama_filem' => $this->request->getPost('nama_filem'),
            'id_genre' => $this->request->getPost('id_genre'),
            'duration' => $this->request->getPost('duration'),
            'cover' => $imageName,
        ];
        $this->filem->save($data);
        session()->setFlashdata('success', 'Data berhasil disimpan.'); // tambahkan ini
        return redirect()->to('/filem');
    }

    public function edit()
    {
        $validation = $this->validate([
            'nama_filem' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Nama Film Harus diisi'
                ]
            ],
            'id_genre'  => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Genre Harus diisi'
                ]
            ],
            'duration'  => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Durasi Harus diisi'
                ]
            ],
            // ubah rulesnya
            'cover'     => [
                'rules' => 'mime_in[cover,image/jpg,image/jpeg,image/png]|max_size[cover,2048]',
                'errors' => [
                    'mime_in' => 'Tipe file pada Kolom Cover harus berupa JPG, JPEG, atau PNG',
                    'max_size' => 'Ukuran file pada Kolom Cover melebihi batas maksimum'
                ]
            ]
        ]);

        if (!$validation) {
            $errors = \Config\Services::validation()->getErrors();

            return redirect()->back()->withInput()->with('errors', $errors);
        }
        // ambil data lama
        $filem = $this->filem->find($this->request->getPost('id'));
        // tambah request id
        $data = [
            'id' => $this->request->getPost('id'),
            'nama_filem' => $this->request->getPost('nama_filem'),
            'id_genre' => $this->request->getPost('id_genre'),
            'duration' => $this->request->getPost('duration'),
        ];
        // cek cover 
        $cover = $this->request->getFile('cover');
        if ($cover->isValid() && $cover->hasMoved()) {// generate nama file yg unik
            $imageName = $cover->getRandomName();
            // pindahkan file ke direktori penyimpanan 
            $cover->move(ROOTPATH . 'public/assets/cover/', $imageName);
            //hapus filegambar lama jika ada 
            if ($filem['cover']){
                unlink(ROOTPATH . 'public/assets/cover/'. $filem['cover']);
            }
        //jika ada tambahkan arrray cover pada variable $data
            $data['cover'] = $imageName;
        }

        $this->filem->save($data);
        session()->setFlashdata('success', 'Data berhasil diperbarui.'); // tambahkan ini
        return redirect()->to('/filem');
    }
  
}
