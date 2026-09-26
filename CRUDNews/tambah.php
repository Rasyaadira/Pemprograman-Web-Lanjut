<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Berita</title>
</head>
<body>
    <!-- Navigasi -->
    <p>
        <b>Portal Berita</b> &nbsp;&nbsp;
        <a href="index.php">Home</a> &nbsp;&nbsp;
        <a href="tambah.php">Input Berita</a>
    </p>
    <hr/>

    <h2>Input Berita</h2>

    <form method="post" action="tambah_aksi.php" enctype="multipart/form-data">
        <table cellpadding="5">
            <tr>
                <td>Judul Berita:</td>
            </tr>
            <tr>
                <td><input type="text" name="judul" size="60" required></td>
            </tr>
            <tr>
                <td>Gambar:</td>
            </tr>
            <tr>
                <td><input type="file" name="gambar" required></td>
            </tr>
            <tr>
                <td>Isi Berita:</td>
            </tr>
            <tr>
                <td><textarea name="isi" rows="10" cols="60" required></textarea></td>
            </tr>
            <tr>
                <td>Penulis:</td>
            </tr>
            <tr>
                <td><input type="text" name="penulis" size="60" required></td>
            </tr>
            <tr>
                <td>Tanggal:</td>
            </tr>
            <tr>
                <td><input type="date" name="tanggal" required></td>
            </tr>
            <tr>
                <td>
                    <br/>
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
