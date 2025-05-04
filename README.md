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

Framework Web Based
2025



Wisata Enrekang merupakan sebuah sistem informasi berbasis web yang dirancang untuk memberikan informasi seputar destinasi wisata yang ada di Kabupaten Enrekang. Sistem ini bertujuan untuk menjadi media promosi pariwisata daerah sekaligus memberikan kemudahan bagi masyarakat, wisatawan, dan pihak pengelola dalam mengakses serta mengelola data wisata.




Role dan Fitur-fiturnya
1. Admin	
- CRUD Data Wisata
- Verifikasi Pengajuan
- Kelola Pengguna
2. User	
- Pengajuan Perubahan Data Wisata
- Lihat Daftar Wisata
- Profil
- Pemesanan Tiket
3. 
Guest	
- Lihat Daftar Wisata
- Cari Wisata
- Lihat Detail Wisata

Tabel-tabel database beserta field dan tipe datanya
Tabel 1: users
| Nama Field  | Tipe Data    | Keterangan                  |
| ----------- | ------------ | --------------------------- |
| id          | BIGINT       | Primary Key, Auto Increment |
| name        | VARCHAR(100) | Nama pengguna               |
| email       | VARCHAR(100) | Email unik                  |
| password    | VARCHAR(255) | Password terenkripsi        |
| role        | ENUM         | admin, user, guest          |
| created\_at | TIMESTAMP    | Tanggal dibuat              |
| updated\_at | TIMESTAMP    | Tanggal diperbarui          |

Tabel 2: wisatas
| Nama Field   | Tipe Data    | Keterangan                  |
| ------------ | ------------ | --------------------------- |
| id           | BIGINT       | Primary Key, Auto Increment |
| nama\_wisata | VARCHAR(150) | Nama tempat wisata          |
| lokasi       | VARCHAR(255) | Lokasi wisata               |
| deskripsi    | TEXT         | Deskripsi tempat wisata     |
| foto         | VARCHAR(255) | Nama file gambar wisata     |
| status       | ENUM         | disetujui, pending, ditolak |
| created\_by  | BIGINT       | Foreign Key ke tabel users  |
| created\_at  | TIMESTAMP    | Tanggal dibuat              |
| updated\_at  | TIMESTAMP    | Tanggal diperbarui          |


Tabel 3: pengajuan_perubahan
| Nama Field  | Tipe Data | Keterangan                        |
| ----------- | --------- | --------------------------------- |
| id          | BIGINT    | Primary Key, Auto Increment       |
| user\_id    | BIGINT    | Foreign Key ke users              |
| wisata\_id  | BIGINT    | Foreign Key ke wisatas            |
| perubahan   | TEXT      | Deskripsi perubahan yang diajukan |
| status      | ENUM      | pending, disetujui, ditolak       |
| created\_at | TIMESTAMP | Tanggal pengajuan                 |
| updated\_at | TIMESTAMP | Tanggal diperbarui                |


Tabel 4: pemesanan_tiket
| Nama Field         | Tipe Data | Keterangan                    |
| ------------------ | --------- | ----------------------------- |
| id                 | BIGINT    | Primary Key, Auto Increment   |
| user\_id           | BIGINT    | Foreign Key ke users          |
| wisata\_id         | BIGINT    | Foreign Key ke wisatas        |
| jumlah\_tiket      | INTEGER   | Jumlah tiket yang dipesan     |
| tanggal\_kunjungan | DATE      | Tanggal kunjungan wisata      |
| status             | ENUM      | pending, berhasil, dibatalkan |
| created\_at        | TIMESTAMP | Tanggal pemesanan             |
| updated\_at        | TIMESTAMP | Tanggal diperbarui            |


Jenis Relasi dan Tabel yang Berelasi (Pembaruan)
users → wisatas
One to Many (User membuat wisata)

users → pengajuan_perubahan
One to Many (User mengajukan perubahan)

wisatas → pengajuan_perubahan
One to Many (Satu wisata memiliki banyak pengajuan)

users → pemesanan_tiket
One to Many (User dapat melakukan banyak pemesanan)

wisatas → pemesanan_tiket
One to Many (Satu wisata bisa dipesan oleh banyak user)
