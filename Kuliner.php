<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style1.css">
    <title>Kuliner lain</title>
    <link rel="stylesheet" href="Model/stylekuliner.css">
    <?php include "navbar.html"?>
    <style>
        html {
    margin:0;
    padding:0;
    width:100%;

}

body {
    margin:0;
    padding:0;
    width:100%;
    height:100%;
    background-image: url(Gambar/oren.jpg);
    background-repeat: no-repeat;
    background-size: 100%;
    display: block;
}

.logo {
    float: left;
    margin-left: 46px;
    padding: 0px 38px;
    font-family: 'raleway', sans serif;
    font-size: 25px;
    font-weight: bold;

}

.logo a {
    text-decoration: none;
    color:aliceblue;
}

.nav {
    position: absolute;
    top: 0;
    left: 0;
    margin: 0;
    padding: 0;
    height: 80px;
    width: 100%;

}

.nav ul {
    list-style: none;
    cursor: pointer;
    float: left;
    margin-right: 155px;
}

.nav ul li {
    list-style: none;
    display: inline-block;
    color:rgb(0, 0, 0);
    font-family: 'releway', sans-serif;
    padding: 15px 15px;
    font-weight: 500px;
}

.nav ul li:hover {
    border-bottom: 3px solid black;
    transition: all .3s ease;

}

.header {
    text-align: center;
    position: absolute;
    top: 30%;
    left: 72%;
    transform: translate(-50%, -50%);

}

.header h1 {
    color: aliceblue;
    text-align: left;
    font-family: 'Noto Serif JP', sans-serif;
    font-size: 50px;

}

.header span {
    color: #77fe00;

}

.content-header {
    position: absolute;
    transform: translate(-50%, -50%);
    text-align: center;
    top: 55%;
    left: 73%;

}

.content-header p {
    color:aliceblue#fff;
    font-family: 'raleway', sans-serif;
    font-size: 16px;
    text-align: left;
    color: #fff690;

}
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
                        <a href="order.php?id=<?php echo $data['IdBarang'];?>" class="card-admin"> DISINI!!!!!</a>
                    </span>
                </div>
            </article>
        <?php } ?>
    </section>

</body>
</html>

