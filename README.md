<!-- <p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development/)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT). -->

WisataEnrekang
(Sistem informasi wisata kabupaten Enrekang)





 







Nur indah sari
D0223319







🎯 Role dan Fitur Wisata Enrekang
1. Admin
Kelola data destinasi wisata

Kelola data user

Kelola kategori wisata

Monitoring statistik kunjungan

2. User
Melihat daftar wisata

Memberikan ulasan dan rating

Mengajukan perubahan/penambahan data wisata

Melihat riwayat ulasan pribadi

3. Guest
Melihat daftar dan detail destinasi wisata

Melihat ulasan dan rating umum

🗃️ Tabel-Tabel Database
1. users
Field	Tipe Data	Keterangan
id	BIGINT	Primary key
name	VARCHAR	Nama lengkap
email	VARCHAR	Unik
password	VARCHAR	Hash
role	ENUM	'admin', 'user', 'guest'
remember_token	VARCHAR	Token login
timestamps	TIMESTAMP	created_at, updated_at

2. wisata
Field	Tipe Data	Keterangan
id	BIGINT	Primary key
nama	VARCHAR	Nama tempat wisata
deskripsi	TEXT	Deskripsi
lokasi	VARCHAR	Lokasi lengkap
kategori_id	BIGINT	Relasi ke tabel kategori
foto	STRING	Path gambar
timestamps	TIMESTAMP	created_at, updated_at

3. kategori
Field	Tipe Data	Keterangan
id	BIGINT	Primary key
nama_kategori	VARCHAR	Misalnya: Alam, Budaya, dll.
timestamps	TIMESTAMP	created_at, updated_at

4. ulasan
Field	Tipe Data	Keterangan
id	BIGINT	Primary key
user_id	BIGINT	Relasi ke users
wisata_id	BIGINT	Relasi ke wisata
rating	INTEGER	1 sampai 5
komentar	TEXT	Isi ulasan
timestamps	TIMESTAMP	created_at, updated_at

5. pengajuan_perubahan
Field	Tipe Data	Keterangan
id	BIGINT	Primary key
user_id	BIGINT	Pengaju
wisata_id	BIGINT	Wisata terkait
field_diubah	VARCHAR	Nama field yang diubah
nilai_lama	TEXT	Nilai sebelumnya
nilai_baru	TEXT	Nilai yang diajukan
status	ENUM	pending, disetujui, ditolak
catatan_admin	TEXT	Opsional oleh admin
timestamps	TIMESTAMP	created_at, updated_at

🔗 Relasi Antar Tabel
users ↔ ulasan → One to Many

users ↔ pengajuan_perubahan → One to Many

kategori ↔ wisata → One to Many

wisata ↔ ulasan → One to Many

wisata ↔ pengajuan_perubahan → One to Many

