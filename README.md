## TOBAHOME
<img width="944" alt="Home" src="https://user-images.githubusercontent.com/55095874/84578374-d83e3a80-adee-11ea-924e-92d273eef5e6.PNG">

TobaHome adalah sebuah sistem informasi homestay yang dibangun agar dapat mempermudah wisatawan lokal maupun mancanegara dalam mendapatkan informasi homestay disekitar kawasan Toba Samosir.
<hr>

## Instalasi 

### Spesifikasi
- PHP ^7.3.9
- Laravel Framework 7.13.0
- Database MySQL 

### Cara Instal dan Penggunaan

1. Clone atau download source code
    - Para terminal, clone repo `git clone git@github.com:yenicpanjaitan08/TobaHome.git`
    - atau `git clone https://github.com/yenicpanjaitan08/TobaHome.git`
    - Jika tidak menggunakan Git, silakan **Download Zip** dan *extract* pada direktori web server (misal: xampp/htdocs)
2. `cd TobaHome`
3. `composer install`
4. `cp .env.example .env`
    - Jika tidak menggunakan Git rename file `.env.example` menjadi `.env`
5. Pada terminal `php artisan key:generate`
6. Buat **database pada mysql** untuk sistem ini
7. **Setting database** pada file `.env`
    ```
    DB_CONNECTION=mysql
    DB_HOST=localhost
    DB_PORT=3306
    DB_DATABASE=tobahome_db
    DB_USERNAME=root
    DB_PASSWORD=
    ```
8. `php artisan migrate` atau dapat dengan import database tobahome_db.sql yang telah dilampirkan pada code
9. `php artisan serve`
10. Untuk Web admin dapat dilihat dari repository berikut " https://github.com/yenicpanjaitan08/Dashboard-Admin-TobaHome "dan jalankan sesuai langkah yang sudah tertera.

11. Selesai

<hr>

## Screenshots Home

#### OWNER
<img width="960" alt="Owner" src="https://user-images.githubusercontent.com/55095874/84578378-dc6a5800-adee-11ea-86af-ef8466c3543a.PNG">


#### VISITOR
<img width="944" alt="Visitor" src="https://user-images.githubusercontent.com/55095874/84578381-df654880-adee-11ea-8840-bffae49a02b1.PNG">

#### ADMIN
<img width="958" alt="Admin" src="https://user-images.githubusercontent.com/55095874/85225054-a7ff2900-b3f8-11ea-92c5-9618eb94e7bf.jpeg">

