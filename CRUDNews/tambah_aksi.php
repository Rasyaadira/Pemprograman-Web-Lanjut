<?php
include 'connection.php';

$judul = $_POST['judul'];
$isi = $_POST['isi'];
$penulis = $_POST['penulis'];
$tanggal = $_POST['tanggal'];

$gambar = '';
if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
    $gambar = $_FILES['gambar']['name'];
    move_uploaded_file($_FILES['gambar']['tmp_name'], 'uploads/' . $gambar);
} elseif (isset($_POST['gambar'])) {
    $gambar = $_POST['gambar'];
}

mysqli_query($conn, "INSERT INTO berita (judul, gambar, isi, penulis, tanggal) VALUES ('$judul', '$gambar', '$isi', '$penulis', '$tanggal')");

header("location:index.php");
?>
