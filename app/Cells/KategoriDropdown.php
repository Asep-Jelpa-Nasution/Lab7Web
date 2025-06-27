<?php

namespace App\Cells;

use App\Models\ArtikelModel;

class KategoriDropdown
{
    public function render()
    {
        $model = new ArtikelModel();
        $kategori = $model->select('kategori')
            ->distinct()
            ->where('kategori IS NOT NULL', null, false)
            ->findAll();

        return view('components/kategori_dropdown', ['kategori' => $kategori]);
    }
}
