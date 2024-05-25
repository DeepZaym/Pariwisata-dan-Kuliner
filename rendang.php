<?php
session_start();
include 'koneksi.php'; // file koneksi ke database

// Enable error reporting for debugging
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

if (isset($_POST['Submit']) && isset($_SESSION['IdPengguna'])) {
    // Mengamankan nilai sesi
    $IdPengguna = mysqli_real_escape_string($mysqli, $_SESSION['IdPengguna']);
    $IdBarang = 1;
    $alamat = mysqli_real_escape_string($mysqli, $_POST['alamat']);
    $qty = mysqli_real_escape_string($mysqli, $_POST['qty']);
    $custom = mysqli_real_escape_string($mysqli, $_POST['custom']);
    $harga_per_unit = 20000;
    $total = $qty * $harga_per_unit; // Menghitung total harga
    $pembayaran = mysqli_real_escape_string($mysqli, $_POST['pembayaran']);
    
    // Debugging: Print variable values
    echo "IdPengguna: $IdPengguna<br>";
    echo "IdBarang: $IdBarang<br>";
    echo "Alamat: $alamat<br>";
    echo "Quantity: $qty<br>";
    echo "Custom: $custom<br>";
    echo "Total: $total<br>";
    echo "Pembayaran: $pembayaran<br>";

    // Query untuk memasukkan data ke dalam tabel `order` menggunakan prepared statement
    $stmt = $mysqli->prepare("INSERT INTO `order` (IdPengguna, IdBarang, alamat, qty, custom, total, pembayaran, tanggal) VALUES (?, ?, ?, ?, ?, ?, ?, CURRENT_TIMESTAMP)");
    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars($mysqli->error));
    }

    $bind = $stmt->bind_param("iisiiis", $IdPengguna, $IdBarang, $alamat, $qty, $custom, $total, $pembayaran);
    if ($bind === false) {
        die('Bind failed: ' . htmlspecialchars($stmt->error));
    }

    $exec = $stmt->execute();
    if ($exec) {
        header("Location: kuliner.php");
        exit();
    } else {
        echo "Gagal menyimpan data: " . htmlspecialchars($stmt->error);
    }

    $stmt->close();
    $mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Transaksi Kuliner</title>
    <link rel="stylesheet" href="Model/dekororder.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script>
        function hitungTotal() {
            const hargaPerUnit = 20000;
            const qty = document.getElementById('qty').value;
            const total = hargaPerUnit * qty;
            document.getElementById('total').value = formatRupiah(total);
        }

        function formatRupiah(angka) {
            var number_string = angka.toString(),
                sisa = number_string.length % 3,
                rupiah = number_string.substr(0, sisa),
                ribuan = number_string.substr(sisa).match(/\d{3}/g);
                
            if (ribuan) {
                var separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
            
            return rupiah;
        }
    </script>
</head>
<body>
    <div class="wrapper">
        <h1>Input Transaksi Kuliner</h1>
        <form action="" method="POST">
            <div class="input-box">
                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" required>
                <i class='bx bxs-map'></i>
            </div>
            <div class="input-box">
                <label for="qty">Quantity:</label>
                <input type="number" id="qty" name="qty" required oninput="hitungTotal()">
                <i class='bx bxs-cart'></i>
            </div>
            <div class="input-box">
                <label for="custom">Custom:</label>
                <input type="text" id="custom" name="custom">
                <i class='bx bxs-donate-heart'></i>
            </div>
            <div class="input-box">
                <label for="total">Total Harga:</label>
                <input type="text" id="total" name="total" readonly>
                <i class='bx bxs-wallet'></i>
            </div>
            <div class="input-box">
                <label for="pembayaran">Metode Pembayaran:</label>
                <select id="pembayaran" name="pembayaran" required>
                    <option value="DANA">DANA</option>
                    <option value="OVO">OVO</option>
                    <option value="GOPAY">GOPAY</option>
                    <option value="SHOPEEPAY">SHOPEEPAY</option>
                    <option value="COD">COD</option>
                </select>
                <i class='bx bxs-credit-card'></i>
            </div>
            <input class="button" type="submit" name="Submit" value="Simpan">
        </form>
    </div>
</body>
</html>
