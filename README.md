📄 Sistem Informasi Pengajuan Surat Mahasiswa
📌 Deskripsi Proyek

Sistem Informasi Pengajuan Surat Mahasiswa adalah aplikasi berbasis web yang digunakan oleh mahasiswa untuk mengajukan berbagai jenis surat akademik secara online, memantau status surat, serta mengunduh surat yang telah disetujui oleh pihak akademik.

Sistem ini dirancang untuk menggantikan proses manual menjadi lebih cepat, terstruktur, dan transparan, dengan alur status surat yang jelas dari pengajuan hingga selesai.

🎯 Tujuan Sistem

Memudahkan mahasiswa dalam mengajukan surat akademik

Mengurangi proses administrasi manual

Menyediakan monitoring status surat secara real-time

Menjadi pusat data surat mahasiswa yang terintegrasi

🛠️ Tech Stack
Backend

PHP 8.2

CodeIgniter 4.6

MySQL / MariaDB

MVC Architecture

Frontend

Bootstrap 4 / 5

Font Awesome

HTML5 & CSS3

Tools & Library

Session Authentication

CSRF Protection (CI4)

JSON Field (data_surat)

File Upload (PDF / Surat Akademik)

🧱 Struktur Proyek (Ringkas)
app/
├── Controllers/
│   ├── Mahasiswa/
│   │   ├── Spm.php
│   │   ├── Skak.php
│   │   ├── Sik.php
│   │   ├── Simr.php
│   │   └── Sism.php
│   └── Mahasiswa.php (Dashboard)
│
├── Models/
│   ├── SuratModel.php
│   ├── SpmModel.php
│   ├── SikModel.php
│   ├── SimrModel.php
│   └── SismModel.php
│
├── Views/
│   ├── dashboard_mhs.php
│   └── mahasiswa/
│       ├── spm/
│       ├── skak/
│       ├── sik/
│       ├── simr/
│       └── sism/
│
public/
└── uploads/
    └── surat/

📄 Jenis Surat yang Didukung
Kode	Jenis Surat
SPM	Surat Permohonan Magang
SKAK	Surat Keterangan Aktif Kuliah
SIK	Surat Izin Kuliah
SIMR	Surat Izin Meminjam Ruangan
SISM	Surat Izin Survey Mata Kuliah
🔁 Alur Pengajuan Surat
1️⃣ Mahasiswa

Login ke sistem

Mengisi form pengajuan surat

Data mahasiswa (Nama, NIM, Jurusan) otomatis & read-only

Surat dikirim dengan status pending

2️⃣ Status Surat
Status	Keterangan
pending	Surat baru dikirim
ditolak	Surat ditolak akademik
diterima	Surat sedang diproses
selesai	Surat selesai & file tersedia
3️⃣ Aksi Mahasiswa Berdasarkan Status
Status	Aksi
pending	Detail, Edit, Hapus
ditolak	Edit Ulang
diterima	Menunggu (tidak bisa edit)
selesai	Unduh / Preview Surat
📊 Dashboard Mahasiswa

Dashboard menampilkan:

Total surat per jenis

Data diambil langsung dari database

Menyesuaikan user yang sedang login

Contoh:

Total Surat Permohonan Magang

Total Surat Aktif Kuliah

Total Surat Izin Kuliah

Total Surat Meminjam Ruangan

🗃️ Struktur Database (Konsep)
Tabel surat

Digunakan untuk:

SPM

SKAK

SISM

Kolom penting:

user_id

jenis_surat

data_surat (JSON)

status

file_surat

Tabel Khusus
Tabel	Digunakan untuk
sik	Surat Izin Kuliah
simr	Surat Izin Meminjam Ruangan

Data dashboard mengambil dari tabel masing-masing, bukan dari tabel surat umum.

🔐 Keamanan

Session-based authentication

CSRF protection aktif

Validasi status sebelum edit / delete

File upload dibatasi hanya dari admin/akademik

🚀 Cara Menjalankan Project

Clone repository

git clone https://github.com/username/nama-project.git


Konfigurasi database di .env

database.default.hostname = localhost
database.default.database = nama_db
database.default.username = root
database.default.password =


Jalankan migration / import database

Jalankan server

php spark serve


Akses:

http://localhost:8080

📌 Catatan Pengembangan

Sistem menggunakan pendekatan modular per jenis surat

Mudah dikembangkan untuk jenis surat baru

Struktur action & status konsisten di seluruh modul

👨‍🎓 Author

Nama: (I Wayan Gede Goura Sakti)
      (Wulandari)
Project: Tugas / Sistem Informasi Akademik
Framework: CodeIgniter 4
