# Panduan Penggunaan Manajemen Sarpras

Panduan ini menjelaskan cara membuka aplikasi, memahami halaman login, dan mengetahui batas fungsi yang tersedia saat ini.

## 1. Membuka aplikasi

Jalankan aplikasi secara lokal dengan mengikuti [Panduan Laragon](./PANDUAN_LARAGON.md). Setelah server web aktif, buka alamat lokal yang dikonfigurasi, biasanya:

```text
http://manajemen-sarpras.test
```

Halaman yang ditampilkan adalah halaman login SIM-LAB.

## 2. Status login dan akun

**Saat ini pengguna belum dapat login ke aplikasi.** Halaman login masih berupa tampilan antarmuka/demo dan belum terhubung ke proses autentikasi server. Ketika tombol **Masuk ke SIM-LAB** diklik, aplikasi hanya menampilkan pesan bahwa autentikasi belum terhubung.

Database seeder menyediakan data akun uji berikut:

| Kolom | Nilai |
|---|---|
| Email pada database | `test@example.com` |
| Password awal seeder | `password` |

Akun tersebut dibuat oleh `php artisan migrate --seed`, tetapi **belum dapat digunakan untuk masuk melalui halaman login**. Form meminta NIM/NIP, sedangkan autentikasi dan pencocokan akun belum diimplementasikan. Data seeder ini hanya data pengembangan; jangan gunakan kredensial tersebut untuk lingkungan produksi.

## 3. Elemen halaman login

- **NIM / NIP**: kolom identitas pada tampilan. Belum diverifikasi oleh aplikasi.
- **Kata Sandi**: kolom kata sandi pada tampilan. Belum diperiksa terhadap akun.
- **Ikon mata**: menampilkan atau menyembunyikan karakter kata sandi yang sedang diketik.
- **Ingat Saya di Perangkat Ini**: pilihan tersedia pada tampilan, tetapi belum memiliki perilaku autentikasi/sesi.
- **Masuk ke SIM-LAB**: menampilkan informasi bahwa autentikasi belum terhubung.
- **Lupa Password?**, **Masuk dengan Akun SSO Kampus**, **Layanan IT Helpdesk**, dan **Panduan SOP**: saat ini hanya menampilkan pesan bahwa layanan tersebut belum tersedia/terhubung.

Karena login belum diimplementasikan, belum ada halaman atau alur pengguna setelah berhasil masuk.

## 4. Jika tampilan login tidak muncul dengan benar

1. Pastikan Laragon dan layanan web yang dipakai sedang berjalan.
2. Pastikan aset frontend sudah dibangun dari folder proyek:

   ```powershell
   npm run build
   ```

3. Muat ulang halaman browser. Untuk langkah setup atau bantuan koneksi database, lihat [Panduan Laragon](./PANDUAN_LARAGON.md).

## 5. Catatan untuk pengembang

Untuk membuat login dapat digunakan, proyek perlu menghubungkan form ke endpoint autentikasi, memvalidasi kredensial terhadap tabel pengguna, menangani sesi dan logout, serta memutuskan apakah identitas pengguna adalah email atau NIM/NIP. Integrasi SSO dan pemulihan kata sandi juga belum tersedia.

