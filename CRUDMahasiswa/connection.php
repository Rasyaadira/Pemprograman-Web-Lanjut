<?php
    $db_host = 'php-db';
    $db_user = 'root';
    $db_password = 'root';
    $db_name = 'MahasiswaCRUD';

    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    $table_name = 'Mahasiswa';

    if(mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }
?>