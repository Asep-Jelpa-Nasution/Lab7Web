<?= $this->include('template/admin_header'); ?>

<div class="container my-4">
    <!-- Search & Filter Form -->
    <form id="search-form" method="get" class="form-search mb-4">
        <div class="col-md-5">
            <input type="text" name="q" id="search-box" placeholder="Cari Artikel..." class="form-control">
        </div>
        <div class="col-md-4">
            <select name="kategori_id" id="kategori-filter" class="form-control">
                <option value="">Pilih Kategori</option>
                <?php foreach ($kategori as $k): ?>
                    <option value="<?= $k['id_kategori']; ?>"><?= $k['nama_kategori']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-md-3">
            <button type="submit" class="btn btn-primary w-100">Temukan</button>
        </div>

    </form>

    <!-- Spinner Loading -->
    <div id="loading-spinner" class="text-center my-4" style="display: none;">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <!-- Kontainer Artikel -->
    <div id="article-container">
        <!-- Akan diisi via AJAX -->
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-3" id="pagination-container">
        <!-- Akan diisi via AJAX -->
    </div>
</div>

<?= $this->include('template/admin_footer'); ?>

<!-- jQuery untuk AJAX -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        function fetchData(url = '/admin/artikel') {
            const q = $('#search-box').val();
            const kategori_id = $('#kategori-filter').val();

            $('#article-container').hide();
            $('#pagination-container').hide();
            $('#loading-spinner').show();

            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'json',
                data: {
                    q: q,
                    kategori_id: kategori_id
                },
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                success: function(data) {
                    renderArticles(data.artikel);
                    $('#pagination-container').html(data.pager.links);
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                    $('#article-container').html('<p class="text-danger text-center">Gagal memuat data.</p>');
                },
                complete: function() {
                    $('#loading-spinner').hide();
                    $('#article-container').show();
                    $('#pagination-container').show();
                }
            });
        }

        function renderArticles(artikel) {
            let html = '<div class="table-responsive"><table class="table table-bordered table-striped">';
            html += '<thead><tr><th>ID</th><th>Judul</th><th>Kategori</th><th>Gambar</th><th>Status</th><th>Aksi</th></tr></thead><tbody>';

            if (artikel.length > 0) {
                artikel.forEach(row => {
                    html += `<tr>
                    <td>${row.id}</td>
                    <td><b>${row.judul}</b><p><small>${row.isi.substring(0, 50)}...</small></p></td>
                    <td>${row.nama_kategori || '-'}</td>
                    <td>${row.gambar ? `<img src="/gambar/${row.gambar}" alt="gambar" style="width: 70px; height: auto; border-radius: 6px;">` : '-'}
                    </td>
                    <td>${row.status == 1 
                        ? '<span class="badge bg-success">Aktif</span>' 
                        : '<span class="badge bg-secondary">Tidak Aktif</span>'}
                    </td>
                    
                    <td>
                        <a href="/admin/artikel/edit/${row.id}" class="btn btn-warning btn-sm">Ubah</a>
                        <a href="/admin/artikel/delete/${row.id}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin menghapus data?');">Hapus</a>
                    </td>
                </tr>`;
                });
            } else {
                html += '<tr><td colspan="5" class="text-center">Tidak ada data.</td></tr>';
            }

            html += '</tbody></table></div>';
            $('#article-container').html(html);
        }

        $('#search-form').on('submit', function(e) {
            e.preventDefault();
            fetchData();
        });

        $('#kategori-filter').on('change', function() {
            $('#search-form').trigger('submit');
        });

        $(document).on('click', '.pagination a', function(e) {
            e.preventDefault();
            const url = $(this).attr('href');
            if (url) fetchData(url);
        });

        fetchData();
    });
</script>