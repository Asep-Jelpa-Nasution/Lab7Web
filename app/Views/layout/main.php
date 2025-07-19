<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'My Website' ?></title>
    <link rel="stylesheet" href="<?= base_url('css/style.css', null, true); ?>">
</head>

<body>
    <div id="container">
        <header>
            <h1>Sky</h1>
        </header>
        <nav>
            <a href="<?= base_url('/'); ?>" class="active">Home</a>
            <a href="<?= base_url('/artikel'); ?>">Artikel</a>
            <a href="<?= base_url('/about'); ?>">About</a>
            <a href="<?= base_url('/contact'); ?>">Kontak</a>
        </nav>
        <section id="wrapper">
            <section id="main">
                <?= $this->renderSection('content') ?>
            </section>
            <aside id="sidebar">
                <?= view_cell('App\\Cells\\ArtikelTerkini::render', ['kategori' => $kategori ?? null]) ?>
                <!-- Widget tambahan -->
                <div class="widget-box">
                    <h3 class="title">Widget Header</h3>
                    <ul>
                        <li><a href="#">https://github.com/Asep-Jelpa-Nasution</a></li>
                        <li><a href="#">https://jelpanst.free.nf/</a></li>
                    </ul>
                </div>
                <div class="widget-box">
                    <h3 class="title">Widget Text</h3>
                    <p>Nama: Asep Jelpa Nasution, NIM: 312310023,
                        Kelas: TI.23.C.1</p>
                </div>
            </aside>
        </section>
        <footer class="bg-gray-900 text-white py-8 mt-12">
            <div class="container mx-auto px-4 flex flex-col md:flex-row justify-between items-start md:items-center gap-6">

                <!-- Brand & Description -->
                <div>
                    <h2 class="text-xl font-semibold">🌌 Sky</h2>
                    <p class="text-sm mt-2 max-w-sm text-gray-300">
                        Platform informasi teknologi masa depan yang ditulis oleh para ilmuwan dan pemikir dunia.
                    </p>
                </div>

                <!-- Copyright -->
                <div class="text-sm text-gray-400 text-right">
                    <p>&copy; 2025 - Universitas Pelita Bangsa</p>
                    <p>Developed by Asep Jelpa Nasution</p>
                </div>

            </div>
        </footer>

    </div>
</body>

</html>