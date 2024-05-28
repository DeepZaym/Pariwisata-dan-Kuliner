<?php
session_start();
include 'koneksi.php'; // file koneksi ke database

// Enable error reporting for debugging
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Pastikan pengguna sudah login
if (!isset($_SESSION['IdPengguna'])) {
    header("Location: login.php");
    exit();
}

// Mengambil IdPengguna dari sesi
$IdPengguna = $_SESSION['IdPengguna'];

// Mengambil data pemesanan dari database
$sql = "SELECT o.IdBarang, b.namaBarang, o.alamat, o.qty, o.custom, o.total, o.pembayaran, o.tanggal, o.qty * b.harga as total
        FROM `order` o 
        JOIN barang b ON o.IdBarang = b.IdBarang 
        WHERE o.IdPengguna = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("i", $IdPengguna);
$stmt->execute();
$result = $stmt->get_result();

// Menutup koneksi
$stmt->close();
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pemesanan</title>
    <link rel="stylesheet" href="Model/dekorriwayat.css">
    <?php include "navbar.html" ?>
</head>
<body>
    <header>
        <h3 class="judul">Riwayat Pemesanan <?php echo htmlspecialchars($_SESSION['username']); ?></h3>
    </header>
    <table>
        <thead>
            <tr>
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
                    <td><?php echo htmlspecialchars($row['namaBarang']); ?></td>
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
</body>
</html>
