<?php
$db_host = 'php-db';
$db_user = 'root';
$db_password = 'root';
$db_name = 'Mahasiswa';

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

$table_name = 'mahasiswa';

if ($conn) {
    @mysqli_query($conn, "ALTER TABLE `$table_name` MODIFY `NIM` VARCHAR(30) NOT NULL");
}
?>