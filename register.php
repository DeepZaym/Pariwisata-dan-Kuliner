<?php

 include "koneksi db/koneksi.php";
 session_start();

 if(isset($_POST["register"])) {
    header("location: dashboard.php");
 }
    if(isset($_POST["register"])){
        $nama = $_POST["nama"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $hash_password = hash("sha256", $password);
    
        try {
            $sql = "INSERT INTO user (nama, username, password,) VALUES ('$nama','$username', '$password')";
            
            if($mysqli->query($sql)) {
                echo "<script> alert('Daftar akun berhasil, silahkan login')</script>";
            }else{
                echo "<script> alert('Daftar akun gagal, silahkan coba lagi')</script>";
            }
        }catch (mysqli_sql_exception) {
                echo "<script> alert('Akun sudah digunakan, silahkan coba lagi ')</script>";
        }
        $mysqli->close();
        
    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>

 <div class="container">
    <h1>Register</h1>
    <form action="register.php" method="POST">
        <input type="text" placeholder="Nama" name="nama" required>
        <br>
        <input type="text" placeholder="Username" name="username" required>
        <br>
        <input type="password" placeholder="Password" name="password" required>
        <button type="submit" name="register">Daftar Sekarang</button required>
        <p class="message">Sudah punya akun? <a href="login.php">silahkan masuk</a></p>
    </form>
</body>
</html>