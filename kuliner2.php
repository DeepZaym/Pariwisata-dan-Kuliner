<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Tarian</title>
    <link rel="stylesheet" href="Model/styleKuliner.css"> <!-- Link ke CSS kamu -->
    <style>
    </style>
</head>
<body>
    <section class="cards">
        <?php
            // isi nama host, username mysql, dan password mysql anda
            $databasehost = "localhost";
            $databasename = "10ukl";
            $databaseusername = "root";
            $databasepassword = "";

            // Membuat koneksi
            $mysqli = mysqli_connect($databasehost, $databaseusername, $databasepassword, $databasename);

            // Query untuk mengambil data tarian
            $result = mysqli_query($mysqli, "SELECT * FROM barang") or die(mysqli_error($mysqli));

            // Loop melalui hasil query
            while ($data = mysqli_fetch_array($result)) {
        ?>
            <article class="card">
                <div class="card-img hover"></div>
                <a href="#">
                    <div class="card-img-1" style="background-image: url('<?php echo $data['foto']; ?>');"></div>
                </a>

                <div class="card-info">
                    <span class="card-category"><?php echo $data['asal']; ?></span>
                    <h3 class="card-title">Kuliner <?php echo $data['NamaBarang']; ?></h3>
                    <span class="card-by">
                        Pesan <?php echo $data['NamaBarang']; ?> klik
                        <a href="event.php" class="card-admin"> DISINI!!!!!</a>
                    </span>
                </div>
            </article>
        <?php } ?>
    </section>
    <div class="back-button">
        <a href="tugas-sms-1.php" class="btn">Kembali</a>
    </div>
</body>
</html>
