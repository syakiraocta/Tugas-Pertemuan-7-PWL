# Tugas-Pertemuan-7-PWL-

# WarmadZ TI - Hardware Store Management



Tugas Pemrograman Web (Pertemuan 7) - Implementasi Session dan Filter CodeIgniter 4.



## Deskripsi Tugas



Project ini memenuhi kriteria tugas pertemuan 7 yaitu:



1. Session: Menyimpan data login pengguna.

2. Filter: Membatasi akses halaman Dashboard, Produk, dan Keranjang hanya untuk user yang sudah login.



## Fitur



- Login System: Validasi email (wajib ada @) dan password (bebas/tidak kosong).

- Auth Filter: Proteksi URL otomatis. User yang belum login akan diarahkan kembali ke halaman login.

- Sign Out: Menghapus session dan logout dari sistem.

- Custom 404 Page: Halaman error khusus jika route tidak ditemukan.

- UI NiceAdmin: Menggunakan template Bootstrap 5 dengan perbaikan pada foto profil dan header.



## Cara Menjalankan



1. Clone repository ini.

2. Jalankan perintah 'composer install' di terminal.

3. Jalankan server dengan 'php spark serve'.

4. Akses di browser: http://localhost:8080/login



## Akun Demo



- Email: admin@warmadz.com (atau apa saja yang ada tanda @)

- Password: bebas (tidak boleh kosong)



## Struktur File Penting



- app/Controllers/Auth.php : Logika Login & Logout.

- app/Filters/AuthFilter.php : Sistem pengaman (Filter).

- app/Config/Routes.php : Pengaturan link navigasi.

- app/Views/ : Kumpulan file tampilan web.



---



Dibuat oleh: Syakira Octa Fitria

NIM : A11.2024.15816

