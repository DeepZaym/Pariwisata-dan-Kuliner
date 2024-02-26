<?php
//ngeaktifin session di php
session_start();
include 'koneksi.php';

$username = $_POST['USER'];
$password = $_POST['PASS'];

$login = mysqli_query($mysqli,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
    
    $data = mysqli_fetch_assoc($login);

    //cek user jika login sbg admin
    if($data['level']=="admin"){

        //session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        //alihkan ke halaman dasbor admin
        header("location:admin/1.php");

        //cek jika user login sebagai user
    }else if($data['level']=="user"){
    //buat session login dan username
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "user";
    // alihkan ke halaman dashboard user
    header("location:user/1.php");

    }else{

        //alihkan ke halaman login kembali
        header("location:index.php");
    }
    
}else{
    header("location:index.php?pesan=gagal");
}
?>