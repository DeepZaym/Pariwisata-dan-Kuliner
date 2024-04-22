<?php
    $nomor= 1;
    echo $nomor;
    include "../koneksi.php";
    $query_mysql = mysqli_query($mysqli, "SELECT * FROM pengguna") or die(mysqli_error());

        while ($data = mysqli_fetch_array($query_mysql)){
            ?>
    <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['username']; ?></td>
        <td><?php echo $data['password']; ?></td>
        <td>

        </td>
        
        <?php } ?>
    </tr>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Password</th>
            <th>Aksi</th>
        <tr>
    </table>
</body>
</html>