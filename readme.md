# My Store

Aplikasi toko berbasis PHP dengan pola MVC.
Praktek Pemrograman Web 2 - Ujian Tengah Semester (UTS).

## Fitur
- Login admin (session + password_hash)
- Dashboard admin dengan tampilan Bootstrap 5
- Create: tambah produk baru
- Update: edit data produk
- Delete: hapus produk yang tidak diproduksi lagi
- Halaman daftar produk publik (/products)
- 25 data dummy produk, dengan kategori Laptop, Mouse, Keyboard, dan Aksesoris

## Teknologi
PHP 8 (MVC native), MySQL (PDO), Bootstrap 5, XAMPP

## Struktur Folder
- app/controllers : AuthController, AdminController, ProductController, HomeController
- app/models      : User, Product
- config          : koneksi database
- public          : index.php (router), css, js
- views           : layouts, pages, admin
- screenshoot     : bukti hasil pekerjaan

## Cara Menjalankan
1. Jalankan Apache dan MySQL di XAMPP.
2. Pastikan database `mvc_mystore` sudah ada (tabel users, categories, products).
3. Di terminal VS Code:
   C:\xampp\php\php.exe -S localhost:8000 -t public
4. Buka http://localhost:8000/login

## Akun Admin
- Username: Calvin
- Password: admin123

## Alur Penggunaan
1. Login di /login, lalu otomatis masuk ke dashboard /admin.
2. Klik "+ Tambah Produk" untuk Create.
3. Klik "Edit" pada baris produk untuk Update.
4. Klik "Hapus" pada baris produk untuk Delete.

## Identitas
- Nama : <Andika Calvin Panjaitan>
- NIM  : <25210030>
- Prodi: Komputerisasi Akuntansi, Kelas Group A
