# Portofolio Web - UAS Pemrograman Web

- Nama: Mohamad Fauzi Febrianto
- NIM: 252410102006
- Prodi: Teknologi Informasi
- Fakultas: Fakultas Ilmu Komputer

## Tentang proyek

Ini website portofolio untuk tugas UAS Praktikum Pemrograman Web. Saya lanjutkan dari proyek UTS. Bedanya, sekarang datanya disimpan di database MySQL dan ada dua role, yaitu admin dan user.

Dibuat dengan Laravel dan Blade.

## Yang bisa dilakukan

- **Admin:** mengelola kategori dan proyek (tambah, edit, hapus).
- **User:** hanya bisa melihat daftar proyek.
- Login dan logout, dark mode, dan tampilan yang menyesuaikan layar HP.

## Akun untuk mencoba

| Role  | Username | Password   |
| ----- | -------- | ---------- |
| Admin | `admin`  | `admin123` |
| User  | `fauzi`  | `fauzi123` |

## Pembatasan akses

Semua halaman di dalam aplikasi dijaga middleware `auth`, jadi harus login dulu. Halaman kategori dan fitur tambah, edit, hapus proyek dijaga middleware `role:admin` (kode ada di `CheckUserRole`). Kalau user biasa membukanya, yang muncul halaman 403.

## Database

Ada tiga tabel: `users`, `kategoris`, dan `proyeks`. Satu kategori bisa punya banyak proyek, jadi tabel `proyeks` punya kolom `kategori_id` yang mengarah ke `kategoris`.

## Cara menjalankan

Siapkan PHP 8.3 ke atas, Composer, dan MySQL yang sudah menyala.

```powershell
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

Kalau ditanya apakah database `uas_pweb` mau dibuat, jawab `yes`. Kalau MySQL kamu memakai password, isi `DB_PASSWORD` di file `.env`. Setelah itu buka http://localhost:8000.

## Screenshot

**Login**

<img src="docs/login.png" width="700" alt="Halaman login">

**Dashboard (admin)**

<img src="docs/dashboard-admin.png" width="700" alt="Dashboard admin">

**Dashboard (user)**

<img src="docs/dashboard-user.png" width="700" alt="Dashboard user">

**Pengelolaan proyek (admin)**

<img src="docs/pengelolaan-admin.png" width="700" alt="Pengelolaan proyek oleh admin">

**Tambah proyek**

<img src="docs/proyek-tambah.png" width="700" alt="Form tambah proyek">

**Edit proyek**

<img src="docs/proyek-edit.png" width="700" alt="Form edit proyek">

**Daftar kategori (admin)**

<img src="docs/kategori-daftar.png" width="700" alt="Daftar kategori">

**Tambah kategori**

<img src="docs/kategori-tambah.png" width="700" alt="Form tambah kategori">

**Edit kategori**

<img src="docs/kategori-edit.png" width="700" alt="Form edit kategori">

**Pengelolaan proyek (user, hanya bisa melihat)**

<img src="docs/pengelolaan-user.png" width="700" alt="Pengelolaan proyek oleh user">

**User membuka halaman admin (403)**

<img src="docs/akses-ditolak.png" width="700" alt="Halaman 403">

**Profile**

<img src="docs/profile.png" width="700" alt="Halaman profile">
