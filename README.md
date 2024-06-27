

Selamat datang di situs web Salon Susi

## Pengembang Kami
- Carin Gunawan (535220056)
- Gabriella Ignatia(535220104)
- Merry Uli Artha Manurung (5352200263)

## Panduan Proyek
### Langkah-langkah jika Anda tidak menggunakan Laragon:
1. Clone repositori ([Tautan Repository](https://github.com/535220056/SALON-SUSI.git)) dan buka di Code Editor (contoh: Visual Studio Code).
2. Buka terminal dan ketik "composer install" untuk menginstal dependensi COMPOSER, "npm install" untuk menginstal dependensi NPM.
3. Buka pgAdmin dan buat server Database baru, di dalam server tersebut, buat database baru bernama "NewDB" dan klik kanan -> restore, pilih file backup sql yang ada di folder repositori bernama "DATABASEAPP/backup-database.sql" dan tekan Restore (ingat untuk mengganti password di .env menyesuaikan dengan password postgresql yang telah dibuat saat awal instalasi postgresql).
4. Buka terminal lagi dan ketik "npm run dev" untuk mengompilasi aset front-end, setelah menjalankan ini, biarkan jendela tetap terbuka.
5. Buka terminal baru dan ketik "php artisan serve" untuk menjalankan server, kemudian Anda dapat mengakses situs web melalui tautan yang diberikan di terminal setelah menjalankan server.
6. Install PgSQL jika memakai Database tersebut (jika, tidak, perlu mengganti setinggan connection, host pada file .env), sesuaikan setinggan database pada  file .env.
7. Pada username Database yang saya isi pada file .env (DB_DATABASE = NewDB, DB_USERNAME :postgres, DB_PASSWORD = 260404)


## Tautan Video Demo Program
Tautan: [[Demo Program](https://youtu.be/6FQ1IlRE4js)]
Tautan: [Presentasi(https://youtu.be/McQmEBtodyU)]

Mohon Maaf Pak Irvan, sebelumnya kami kirim secara manual masing - masing dan terkadang mengerjakan bersama untuk menyelesaikan project ini, 
sehingga progres github kami update saat final saja 
kami langsung push semua fitur, untuk pembagian kerja dapat dilihat pada laporan pada bab 3

