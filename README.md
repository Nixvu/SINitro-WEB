<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Tentang  Projek

SINitro (Sistem Informasi Nitrogen) adalah proyek web sederhana yang dibangun menggunakan framework Laravel. Proyek ini dirancang untuk mencatat transaksi pengisian angin nitrogen. SINitro dikembangkan sebagai tugas akhir mata kuliah Pemrograman Web 2 yang dibuat oleh Febriana dengan NIM 20220910055.

## Requitments
Pastikan Anda memiliki hal-hal berikut yang telah diinstal di sistem Anda sebelum memulai:
- **XAMPP / LARAGON**: Sebgai local server.
- **Git** (Opsional): Untuk mengelola kode.
- **Composer**: Untuk mengelola dependensi PHP.
- **PHP**: Versi minimal 8.2.27
- **Database**: MySQL.

## Instalasi
Ikuti langkah-langkah berikut untuk menginstal project ini secara lokal:
1. **Clone repositori**:
   ```bash
   git clone https://github.com/Nixvu/SINitro-WEB.git
   ```
   Gantilah `<repository-url>` dengan URL repositori GitHub Anda.

2. **Masuk ke direktori project**:
   ```bash
   cd <project-folder>
   ```
   Gantilah `<project-folder>` dengan nama folder project Anda.

3. **Instal dependensi menggunakan Composer**:
   ```bash
   composer install
   ```

4. **Generate application key**:
   ```bash
   php artisan key:generate
   ```

5. **Migrasi dan Seeders database**:
   Jalankan perintah berikut untuk membuat tabel baru, dan mengisi data awal:
   ```bash
   php artisan migrate
   php artisan db:seed layananseeder
   ```

6. **Jalankan server lokal**:
   Untuk menjalankan server pengembangan lokal, gunakan perintah berikut:
   ```bash
   php artisan serve
   ```

7. **Akses aplikasi**:
   Buka browser Anda dan kunjungi [http://127.0.0.1:8000](http://127.0.0.1:8000) untuk melihat aplikasi Anda.

## Catatan Tambahan
- Pastikan file `.env` sudah disesuaikan dengan konfigurasi database Anda.
- Jika Anda menghadapi kendala, pastikan Anda membaca log error dan menyelesaikan masalah yang disebutkan.