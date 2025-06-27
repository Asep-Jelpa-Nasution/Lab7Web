<h3>Artikel <?= esc($kategori ?? 'Terkini') ?></h3>
<ul>
    <?php foreach ($artikel as $row): ?>
        <li><a href="<?= base_url('/artikel/' . $row['slug']) ?>"><?= esc($row['judul']) ?></a></li>
    <?php endforeach; ?>
</ul>