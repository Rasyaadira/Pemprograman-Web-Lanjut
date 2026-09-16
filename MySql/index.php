<?php
include 'Connection.php';

echo '<form method="POST"> 
        <input type="text" name="Nama" placeholder="Nama" /><br>
        <input type="text" name="NIM" placeholder="NIM" /><br>
        <input type="text" name="Tugas" placeholder="Tugas" /><br>
        <input type="text" name="UTS" placeholder="UTS" /><br>
        <input type="text" name="UAS" placeholder="UAS" /><br>
        <button type="submit" name="view_table" value="1">Submit </button><br><br>
        <button type="submit" name="clear" value="1"> Clear Table </button>
    </form>';

include 'Insert_into_table.php';

include 'RemoveTable.php';

include 'Show_table.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Nama Mahasiswa</title>
    <style>
        body {
            font-family: tahoma, arial;
            text-align: center;
        }
        table {
            margin: auto;
        }
        th, td {
            font-size: 13px;
            border: 1px solid #DEDEDE;
            padding: 3px 5px;
            color: #303030;
        }
        th {
            background-color: #CCCCCC;
            font-size: 12px;
            border-color: #B0B0B0;
        }
        .NilaiAkhir {
            background-color: red;
        }
        .right {
            text-align: right;
        }
    </style>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th> ID </th>
                <th> Nama </th>
                <th> NIM </th>
                <th> nilai akhir </th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($query) {
                while ($row = mysqli_fetch_array($query)) {
                    echo '
                    <tr>
                        <td>' . ($row['id'] ?? $row['NIM']) . '</td>
                        <td>' . $row['Nama'] . '</td>
                        <td>' . $row['NIM'] . '</td>
                        <td>' . $row['Tugas_akhir'] . '</td>
                    </tr>';
                }
            }
            ?>
            
            
        </tbody>
    </table>
</body>
</html>



<?php
?>
