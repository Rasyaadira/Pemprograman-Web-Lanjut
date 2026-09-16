<?php
if (isset($_POST['clear'])) {
    $sql = "TRUNCATE TABLE `$table_name`";
    $query = mysqli_query($conn, $sql);
}
?>