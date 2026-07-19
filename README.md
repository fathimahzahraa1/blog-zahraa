# Blog Pribadi - Zahra

Aplikasi blog pribadi berbasis Laravel yang memungkinkan penulis (setelah login) untuk membuat, mengedit, dan menghapus artikel miliknya sendiri. Pengunjung umum dapat membaca artikel yang sudah dipublikasikan tanpa perlu login.

Project ini dibuat untuk memenuhi tugas Project Individu mata kuliah Pemrograman Web Lanjut, Program Studi Teknik Informatika, Universitas Malikussaleh.

## Fitur

- Autentikasi (register, login, logout) menggunakan Laravel Breeze
- CRUD Artikel (judul, konten, kategori, thumbnail, status draft/published)
- CRUD Kategori
- Halaman publik: daftar artikel published, detail artikel, pencarian judul, filter kategori
- Fitur bonus: Komentar pada halaman detail artikel (tanpa perlu login)

## Teknologi yang Digunakan

- Laravel 10
- MySQL
- Blade Templating Engine
- Laravel Breeze (Autentikasi)
- Tailwind CSS

## Cara Instalasi

1. Clone repository ini
git clone https://github.com/fathimahzahraa1/blog-zahraa.git
cd blog-zahraa

2. Install dependency PHP
composer install

3. Install dependency JavaScript/CSS
npm install
npm run build

4. Salin file `.env.example` menjadi `.env`
copy .env.example .env

5. Generate application key
php artisan key:generate

6. Buat database baru di MySQL, misal bernama `blog_zahraa`, lalu sesuaikan konfigurasi di file `.env`:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog_zahraa
DB_USERNAME=root
DB_PASSWORD=

7. Jalankan migration dan seeder
php artisan migrate --seed

8. Buat symbolic link untuk storage (supaya thumbnail artikel bisa tampil)
php artisan storage:link

9. Jalankan server
php artisan serve

10. Buka `http://127.0.0.1:8000` di browser

## Akun Demo

Email: fathimah.240170199@mhs.unimal.ac.id
Password: (zahra1201)

## Sumber Referensi

- Dokumentasi resmi Laravel: https://laravel.com/docs
- Dokumentasi Laravel Breeze: https://laravel.com/docs/starter-kits
- Tailwind CSS: https://tailwindcss.com/docs