<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Berita - Home</title>
</head>
<body>
    <!-- Navigasi -->
    <p align="center">
        <b>Portal Berita</b> &nbsp;|&nbsp;
        <a href="index.php">Home</a> &nbsp;|&nbsp;
        <a href="tambah.php">Input Berita</a>
    </p>
    <hr/>

    <h2 align="center">DAFTAR BERITA</h2>

    <?php
    include 'connection.php';
    $data = mysqli_query($conn, "SELECT * FROM berita ORDER BY id DESC");
    $count = mysqli_num_rows($data);

    if ($count == 0) {
    ?>
        <p align="center">Belum ada berita. Silakan <a href="tambah.php">Input Berita Baru</a>.</p>
    <?php
    } else {
        while ($d = mysqli_fetch_array($data)) {
    ?>
        <!-- Tabel Center Besar Berita -->
        <table align="center" width="700" border="1" cellpadding="10" cellspacing="0">
            <!-- Headbanner Gambar -->
            <tr>
                <td align="center">
                    <?php if (!empty($d['gambar']) && file_exists('uploads/' . $d['gambar'])) { ?>
                        <img src="uploads/<?php echo $d['gambar']; ?>" width="100%" height="250" alt="Headbanner Berita">
                    <?php } else { ?>
                        <p>[ Tidak ada gambar / <?php echo $d['gambar']; ?> ]</p>
                    <?php } ?>
                </td>
            </tr>
            <!-- Judul, Penulis & Tanggal -->
            <tr>
                <td>
                    <h2><?php echo $d['judul']; ?></h2>
                    <small><b>Penulis:</b> <?php echo $d['penulis']; ?> &nbsp;|&nbsp; <b>Tanggal:</b> <?php echo $d['tanggal']; ?></small>
                </td>
            </tr>
            <!-- Isi Berita / Deskripsi -->
            <tr>
                <td>
                    <p><?php echo nl2br($d['isi']); ?></p>
                </td>
            </tr>
            <!-- Tombol Opsi CRUD -->
            <tr>
                <td>
                    <b>Opsi:</b> &nbsp;
                    <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a> &nbsp;|&nbsp;
                    <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                </td>
            </tr>
        </table>
        <br/>
    <?php
        }
    }
    ?>
</body>
</html>
