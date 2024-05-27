<?php
session_start();
include '../koneksi.php'; // path relatif ke koneksi.php dari folder admin

// Enable error reporting for debugging
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$query = "
SELECT pengguna.nama, barang.NamaBarang, barang.harga, order.qty, barang.harga*order.qty AS total 
FROM `order` 
JOIN pengguna ON pengguna.IdPengguna = order.IdPengguna
JOIN barang ON barang.IdBarang = order.IdBarang
WHERE order.IdPengguna = 1;

";

$result = $mysqli->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pesanan</title>
    <link rel="stylesheet" href="data_pesanan.css">
</head>
<body>
    <div class="container">
        <h1>Data Pesanan</h1>
        <table>
            <thead>
                <tr>
                    <th>ID Order</th>
                    <th>Username</th>
                    <th>Nama Barang</th>
                    <th>Alamat</th>
                    <th>Quantity</th>
                    <th>Custom</th>
                    <th>Total</th>
                    <th>Pembayaran</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['idorder']); ?></td>
                        <td><?php echo htmlspecialchars($mysqli['username']); ?></td>
                        <td><?php echo htmlspecialchars($mysqli['NamaBarang']); ?></td>
                        <td><?php echo htmlspecialchars($row['alamat']); ?></td>
                        <td><?php echo htmlspecialchars($row['qty']); ?></td>
                        <td><?php echo htmlspecialchars($row['custom']); ?></td>
                        <td><?php echo htmlspecialchars($row['total']); ?></td>
                        <td><?php echo htmlspecialchars($row['pembayaran']); ?></td>
                        <td><?php echo htmlspecialchars($row['tanggal']); ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
$mysqli->close();
?>
