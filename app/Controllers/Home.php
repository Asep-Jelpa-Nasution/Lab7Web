<?php

namespace App\Controllers;

use CodeIgniter\Debug\Toolbar\Collectors\Views;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function tambah()
    {
        return view('view/form_add'); // sesuaikan nama file view kamu
    }
}
