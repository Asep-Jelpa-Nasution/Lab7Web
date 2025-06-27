<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function home()
    {
        $kategori = $this->request->getGet('kategori');

        return view('home', [
            'title' => 'Beranda',
            'content' => 'Ini adalah halaman beranda menggunakan layout.',
            'kategori' => $kategori // dikirim ke view agar bisa digunakan oleh view_cell
        ]);
    }
}
