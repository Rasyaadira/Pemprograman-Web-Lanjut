<?php
// koneksi database
include 'connection.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['Nama'];
$nim = $_POST['NIM'];
$alamat = $_POST['Alamat'];

// update data ke database
mysqli_query($conn, "UPDATE Mahasiswa SET Nama='$nama', NIM='$nim', Alamat='$alamat' WHERE id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
