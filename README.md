# mvc-example
Contoh pengaplikasian MVC menggunakan native PHP secara sederhana.
Pada versi ini, digunakan style psr4 untuk autoloading.

Dalam contoh ini tidak ada routing controller melalui address bar, melainkan menggunakan query browser biasa.

Untuk tabel-nya dapat dibuat terlebih dahulu menggunakan database mysql

CREATE TABLE mahasiswa (id int(11) not null auto_increment primary key, nim char(14) not null, nama varchar(255) not null) -> copy dan paste ke jendela query mysql

Untuk koneksi database, saya menggunakan PDO sebagai pengganti dari mysql_connect() info lengkap, kunjungi http://php.net/manual/en/book.pdo.php

## Note tambahan:
- Tambahan yang ditambahkan adalah fitur edit dan delete data.
- Tambahan berupa routing utama, controller, model, dan view dengan tambahan page mhsEdit.php untuk edit data.
- Lalu ada sedikit penambahan styling dengan menggunakan tailwindcss.
- untuk database namanya saya menggunakan nama tugas_mvc.
- Terakhir, ada sedikit penambahan fitur pagination untuk menampilkan data dengan jumlah data yang ditampilkan per halaman.
