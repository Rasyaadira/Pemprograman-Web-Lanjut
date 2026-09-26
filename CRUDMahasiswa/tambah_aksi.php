<?php
include 'connection.php';

$nama = $_POST['Nama'];
$nim = $_POST['NIM'];
$alamat = $_POST['Alamat'];

mysqli_query($conn, "INSERT INTO Mahasiswa (NIM, Nama, Alamat) VALUES ('$nim', '$nama', '$alamat')");

header("location:index.php");
?>
