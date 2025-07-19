<?= $this->include('template/header'); ?>
<h1><?= $title; ?></h1>
<hr>
<p><?= $content; ?></p>

<section>
    <ul>
        <li><strong>Email:</strong> jelpanasution@gmail.com</li>
        <li><strong>WhatsApp:</strong> +62 882-1258-6046</li>
        <li><strong>Instagram:</strong> <a href="https://instagram.com/skyplatform" target="_blank">@skyplatform</a></li>
    </ul>
</section>

<section>
    <h2>Alamat Kami</h2>
    <p>Jl. Inovasi No. 123, Kota Teknologi, Indonesia</p>
</section>

<section>
    <h2>Form Kontak</h2>
    <form action="#" method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="pesan">Pesan:</label><br>
        <textarea id="pesan" name="pesan" rows="10" required style="width: 714px; height: 200px;"></textarea><br><br>

        <button type="submit">Kirim</button>
    </form>
</section>

<?= $this->include('template/footer'); ?>