<?php
include_once("koneksi.php");
if(isset($_POST['Submit'])){
    $nama= $_POST['nama'];
    $username= $_POST['username'];
    $password= $_POST['password'];
    $role= "user";

    
    $result = mysqli_query($mysqli,
    "INSERT INTO pengguna(nama,password,role,username) VALUES('$nama','$password','$role','$username')");
    header("location:Login.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="Model/dekorRegister.css"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    </head>
<body>
 <div class="wrapper">
 <div class="img" style="background-image: url(Gambar/Meee.jpg);"></div>
    <form action="register.php" method="POST">
        <h1>Register</h1>
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
        <!-- <select name="role">
                <option value="admin">admin</option>
                <option value="user">user</option>
                <option value="founder">founder</option>
            </select> -->
          <input type="submit" name="Submit" class="button">
            <a href="login.php">
        <button type="submit" name="register" class="button"<p  class="button">Sudah punya akun? <a href="login.php">silahkan masuk</a></p></button required>
            </a>
 </div>   
</body>
</html>