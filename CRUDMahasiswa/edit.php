<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEMOGRAMAN WEB 3 - Edit Mahasiswa</title>
</head>
<body>
    <h2>BELAJAR PEMOGRAMAN WEB 3</h2>
    <br/>
    <a href="index.php">KEMBALI</a>
    <br/>
    <br/>
    <h3>EDIT DATA MAHASISWA</h3>

    <?php
    include 'connection.php';
    $id = $_GET['id'];
    $data = mysqli_query($conn, "SELECT * FROM Mahasiswa WHERE id='$id'");
    while($d = mysqli_fetch_array($data)){
    ?>
    <form method="post" action="update.php">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    <input type="text" name="Nama" value="<?php echo $d['Nama']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>NIM</td>
                <td><input type="number" name="NIM" value="<?php echo $d['NIM']; ?>" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="Alamat" value="<?php echo $d['Alamat']; ?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
    <?php
    }
    ?>
</body>
</html>
