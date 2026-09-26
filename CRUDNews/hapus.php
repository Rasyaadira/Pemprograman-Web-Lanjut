<?php
include 'connection.php';

$id = $_GET['id'];

// Cari file gambar dan hapus dari uploads/ jika ada
$query = mysqli_query($conn, "SELECT gambar FROM berita WHERE id='$id'");
$data = mysqli_fetch_array($query);
if (!empty($data['gambar']) && file_exists('uploads/' . $data['gambar'])) {
    unlink('uploads/' . $data['gambar']);
}

// Hapus data dari database
mysqli_query($conn, "DELETE FROM berita WHERE id='$id'");

header("location:index.php");
?>
