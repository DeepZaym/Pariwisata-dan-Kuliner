
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table User</title>
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

.table {
  margin-top: 3cm;
  width:100%;
  position: relative;
  justify-content: center;
  border-collapse: collapse;
}
/* Style barisan ganjil */
tr:nth-child(odd) {
  background-color: #FFC96F ;
  color : #0A6847;
  text-align: center;
}

/* Style barisan genap */
tr:nth-child(even) {
  background-color: #FFE8C8;
  color: #0A6847;
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
  background-color: #FF9800;
  border-radius: 15px;
  color: black;
}

.back {
    background-color: #FF9800;
    border-radius: 15px;
    color: black;
    margin-right: 20px;
}

.aksi .hapus {
  color: crimson;
}

.aksi .edit {
  color: #5F0F40;
}


.navadd ul li {
    list-style: none;
    display: inline-block;
    color:rgb(0, 0, 0);
    font-family: 'releway', sans-serif;
    padding: 15px 15px;
    font-weight: 500px;
    text-align: center;
}

.navadd ul li:hover {
    border-bottom: 3px solid black;
    transition: all.3s ease;
}

.tomboladd li a {
    text-decoration: none;
    color: #fff;
    text-align: center;
    position: center;
}
</style>
</head>
<body class="body">
        <div class="nav">
            <ul class="tombol">
                <li class="back"><a href="index.php">Back</a></li>
                <li class="back"> <a href="tableorder.php">orders</a></li>
        </div>

    <table border="1" class="table" >
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Password</th>
            <th>Role</th>
            <th>Aksi</th>
        <tr>

        <?php

    $nomor= 1;
    // echo $nomor;
    include "koneksi.php";
    $query_mysql = mysqli_query($mysqli, "SELECT * FROM pengguna") or die(mysqli_error());

        while ($data = mysqli_fetch_array($query_mysql)){
            ?>
    <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['username']; ?></td>
        <td><?php echo $data['password']; ?></td>
        <td><?php echo $data['role']; ?></td>        
        <td class="aksi">
         <a class="hapus" href='admin/delete.php?id=<?php echo $data["IdPengguna"];?>'>Hapus</a>
         <a class="edit" href='admin/edit.php?id=<?php echo $data['IdPengguna'];?>'>Edit</a>

        </td>
        
        <?php } ?>
    </tr>
    </table>
    <div class="navadd">
            <ul class="tomboladd">
                <li class="add"><a href="admin/adddata.php" role="button">Tambah Data Disini</a></li>
        </div>
</body>
</html>
