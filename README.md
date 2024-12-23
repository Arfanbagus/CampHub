Selamat Datang di CampHub 🎉

🌟 Pendahuluan

CampHub adalah platform terbaik untuk mengelola dan mengorganisasi kegiatan kamp dengan mudah! Dibangun menggunakan kerangka kerja Laravel PHP yang kuat, proyek ini menggabungkan fungsionalitas yang tangguh dengan fitur ramah pengguna untuk memberikan pengalaman yang mulus bagi peserta, penyelenggara, dan administrator.

🚀 Fitur-Fitur

Manajemen Mudah: Pantau pendaftaran, jadwal, dan logistik dengan praktis.

Pengaturan yang Dapat Disesuaikan: Sesuaikan konfigurasi untuk memenuhi kebutuhan unik kamp Anda.

Aman dan Andal: Fitur bawaan untuk penanganan data yang aman dan pencatatan kesalahan yang kuat.

Desain Responsif: Bekerja sempurna di semua perangkat.

Integrasi Email: Tetap informasikan peserta Anda dengan mailer yang terintegrasi Mailtrap.

🛠️ Prasyarat

Pastikan Anda memiliki perangkat lunak berikut yang terinstal:

PHP >= 8.0

Composer

MySQL (atau database lain yang didukung oleh Laravel)

Node.js dan npm/yarn (untuk kompilasi aset)

📥 Panduan Instalasi

Ikuti langkah-langkah ini untuk mengatur CampHub secara lokal:

Klon repositori:

git clone <repository_url>
cd camphub_project

Instal dependensi:

composer install
npm install

Atur file lingkungan:

cp .env.example .env

Perbarui konfigurasi berikut di file .env Anda:

APP_NAME=CampHub
DB_DATABASE=camphub_project
DB_USERNAME=<username_database_anda>
DB_PASSWORD=<password_database_anda>
MAIL_USERNAME=<username_mailtrap_anda>
MAIL_PASSWORD=<password_mailtrap_anda>

Hasilkan kunci aplikasi:

php artisan key:generate

Jalankan migrasi:

php artisan migrate

Jalankan aplikasi:

php artisan serve

Kompilasi aset:

npm run dev

📚 Dokumentasi

Konfigurasi Lingkungan:
Atur kredensial database dan email Anda di file .env.

Sesi dan Cache:

SESSION_DRIVER=database
CACHE_STORE=database

Pengaturan Email:

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=<username_mailtrap_anda>
MAIL_PASSWORD=<password_mailtrap_anda>
MAIL_FROM_ADDRESS=1rababas12@gmail.com
MAIL_FROM_NAME=CampHub

🤝 Berkontribusi

Kami senang untuk berkolaborasi! Berikut cara Anda dapat membantu:

Fork repositori.

Buat branch fitur.

Lakukan perubahan Anda dan commit.

Ajukan Pull Request dengan deskripsi yang rinci.

📝 Lisensi

CampHub dilisensikan dengan bangga di bawah Lisensi MIT.

📧 Dukungan

Ada pertanyaan atau umpan balik? Hubungi kami di 1rababas12@gmail.com atau buka masalah di repositori.

Mari buat pengalaman camping yang tak terlupakan dengan CampHub! 🌲

