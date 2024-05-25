<?php
include_once("koneksi.php");

if(isset($_POST['Submit'])){
    $pembeli = mysqli_real_escape_string($mysqli, $_POST['pembeli']);
    $makanan = 'soto banjar'; // Menetapkan nilai default 'rendang' untuk $makanan
    $alamat = mysqli_real_escape_string($mysqli, $_POST['alamat']);
    $qty = mysqli_real_escape_string($mysqli, $_POST['qty']);
    $harga_per_unit = 20000;
    $total = $qty * $harga_per_unit; // Menghitung total harga
    $pembayaran = mysqli_real_escape_string($mysqli, $_POST['pembayaran']);
    
    // Menggunakan backtick (`) untuk mengelilingi nama tabel order
    $result = mysqli_query($mysqli, "INSERT INTO `order` (pembeli, makanan, alamat, qty, total, pembayaran, tanggal) VALUES('$pembeli', '$makanan', '$alamat', '$qty', '$total', '$pembayaran', CURRENT_TIMESTAMP)");
    
    if($result) {
        header("Location: kuliner.php");
        exit();
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($mysqli);
    }
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
                <label for="pembeli">Nama Pembeli:</label>
                <input type="text" id="pembeli" name="pembeli" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="hidden" id="makanan" name="makanan" value="soto banjar">
            </div>
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
