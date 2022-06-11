<?php
require 'function.php';
$fruit = query("SELECT * FROM fruit"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h1>Database buah</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Ket1</th>
            <th>Ket2</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($fruit as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">ubah</a> | 
                <a href="">hapus</a>
            </td>
            <td><img src="img/<?= $row["image"]; ?>" width="100"></td>
            <td><?= $row["name"]; ?></td>
            <td><?= $row["price"]; ?></td>
            <td><?= $row["desc_top"]; ?></td>
            <td><?= $row["desc_btm"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

    </table>

</body>
</html>