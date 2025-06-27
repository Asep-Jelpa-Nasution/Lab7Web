<div class="widget-box">
    <h3 class="title">Pilih Kategori</h3>
    <form method="get" action="<?= base_url('/home') ?>">
        <select name="kategori" onchange="this.form.submit()">
            <option value="">-- Semua Kategori --</option>
            <?php foreach ($kategori as $row): ?>
                <option value="<?= esc($row['kategori']) ?>" 
                    <?= (isset($_GET['kategori']) && $_GET['kategori'] === $row['kategori']) ? 'selected' : '' ?>>
                    <?= esc(ucwords($row['kategori'])) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </form>
</div>
