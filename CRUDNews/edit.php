<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Berita</title>
</head>
<body>
    <!-- Navigasi -->
    <p>
        <b>Portal Berita</b> &nbsp;&nbsp;
        <a href="index.php">Home</a> &nbsp;&nbsp;
        <a href="tambah.php">Input Berita</a>
    </p>
    <hr/>

    <h2>Edit Berita</h2>
    <a href="index.php">KEMBALI</a>
    <br/><br/>

    <?php
    include 'connection.php';
    $id = $_GET['id'];
    $data = mysqli_query($conn, "SELECT * FROM berita WHERE id='$id'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
    <form method="post" action="update.php" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
        <table cellpadding="5">
            <tr>
                <td>Judul Berita:</td>
            </tr>
            <tr>
                <td><input type="text" name="judul" value="<?php echo $d['judul']; ?>" size="60" required></td>
            </tr>
            <tr>
                <td>Gambar Saat Ini:</td>
            </tr>
            <tr>
                <td>
                    <?php if (!empty($d['gambar']) && file_exists('uploads/' . $d['gambar'])) { ?>
                        <img src="uploads/<?php echo $d['gambar']; ?>" width="200" alt="Gambar Saat Ini"><br/>
                    <?php } ?>
                    <input type="file" name="gambar">
                    <br/>
                    <small><i>*Biarkan kosong jika tidak ingin mengganti gambar</i></small>
                </td>
            </tr>
            <tr>
                <td>Isi Berita:</td>
            </tr>
            <tr>
                <td><textarea name="isi" rows="10" cols="60" required><?php echo $d['isi']; ?></textarea></td>
            </tr>
            <tr>
                <td>Penulis:</td>
            </tr>
            <tr>
                <td><input type="text" name="penulis" value="<?php echo $d['penulis']; ?>" size="60" required></td>
            </tr>
            <tr>
                <td>Tanggal:</td>
            </tr>
            <tr>
                <td><input type="date" name="tanggal" value="<?php echo $d['tanggal']; ?>" required></td>
            </tr>
            <tr>
                <td>
                    <br/>
                    <input type="submit" value="Update">
                </td>
            </tr>
        </table>
    </form>
    <?php
    }
    ?>
</body>
</html>
