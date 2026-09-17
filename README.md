# Tugas Pemrograman Web Lanjut

Repositori ini berisi kumpulan tugas praktikum mata kuliah **Pemrograman Web Lanjut** yang menggunakan bahasa pemrograman **PHP** dan database **MySQL**.

---

## 📌 Identitas Mahasiswa

- **Nama:** [Nama Lengkap Anda]
- **NIM:** [NIM Anda]
- **Kelas:** [Kelas / Rombel]
- **Mata Kuliah:** Pemrograman Web Lanjut
- **Dosen Pengampu:** [Nama Dosen]

---

## 📁 Struktur Folder

```text
Pemprograman-Web-Lanjut/
├── MySql/
│   ├── Connection.php         # Konfigurasi koneksi ke database MySQL
│   ├── Insert_into_table.php  # Logika penambahan data mahasiswa
│   ├── RemoveTable.php        # Logika penghapusan / reset data tabel
│   ├── Show_table.php         # Menampilkan data mahasiswa dari database
│   ├── index.php              # Halaman utama form input & tabel mahasiswa
│   └── loginpage.php          # Halaman login
│
├── Operator/
│   ├── OperatorAritmatika.php # Contoh operasi aritmatika (+, -, *, /, %)
│   ├── OperatorBitwise.php    # Contoh operasi bitwise (&, |, ^, ~, <<, >>)
│   ├── OperatorLogika.php     # Contoh operator logika (AND, OR, NOT)
│   ├── OperatorPenugasan.php  # Contoh assignment operator (=, +=, -=, dll)
│   ├── OperatorPerbanding.php # Contoh operator perbandingan (==, ===, !=, >, <)
│   ├── OperatorTernary.php    # Contoh operator ternary (? :)
│   ├── calculator.php         # Aplikasi kalkulator sederhana
│   └── loginpage.php          # Halaman login sederhana
│
└── README.md
```

---

## 📖 Ringkasan Materi & Praktikum

### 1. Modul Operator PHP (`/Operator`)

Berisi implementasi dasar sintaks dan logika operator dalam PHP:

- **Aritmatika, Logika, Perbandingan, Penugasan, Bitwise, dan Ternary**: Praktik penggunaan berbagai operator PHP.
- **Kalkulator Sederhana (`calculator.php`)**: Aplikasi web untuk menghitung operasi matematika dasar.
- **Halaman Login (`loginpage.php`)**: Form autentikasi sederhana.

### 2. Modul Database MySQL (`/MySql`)

Berisi implementasi integrasi PHP dengan database MySQL:

- **Koneksi Database (`Connection.php`)**: Menghubungkan script PHP ke server MySQL database `Mahasiswa`.
- **Manajemen Nilai & Data Mahasiswa (`index.php`)**: Menginput Nama, NIM, nilai Tugas, UTS, dan UAS serta menampilkan hasilnya dalam bentuk tabel.

---

## 📝 Catatan Tambahan

Project ini dibuat untuk memenuhi tugas praktikum mata kuliah Pemrograman Web Lanjut.
