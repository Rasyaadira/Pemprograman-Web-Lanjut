<?php
if (isset($_POST['view_table']) && isset(
    $_POST['Nama'],
    $_POST['NIM'],
    $_POST['Tugas'],
    $_POST['UTS'],
    $_POST['UAS']
)) {
    $Nama = $_POST['Nama'];
    $NIM = $_POST['NIM'];
    $Tugas = $_POST['Tugas'];
    $UTS = $_POST['UTS'];
    $UAS = $_POST['UAS'];

    $sql = "INSERT INTO `$table_name` (Nama, NIM, Tugas, UTS, UAS) VALUES 
            ('$Nama', '$NIM', '$Tugas', '$UTS', '$UAS')";

    $query = mysqli_query($conn, $sql);
}
?>