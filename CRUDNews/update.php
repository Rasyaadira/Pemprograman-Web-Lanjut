<?php
include 'connection.php';

$id = $_POST['id'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$penulis = $_POST['penulis'];
$tanggal = $_POST['tanggal'];

if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
    $gambar = $_FILES['gambar']['name'];

    // Hapus gambar lama jika ada
    $queryLama = mysqli_query($conn, "SELECT gambar FROM berita WHERE id='$id'");
    $dataLama = mysqli_fetch_array($queryLama);
    if (!empty($dataLama['gambar']) && file_exists('uploads/' . $dataLama['gambar'])) {
        unlink('uploads/' . $dataLama['gambar']);
    }

    // Upload gambar baru
    move_uploaded_file($_FILES['gambar']['tmp_name'], 'uploads/' . $gambar);

    // Update beserta gambar
    mysqli_query($conn, "UPDATE berita SET judul='$judul', gambar='$gambar', isi='$isi', penulis='$penulis', tanggal='$tanggal' WHERE id='$id'");
} else {
    // Update tanpa mengganti gambar
    mysqli_query($conn, "UPDATE berita SET judul='$judul', isi='$isi', penulis='$penulis', tanggal='$tanggal' WHERE id='$id'");
}

header("location:index.php");
?>
