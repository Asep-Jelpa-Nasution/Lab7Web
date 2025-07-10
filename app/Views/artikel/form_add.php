<?= $this->include('template/admin_header'); ?>

<div class="form-wrapper container my-5">
    <h2 class="text-center mb-4"><?= $title; ?></h2>

    <form action="" method="post" enctype="multipart/form-data" class="dark-form mx-auto">
        <!-- Judul -->
        <div class="form-group mb-3">
            <label for="judul" class="form-label">Judul Artikel</label>
            <input type="text" name="judul" id="judul" class="form-control input-dark"
                placeholder="Masukkan judul artikel" required>
        </div>

        <!-- Isi -->
        <div class="form-group mb-3">
            <label for="isi" class="form-label">Isi Artikel</label>
            <textarea name="isi" id="isi" rows="8" class="form-control input-dark" placeholder="Tulis isi artikel..."
                required></textarea>
        </div>

        <!-- Kategori -->
        <div class="form-group mb-3">
            <label for="id_kategori" class="form-label">Kategori</label>
            <select name="id_kategori" id="id_kategori" class="form-select input-dark" required>
                <option value="">-- Pilih Kategori --</option>
                <?php foreach ($kategori as $k): ?>
                    <option value="<?= $k['id_kategori']; ?>"><?= esc($k['nama_kategori']); ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <!-- Gambar -->
        <div class="form-group mb-4">
            <label for="gambar" class="form-label">Upload Gambar</label>
            <input type="file" name="gambar" id="gambar" class="form-control input-dark">
        </div>

        <!-- Tombol -->
        <div class="text-end">
            <input type="submit" value="Kirim" class="btn btn-success px-4 py-2 fw-bold">
        </div>
    </form>
</div>

<?= $this->include('template/admin_footer'); ?>

<!-- Tambahan CSS -->
<style>
    .form-wrapper {
        max-width: 700px;
        background-color: #2c3e50;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
        color: #ecf0f1;
    }

    .form-label {
        font-weight: 600;
        color: #ecf0f1;
    }

    .input-dark {
        background-color: #34495e;
        border: 1px solid #1abc9c;
        color: #fff;
    }

    .input-dark:focus {
        background-color: #3c5a6a;
        border-color: #10b981;
        color: #fff;
    }

    .btn-success {
        background-color: #10b981;
        border: none;
    }

    .btn-success:hover {
        background-color: #0e9e76;
    }

    select.input-dark option {
        background-color: #34495e;
        color: #ecf0f1;
    }

    /* Placeholder putih */
    ::placeholder {
        color: #ffffff !important;
        opacity: 0.8;
    }

    /* Untuk browser berbasis WebKit seperti Chrome dan Safari */
    input::placeholder,
    textarea::placeholder {
        color: #ffffff !important;
    }

    /* Untuk Firefox */
    input:-moz-placeholder,
    textarea:-moz-placeholder {
        color: #ffffff !important;
        opacity: 0.8;
    }

    input::-moz-placeholder,
    textarea::-moz-placeholder {
        color: #ffffff !important;
        opacity: 0.8;
    }

    input:-ms-input-placeholder,
    textarea:-ms-input-placeholder {
        color: #ffffff !important;
    }
</style>