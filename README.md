## Nama : Asep Jelpa Nasution

## Kelas : TI.23.C1

## NIM : 312310023

## Mata Kuliah : Pemrograman Web 2

## Dosen Pengampu : Agung Nugroho, S.Kom., M.Kom

## Universitas : Universitas Pelita Bangsa

## Hasil Praktikum 1: PHP Framework (Codeigniter)

![xampp](img/Picture1.png)
![xampp](img/Picture2.png)
![xampp](img/Picture3.png)
![xampp](img/Picture4.png)
![xampp](img/Picture5.png)
![xampp](img/Picture6.png)
![xampp](img/Picture7.png)
![xampp](img/Picture8.png)
![xampp](img/Picture9.png)
![xampp](img/Picture10.png)
![xampp](img/Picture11.png)
![xampp](img/Picture12.png)
![xampp](img/Picture13.png)
![xampp](img/Picture14.png)
![xampp](img/Picture15.png)
![xampp](img/Picture16.png)
![xampp](img/Picture17.png)

## Praktikum 2: Framework Lanjutan (CRUD)

![xampp](img/Picture18.png)
![xampp](img/Picture19.png)
![xampp](img/Picture20.png)
![xampp](img/Picture21.png)
![xampp](img/Picture22.png)

## Praktikum 3: View Layout dan View Cell

![xampp](img/Picture23.png)
![xampp](img/Picture24.png)
![xampp](img/Picture25.png)

Penjelasan :
• Apa manfaat utama dari penggunaan View Layout dalam pengembangan aplikasi?

1. Konsistensi Tampilan:
   View layout membantu menjaga agar tampilan antarmuka antar halaman tetap seragam, seperti header, sidebar, dan footer.
2. Menghemat Waktu dan Usaha (DRY - Don't Repeat Yourself):
   Tidak perlu menulis ulang bagian yang sama di setiap view. Cukup ditulis sekali di layout.
3. Mudah dalam Pemeliharaan:
   Jika ingin mengubah struktur atau elemen umum halaman, cukup ubah di file layout saja.
4. Memisahkan Struktur dan Konten:
   View layout berfungsi sebagai kerangka utama, sedangkan view biasa hanya mengisi kontennya saja.

• Jelaskan perbedaan antara View Cell dan View biasa

1. View Biasa adalah file tampilan yang biasanya dipanggil dari controller menggunakan return view('nama_view'). Biasanya digunakan untuk menampilkan satu halaman penuh.
2. View Cell adalah komponen kecil yang bisa digunakan di dalam view lain dengan cara <?= view_cell('NamaClass::method') ?>. Biasanya digunakan untuk bagian tertentu yang ingin digunakan berulang kali, seperti daftar artikel terbaru, sidebar, atau widget.
3. Perbedaan utama:
   View biasa cocok untuk tampilan utama, sementara View Cell cocok untuk komponen kecil yang dinamis dan modular.

## Praktikum 4: Modul Login

![xampp](img/Picture26.png)

---

## Praktikum 5 : Pagination dan Pencarian

## 🎯 Tujuan Praktikum

1. Memahami konsep dasar **Pagination**
2. Memahami konsep dasar **Pencarian**
3. Menerapkan pagination dan search menggunakan **CodeIgniter 4**

---

### 1. Menambahkan Pagination pada Daftar Artikel

📸 **Screenshot hasil pagination:**

![xampp](img/Picture27.png)

---

### 2. Menambahkan Fitur Pencarian Artikel

📸 **Screenshot fitur pencarian:**

![xampp](img/Picture28.png)

---

## 3. Pengujian Fitur

✅ Pagination muncul ketika data lebih dari 4  
✅ Fitur pencarian bekerja menampilkan hasil sesuai keyword  
✅ Pencarian dan pagination dapat berjalan bersamaan

📸 **Hasil Pengujian:**

- Tampil daftar artikel dengan paging  
  ![xampp](img/Picture29.png)

- Tampilkan hasil pencarian  
  ![xampp](img/Picture30.png)

- Navigasi pagination aktif  
  ![xampp](img/Picture31.png)

---

## Praktikum 6: Upload File Gambar
## 🎯 Tujuan Praktikum

1. Memahami konsep dasar file upload.
2. Mengimplementasikan upload gambar menggunakan CodeIgniter 4.

### 1. Menambahkan Fungsi Upload pada Controller
📸 **Screenshot pengaturan method add:**

![xampp](img/Picture32.png)

---

### 2. Tambahkan Input File pada Form Tambah Artikel
📸 **Screenshot input file:**

![xampp](img/Picture33.png)

---

### 3. Ubah Tag Form agar Mendukung Upload File
📸 **Screenshot form dengan enctype:**

![xampp](img/Picture34.png)

---

### 4. Uji Coba Fitur Upload Gambar

Setelah semua selesai, lakukan uji coba dengan:
- Mengisi judul dan isi artikel
- Memilih gambar
- Submit form

📸 **Screenshot hasil upload dan penyimpanan gambar:**

![xampp](img/Picture35.png)
![xampp](img/Picture36.png)