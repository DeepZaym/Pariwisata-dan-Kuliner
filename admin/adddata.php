<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Dataaa</title>
    <link rel="stylesheet" href="../Model/dekorRegister.css"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
<body>
 <div class="wrapper">
 <div class="img" style="background-image: url(Gambar/Meee.jpg);"></div>
    <form action="adddata.php" method="POST">
        <h1>Tambah Data</h1>
        <div class="input-box">
        <input type="text" placeholder="Nama" name="nama" required>
            <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
        <input type="text" placeholder="Username" name="username" required>
        <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
        <input type="password" placeholder="Password" name="password" required>
            <i class='bx bxs-lock' ></i>
        </div>
<div class="input-box">
                <select id="role" name="role" required>
                    <option value="admin">ADMIN</option>
                    <option value="user">USER</option>
                </select>
</div>
          
            <input class="button" type="submit" name="Submit">
 </div>   
</body>
</html>

<?php
include_once("../koneksi.php");
if(isset($_POST['Submit'])){
    $nama= $_POST['nama'];
    $username= $_POST['username'];
    $password= $_POST['password'];
    $role= mysqli_real_escape_string($mysqli, $_POST['role']);

    
    $result = mysqli_query($mysqli,
    "INSERT INTO pengguna(nama,password,role,username) VALUES('$nama','$password','$role','$username')");
    
}
?>