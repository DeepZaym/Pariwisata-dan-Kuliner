
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>


    /* Style barisan ganjil */
.table {
  width:100%;
}

/* Style barisan genap */
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

</style>
</head>
<body>
<?php include "../navbar.html" ?>
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
    include "../koneksi.php";
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
         <a href='delete.php?id=<?php echo $data["IdPengguna"];?>'>Hapus</a>
         <a href='edit.php?id=<?php echo $data['IdPengguna'];?>'>Edit</a>

        </td>
        
        <?php } ?>
    </tr>
    </table>
</body>
</html>
