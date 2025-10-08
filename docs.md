# Dokumentasi REST API Login

## Ringkasan Pekerjaan

- Mengatur ulang rute autentikasi ke `routes/api.php` agar semua endpoint tersedia melalui prefix `/api/auth`.
- Membersihkan controller autentikasi sehingga validasi login lebih rapih dan endpoint `check` mengembalikan 401 saat token tidak valid.
- Menggunakan `User::firstOrCreate` di seeder untuk memastikan akun demo `test@example.com` selalu tersedia tanpa menabrak constraint unik ketika seeder dijalankan ulang.
- Mengonfigurasi proyek untuk memakai SQLite sebagai basis data lokal, sehingga environment ringan dan mudah dibawa.
- Menjalankan `php artisan passport:install` secara lokal guna menghasilkan kunci personal access token; bila dihapus, jalankan lagi sebelum menguji login berbasis token.

## Persiapan Lingkungan

1. Jalankan `composer install` untuk mengunduh dependensi PHP.
2. Salin `.env.example` menjadi `.env`, lalu set:
   - `APP_KEY` dengan `php artisan key:generate`.
   - `DB_CONNECTION=sqlite`.
   - `DB_DATABASE=database/database.sqlite` (pastikan path absolut bila dipindah direktori).
3. Buat file database menggunakan `touch database/database.sqlite`.
4. Migasi skema dasar dengan `php artisan migrate`.
5. Seed pengguna demo: `php artisan db:seed`.

> **Catatan:** Jika kamu ingin kembali menggunakan personal access token Passport, jalankan `php artisan passport:install` setelah migrasi. Perintah ini akan mem-publish ulang migrasi dan kunci yang dibutuhkan.

## Struktur Autentikasi

- `App\Http\Controllers\AuthController`
  - `login(Request $request)`: Validasi email/password, mencoba otentikasi via `Auth::attempt`, lalu membuat personal access token (`createToken`).
  - `check(Request $request)`: Mengecek guard `auth:api` dan mengembalikan informasi pengguna aktif; bila tidak terautentikasi, merespons 401.
- `routes/api.php`: Menyediakan endpoint `/api/auth/login`, `/api/auth/profile`, dan `/api/auth/logout` (belum diimplementasikan).
- `database/seeders/DatabaseSeeder`: Memastikan pengguna demo tersedia lewat `firstOrCreate` sehingga aman dijalankan berulang.

## Daftar Endpoint

| Method | Endpoint                 | Deskripsi                               | Auth |
|--------|--------------------------|------------------------------------------|------|
| POST   | `/api/auth/login`        | Login dengan email & password            | No   |
| GET    | `/api/auth/profile`      | Mendapatkan profil pengguna aktif        | Bearer token |
| POST   | `/api/auth/logout`       | (Belum diimplementasikan)                | Bearer token |

### Payload `POST /api/auth/login`

```json
{
  "email": "test@example.com",
  "password": "password"
}
```

### Contoh Respons Berhasil

```json
{
  "success": true,
  "user": {
    "id": 1,
    "name": "Test User",
    "email": "test@example.com",
    "created_at": "2025-10-08T04:19:10.000000Z",
    "updated_at": "2025-10-08T04:19:10.000000Z"
  },
  "token": "<personal_access_token>"
}
```

Gunakan token tersebut pada header `Authorization: Bearer <token>` ketika memanggil `/api/auth/profile`.

## Troubleshooting

- **404 Not Found**: Pastikan memakai prefix `/api`, misal `http://127.0.0.1:8000/api/auth/login`.
- **422 Unprocessable Entity**: Validasi gagal; cek field `email` dan `password` di body request.
- **401 Unauthorized**: Token hilang/kadaluwarsa ketika memanggil `/api/auth/profile`.
- **LogicException Invalid key supplied**: Passport belum dipasang atau kunci dihapus. Jalankan `php artisan passport:install` agar kunci `storage/oauth-*.key` dan tabel token tersedia.
- **Constraint unik saat seeding**: Gunakan `php artisan migrate:fresh --seed` untuk reset total, atau andalkan `firstOrCreate` yang sudah disiapkan.

## Alur Pengujian Manual

1. Pastikan server berjalan dengan `php artisan serve`.
2. Login via Postman menghantarkan email/password sesuai data seeder.
3. Copy token pada respons login.
4. Panggil `/api/auth/profile` dengan header `Authorization: Bearer <token>` untuk memverifikasi autentikasi berhasil.

## Langkah Lanjutan

- Implementasikan logika `logout` (mis. revoke token) jika diperlukan.
- Tambahkan tes fitur (`tests/Feature`) untuk memverifikasi login dan akses profil.
- Pertimbangkan mengganti Passport dengan Sanctum jika cukup dengan token sederhana tanpa OAuth penuh.

