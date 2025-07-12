<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Kategori extends ResourceController
{
    protected $modelName = 'App\Models\KategoriModel';
    protected $format    = 'json';

    // Mengizinkan CORS agar bisa diakses dari VueJS di port berbeda
    private function setCors()
    {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type");
    }

    public function index()
    {
        $this->setCors();
        return $this->respond($this->model->findAll());
    }

    // Untuk menangani preflight request dari browser
    public function options()
    {
        $this->setCors();
        return $this->respond(null, 200);
    }
}
