<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table order</title>
<style>

.body{
  height: 20cm;
  background: linear-gradient(#5F8670, #4F6F52)
}

.nav {
    position: absolute;
    top: 0;
    left: 0;
    margin: 0;
    padding: 0;
    height: 80px;
    width: 200%;
    text-decoration: none;

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
    border-bottom: 5px solid black;
    transition: all .3s ease;

}

.tombol li a {
    text-decoration: none;
    color: #fff;
    text-align: center;
    position: center;
}

    /* Style barisan ganjil */
.table {
  margin-top: 3cm;
  width:100%;
  position: relative;
  justify-content: center;
  border-collapse: collapse;
}
/* Style barisan ganjil */
tr:nth-child(odd) {
  background-color: #B80000 ;
  color : white;
  text-align: center;
}

/* Style barisan genap */
tr:nth-child(even) {
  background-color: #820300;
  color: white;
  text-align: center;
}

/* Style judul tabel */
th {
  background-color: #FF9800;
  color:  white;
  font-weight: bold;
  padding: 8px;
  text-align: center;
}

/* Style the table data cells */
td {
  padding: 8px;
}

th, td {
  border: 5px solid white; /* Memberikan border pada sel tabel */
    padding: 8px; /* Menambahkan padding pada sel tabel */
    text-align: center; /* Mengatur teks di dalam sel tabel menjadi kiri */
}

/* Style the edit and delete links */
.edit-link,
.delete-link {
  color: ;
  text-decoration: none;
  margin-right: 5px;
}

.edit-link:hover,
.delete-link:hover {
  text-decoration: underline;
  cursor: pointer;
}

.add {
  width: 340px;
    height: 45px;
    background: white;
    border: none;
    outline: none;
    border-radius: 50px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color: #333;
    font-weight: 600;
}

</style>
</head>
<body class="body">
        <div class="nav">
            <ul class="tombol">
                <li> <a href="tableorder.php">orders</a></li>
                <li> <a href="Kuliner.php">Kuliner</a></li>
                <li> <a href="Profil.php">Profil</a></li>
                <li> <a href="Login.php">Login</a></li>
                <li> <a href="register.php">Register</a></li>
        </div>

<table border="1" class="table" >
        <tr>
            <th>No</th>
            <th>Pembeli</th>
            <th>Makanan</th>
            <th>Alamat</th>
            <th>Qty</th>
            <th>Total Harga</th>
            <th>Metode Pembayaran</th>
            <th>Tanggal</th>
        <tr>

        <?php

    $nomor= 1;
    // echo $nomor;
    include "../koneksi.php";
    $query_mysql = mysqli_query($mysqli, "SELECT * FROM orders") or die(mysqli_error());

        while ($data = mysqli_fetch_array($query_mysql)){
            ?>
    <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $data['pembeli']; ?></td>
        <td><?php echo $data['makanan']; ?></td>
        <td><?php echo $data['alamat']; ?></td>
        <td><?php echo $data['qty']; ?></td>
        <td><?php echo $data['total']; ?></td>
        <td><?php echo $data['pembayaran']; ?></td>  
        <td><?php echo $data['tanggal']; ?></td>            
        <td class="aksi">
         <a href='delete.php?id=<?php echo $data["idorder"];?>'>Hapus</a>
         <a href='edit.php?id=<?php echo $data['idorder'];?>'>Edit</a>

        </td>
        
        <?php } ?>
    </tr>
    </table>
</body>
</html>
