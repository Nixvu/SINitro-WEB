<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Tentang  Projek

SINitro (Sistem Informasi Nitrogen) adalah proyek web sederhana yang dibangun menggunakan framework Laravel. Proyek ini dirancang untuk mencatat transaksi pengisian angin nitrogen. SINitro dikembangkan sebagai tugas akhir mata kuliah Pemrograman Web 2.

## Requitments & Installasi

1. XAMPP atau LARAGON
2. PHP VERSION 8.2.27
3. Apache 2.4.62

1. Clone Project ini lalu simpan di folder htdoc atau www
2. Buka visual studio code dan buke folder dari project
3. Ketik perintah di terminal 
   php artisan migrate
   akan ditanyakan membuat database sinitro pilih yes
   lalu ketik perintah
   php artisan db:seed layananseeders
4. jalan project dengan
   php artisan serve
   dan buka di browser http://127.0.0.1:8000
5. lalu pilih daftar karna default belum memiliki akun untuk   petugas maupun admin.