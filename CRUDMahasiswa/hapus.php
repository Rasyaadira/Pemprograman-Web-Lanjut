<?php
// koneksi database
include 'connection.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];

// menghapus data dari database
mysqli_query($conn, "DELETE FROM Mahasiswa WHERE id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
