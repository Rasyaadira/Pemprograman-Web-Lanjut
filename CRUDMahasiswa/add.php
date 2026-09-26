<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Belajar PHP part 3 [CRUD]</h2>
    <br>
    <a href="index.php">KEMBALI</a>
    <br><br>
    <h3>Tambah Mahasiswa</h3>
    <form method="post" action="tambah_aksi.php">
        <table style="border: 2px;">
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="Nama" required></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td><input type="number" name="NIM" required></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="Alamat" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
        </table>
    </form>
</body>
</html>