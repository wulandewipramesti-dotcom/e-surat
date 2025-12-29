# 📄 Sistem Informasi Pengajuan Surat Mahasiswa

> 🎓 Aplikasi berbasis web untuk pengajuan dan pengelolaan surat akademik mahasiswa secara online, cepat, dan transparan.

---

## 📌 Deskripsi Proyek
**Sistem Informasi Pengajuan Surat Mahasiswa** adalah aplikasi berbasis web yang membantu mahasiswa dalam mengajukan berbagai jenis surat akademik secara online, memantau status pengajuan, serta mengunduh surat yang telah disetujui oleh pihak akademik.

Sistem ini menggantikan proses manual menjadi lebih **efisien, terstruktur, dan transparan**, dengan alur status surat yang jelas dari tahap pengajuan hingga surat selesai diproses.

---

## 🎯 Tujuan Sistem
- ✅ Memudahkan mahasiswa mengajukan surat akademik  
- 📉 Mengurangi proses administrasi manual  
- ⏱️ Monitoring status surat secara real-time  
- 🗂️ Menjadi pusat data surat mahasiswa terintegrasi  

---

## 🛠️ Tech Stack

### 🔧 Backend
- 🐘 **PHP 8.2**
- ⚙️ **CodeIgniter 4.6**
- 🗄️ **MySQL / MariaDB**
- 🧩 **MVC Architecture**

### 🎨 Frontend
- 🎨 **Bootstrap 4 / 5**
- ⭐ **Font Awesome**
- 🌐 **HTML5 & CSS3**

### 🧰 Tools & Library
- 🔐 Session Authentication  
- 🛡️ CSRF Protection (CI4)  
- 🧾 JSON Field (`data_surat`)  
- 📎 File Upload (PDF / Surat Akademik)  

---

## 🧱 Struktur Proyek (Ringkas)

app/
├── Controllers/
│ ├── Mahasiswa/
│ │ ├── Spm.php
│ │ ├── Skak.php
│ │ ├── Sik.php
│ │ ├── Simr.php
│ │ └── Sism.php
│ └── Mahasiswa.php
│
├── Models/
│ ├── SuratModel.php
│ ├── SpmModel.php
│ ├── SikModel.php
│ ├── SimrModel.php
│ └── SismModel.php
│
├── Views/
│ ├── dashboard_mhs.php
│ └── mahasiswa/
│ ├── spm/
│ ├── skak/
│ ├── sik/
│ ├── simr/
│ └── sism/
│
public/
└── uploads/
└── surat/

---

## 📄 Jenis Surat yang Didukung

| 🆔 Kode | 📑 Jenis Surat |
|------|----------------|
| SPM | Surat Permohonan Magang |
| SKAK | Surat Keterangan Aktif Kuliah |
| SIK | Surat Izin Kuliah |
| SIMR | Surat Izin Meminjam Ruangan |
| SISM | Surat Izin Survey Mata Kuliah |

---

## 🔁 Alur Pengajuan Surat

### 👨‍🎓 1. Mahasiswa
- 🔑 Login ke sistem  
- 📝 Mengisi form pengajuan surat  
- 🔒 Data mahasiswa otomatis & *read-only*  
- 📤 Surat dikirim dengan status **pending**  

### 🔄 2. Status Surat
| 📌 Status | 📝 Keterangan |
|--------|--------------|
| pending | Surat baru dikirim |
| ditolak | Ditolak oleh akademik |
| diterima | Sedang diproses |
| selesai | Surat selesai & file tersedia |

### 🎯 3. Aksi Mahasiswa
| Status | Aksi |
|------|------|
| pending | 🔍 Detail · ✏️ Edit · 🗑️ Hapus |
| ditolak | ✏️ Edit Ulang |
| diterima | ⏳ Menunggu |
| selesai | ⬇️ Unduh |

---

## 📊 Dashboard Mahasiswa
Dashboard menampilkan informasi:
- 📈 Total surat per jenis  
- 👤 Data sesuai user login  
- 🗄️ Data diambil langsung dari database  

**Contoh:**
- Total Surat Permohonan Magang  
- Total Surat Aktif Kuliah  
- Total Surat Izin Kuliah  
- Total Surat Meminjam Ruangan  

---

## 🗃️ Struktur Database (Konsep)

### 📌 Tabel `surat`
Digunakan untuk:
- SPM · SKAK · SISM  

**Kolom penting:**
- `user_id`
- `jenis_surat`
- `data_surat` (JSON)
- `status`
- `file_surat`

### 📌 Tabel Khusus
| 🗂️ Tabel | 📄 Digunakan Untuk |
|-------|------------------|
| sik | Surat Izin Kuliah |
| simr | Surat Izin Meminjam Ruangan |

---

## 🔐 Keamanan
- 🔒 Session-based Authentication  
- 🛡️ CSRF Protection  
- ✅ Validasi status sebelum edit / delete  
- 📁 Upload file hanya oleh akademik  

---

## 🚀 Cara Menjalankan Project

### 1️⃣ Clone Repository
```bash
git clone https://github.com/username/nama-project.git

2️⃣ Konfigurasi Database
database.default.hostname = localhost
database.default.database = nama_db
database.default.username = root
database.default.password =

3️⃣ Jalankan Server
php spark serve

🌐 Akses:
http://localhost:8080

📌 Catatan Pengembangan

🧩 Modular per jenis surat

➕ Mudah dikembangkan

🔁 Konsisten dalam status & alur aksi

👨‍🎓 Author

Nama: I Wayan Gede Goura Sakti, Dewa Ayu Wulan Dewi Pramesti

Project: Tugas / Sistem Informasi Akademik

Framework: CodeIgniter 4
