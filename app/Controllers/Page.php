<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        return view('view/about', [
            'title' => '🌠 About Sky',
            'content' => 'Sky adalah sebuah platform digital yang dirancang untuk menghadirkan beragam artikel informatif, khususnya di bidang teknologi dan masa depan. Kami percaya bahwa pengetahuan adalah jendela menuju masa depan, dan melalui Sky, kami ingin membuka akses seluas-luasnya bagi siapa saja yang ingin belajar dan mengeksplorasi dunia yang terus berkembang.

Menariknya, nama Sky terinspirasi dari hal yang sangat personal — seekor ikan peliharaan di rumah saya yang bernama Sky, yang saat ini baru berusia 2 bulan. Meskipun kecil, Sky membawa ketenangan, semangat hidup, dan inspirasi setiap harinya. Nilai-nilai itulah yang ingin kami bawa ke dalam platform ini: sederhana, segar, tapi penuh makna.

Dengan Sky, kami berharap bisa menjadi teman belajar, ruang eksplorasi, dan sumber inspirasi yang dapat dinikmati siapa saja, kapan saja.

Mari menjelajahi pengetahuan bersama Sky.
Karena masa depan dimulai dari rasa ingin tahu hari ini.'
        ]);
    }
    public function contact()
    {
        return view('view/contact', [
            'title' => 'Hubungi Kami',
            'content' => 'Jika kamu memiliki pertanyaan, saran, atau ingin bekerja sama dengan kami, silakan hubungi melalui:'
        ]);
    }
    public function faqs()
    {
        echo "Ini halaman FAQ";
    }
    public function tos()
    {
        echo "ini halaman Term of Services";
    }
}
