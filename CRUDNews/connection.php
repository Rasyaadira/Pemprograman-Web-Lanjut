<?php
$db_host = 'php-db';
$db_user = 'root';
$db_password = 'root';
$db_name = 'MahasiswaCRUD';

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

// Membuat tabel berita secara otomatis jika belum ada
$createTableQuery = "CREATE TABLE IF NOT EXISTS berita (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(255) NOT NULL,
    gambar VARCHAR(255) NOT NULL,
    isi TEXT NOT NULL,
    penulis VARCHAR(100) NOT NULL,
    tanggal DATE NOT NULL
)";
mysqli_query($conn, $createTableQuery);
?>
