<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ArtikelModel;

class PostApi extends ResourceController
{
    protected $modelName = ArtikelModel::class;
    protected $format    = 'json';

    private function setCors()
    {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type, X-Requested-With, X-HTTP-Method-Override");
    }

    public function index()
    {
        $this->setCors();
        return $this->respond($this->model->findAll());
    }

    public function create()
    {
        $this->setCors();

        $judul = $this->request->getVar('judul');
        $isi = $this->request->getVar('isi');
        $id_kategori = $this->request->getVar('id_kategori');

        if (!$judul || !$isi || !$id_kategori) {
            return $this->failValidationErrors('Judul, isi, dan id_kategori wajib diisi.');
        }

        $data = [
            'judul'       => $judul,
            'isi'         => $isi,
            'id_kategori' => $id_kategori,
            'slug'        => url_title($judul, '-', true),
            'status'      => 1
        ];

        try {
            $this->model->insert($data);
            return $this->respondCreated([
                'status'  => 201,
                'message' => 'Data berhasil disimpan.',
                'data'    => $data
            ]);
        } catch (\Exception $e) {
            return $this->failServerError($e->getMessage());
        }
    }

    public function update($id = null)
    {
        $this->setCors();

        if (!$this->model->find($id)) {
            return $this->failNotFound("Data dengan ID $id tidak ditemukan.");
        }

        // Ambil data dari JSON atau form
        $input = $this->request->getJSON(true);
        if (empty($input)) {
            $input = $this->request->getVar();
        }

        // Validasi yang lebih aman
        if (!isset($input['judul'], $input['isi'], $input['id_kategori'])) {
            return $this->failValidationErrors('Judul, isi, dan id_kategori wajib diisi.');
        }

        if (trim($input['judul']) === '' || trim($input['isi']) === '' || trim($input['id_kategori']) === '') {
            return $this->failValidationErrors('Judul, isi, dan id_kategori tidak boleh kosong.');
        }

        $data = [
            'judul'       => $input['judul'],
            'isi'         => $input['isi'],
            'status'      => $input['status'] ?? 0,
            'id_kategori' => $input['id_kategori'],
            'slug'        => url_title($input['judul'], '-', true),
        ];

        try {
            $this->model->update($id, $data);
            return $this->respond([
                'status'  => 200,
                'message' => 'Data berhasil diperbarui.',
                'data'    => $data
            ]);
        } catch (\Exception $e) {
            return $this->failServerError($e->getMessage());
        }
    }

    public function delete($id = null)
    {
        $this->setCors();

        if (!$this->model->find($id)) {
            return $this->failNotFound("Data dengan ID $id tidak ditemukan.");
        }

        $this->model->delete($id);
        return $this->respondDeleted([
            'status'  => 200,
            'message' => 'Data berhasil dihapus.'
        ]);
    }

    public function show($id = null)
    {
        $this->setCors();

        $data = $this->model->find($id);
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound("Data dengan ID $id tidak ditemukan.");
        }
    }
    public function options()
    {
        $this->setCors();
        return $this->respond(null, 200);
    }
}
