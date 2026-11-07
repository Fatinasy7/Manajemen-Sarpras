# Panduan Menjalankan Manajemen Sarpras dengan Laragon

Panduan ini menjelaskan cara menyiapkan proyek dari awal sampai dapat dibuka di browser Windows menggunakan Laragon.

## 1. Persiapan perangkat lunak

Siapkan:

- Laragon Full untuk Windows, termasuk Apache, MySQL, dan HeidiSQL.
- Git for Windows jika proyek akan diambil dengan `git clone`.
- Composer.
- Node.js **20.19 atau lebih baru** (atau **22.12 atau lebih baru**) dan npm untuk memasang serta membangun aset frontend.

### Perhatian: versi PHP

Gunakan **PHP 8.4.1 atau lebih baru**. Persyaratan PHP proyek adalah `^8.3`, tetapi versi dependency yang terkunci di `composer.lock` membutuhkan PHP minimal 8.4.1. PHP 8.3 dapat menyebabkan Composer atau Artisan gagal dengan pesan bahwa versi PHP tidak memenuhi syarat.

Setelah memasang Laragon, pilih versi PHP yang sesuai melalui **Menu > PHP > Version**, lalu buka terminal baru dari Laragon agar versi yang dipilih digunakan.

Periksa versi alat:

```powershell
php -v
composer -V
node -v
npm -v
```

Pastikan versi PHP yang ditampilkan adalah 8.4.1 atau lebih baru. Jika `php` tidak ditemukan atau masih memakai versi lain, gunakan terminal Laragon dan periksa kembali pilihan PHP.

## 2. Menyalin proyek ke folder Laragon

Laragon menggunakan folder `C:\laragon\www` untuk membuat virtual host lokal secara otomatis. Ambil proyek ke folder tersebut.

Dengan Git:

```powershell
cd C:\laragon\www
git clone https://github.com/Fatinasy7/Manajemen-Sarpras.git
cd .\Manajemen-Sarpras
```

Jika sudah memiliki salinan proyek, letakkan foldernya di:

```text
C:\laragon\www\Manajemen-Sarpras
```

Kemudian buka terminal Laragon dan masuk ke folder itu:

```powershell
cd C:\laragon\www\Manajemen-Sarpras
```

## 3. Menyalin konfigurasi lingkungan

Buat file `.env` dari contoh yang tersedia. Jalankan perintah berikut dari folder proyek:

```powershell
if (-not (Test-Path .env)) { Copy-Item .env.example .env }
```

File `.env` berisi pengaturan lokal dan tidak perlu di-commit ke Git.

## 4. Menyalakan Laragon dan membuat database

1. Buka Laragon.
2. Klik **Start All** untuk menyalakan Apache dan MySQL.
3. Buka HeidiSQL dari Laragon.
4. Buat database baru bernama `manajemen_sarpras`. Gunakan collation `utf8mb4_unicode_ci` jika pilihan tersebut tersedia.

Laragon biasanya menggunakan pengguna MySQL `root` tanpa kata sandi secara default. Jika konfigurasi MySQL Anda berbeda, gunakan nama pengguna dan kata sandi yang benar pada langkah berikutnya.

## 5. Mengatur koneksi database

Buka `.env` menggunakan editor teks dan atur nilai berikut:

```dotenv
APP_NAME="Manajemen Sarpras"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://manajemen-sarpras.test

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=manajemen_sarpras
DB_USERNAME=root
DB_PASSWORD=
```

Jika MySQL Anda menggunakan kata sandi untuk `root`, isi nilai `DB_PASSWORD` sesuai konfigurasi. Jangan membagikan atau mengunggah isi `.env`.

## 6. Memasang dependency proyek

Pastikan terminal masih berada di folder proyek. Jalankan:

```powershell
composer install
npm install
```

`composer install` memasang dependency PHP sesuai `composer.lock`. `npm install` memasang dependency frontend sesuai `package-lock.json`.

Jika Composer melaporkan ketidakcocokan versi PHP, pilih PHP 8.4.1 atau lebih baru di Laragon, buka terminal Laragon yang baru, lalu ulangi pemeriksaan `php -v` dan perintah Composer.

## 7. Membuat kunci aplikasi dan menyiapkan tabel

Jalankan perintah berikut satu per satu:

```powershell
php artisan key:generate
php artisan optimize:clear
php artisan migrate --seed
```

Perintah migrasi membuat tabel database yang dibutuhkan. Opsi `--seed` juga menjalankan data awal proyek, termasuk pengguna pengujian yang disediakan oleh seeder.

> **Peringatan:** Jangan menjalankan `php artisan migrate:fresh` pada database yang berisi data penting. Perintah tersebut menghapus semua tabel sebelum membuat ulang.

## 8. Menyiapkan aset frontend

Untuk menyiapkan aset yang dapat digunakan tanpa menjalankan server Vite terpisah:

```powershell
npm run build
```

Saat mengembangkan tampilan, Anda juga dapat menjalankan Vite dalam terminal Laragon terpisah:

```powershell
cd C:\laragon\www\Manajemen-Sarpras
npm run dev
```

Biarkan proses tersebut tetap berjalan selama pengembangan. Hentikan dengan `Ctrl+C` setelah selesai.

## 9. Membuka aplikasi di browser

1. Pastikan Laragon tetap berjalan dan Apache serta MySQL sudah aktif.
2. Di Laragon, klik **Reload** agar virtual host dibuat ulang.
3. Buka alamat berikut di browser:

```text
http://manajemen-sarpras.test
```

Jika virtual host otomatis tidak tersedia, periksa pengaturan **Auto Virtual Hosts** di Laragon, pastikan proyek berada di `C:\laragon\www\Manajemen-Sarpras`, lalu klik **Reload** lagi. Document root virtual host Laravel harus mengarah ke folder `public` proyek, bukan folder root proyek.

### Cara alternatif tanpa virtual host Laragon

Anda dapat menjalankan server pengembangan Laravel dari terminal:

```powershell
cd C:\laragon\www\Manajemen-Sarpras
php artisan serve --host=127.0.0.1 --port=8000
```

Kemudian buka `http://127.0.0.1:8000`. Biarkan terminal server tetap berjalan dan hentikan dengan `Ctrl+C` setelah selesai. Jika menggunakan cara ini, sesuaikan `APP_URL` di `.env` menjadi `http://127.0.0.1:8000`, lalu jalankan `php artisan optimize:clear`.

## 10. Menjalankan proyek pada hari berikutnya

Setelah setup pertama selesai:

1. Buka Laragon dan klik **Start All**.
2. Pastikan virtual host aktif dengan klik **Reload** bila diperlukan.
3. Buka `http://manajemen-sarpras.test`.
4. Jika sedang mengembangkan frontend dan memerlukan pembaruan langsung, jalankan `npm run dev` di terminal Laragon terpisah.

Tidak perlu mengulangi `composer install`, `npm install`, atau migrasi setiap kali membuka proyek. Jalankan kembali hanya bila dependency atau perubahan database proyek memang memerlukannya.

## Pemecahan masalah

| Masalah | Yang perlu diperiksa |
|---|---|
| `php` tidak ditemukan atau versinya salah | Pilih PHP 8.4.1 atau lebih baru di Laragon, buka terminal Laragon baru, lalu jalankan `php -v`. |
| Composer menyatakan versi PHP tidak cocok | Pastikan terminal memakai PHP 8.4.1 atau lebih baru sebelum menjalankan `composer install` atau Artisan. |
| `SQLSTATE` atau koneksi MySQL gagal | Pastikan MySQL aktif, database `manajemen_sarpras` sudah dibuat, dan konfigurasi `DB_*` di `.env` benar. |
| Alamat `.test` tidak terbuka | Pastikan proyek berada di `C:\laragon\www`, Auto Virtual Hosts aktif, Apache aktif, dan Laragon sudah di-Reload. |
| Halaman menampilkan error Vite atau manifest tidak ditemukan | Jalankan `npm install` lalu `npm run build`, atau jalankan `npm run dev` selama pengembangan. |
| Perubahan `.env` sepertinya tidak terbaca | Jalankan `php artisan optimize:clear`, lalu muat ulang halaman. |
| Halaman menampilkan error setelah perubahan database | Periksa pesan error dan migrasi yang tersedia. Jangan memakai `migrate:fresh` jika database berisi data yang ingin dipertahankan. |
