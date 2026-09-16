<?php
$sql = "SELECT *, ((Tugas + UTS + UAS)/3) AS Tugas_akhir FROM mahasiswa";
$query = mysqli_query($conn, $sql);
?>