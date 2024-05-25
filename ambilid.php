<?php
session_start();
include 'koneksi.php';

// Memeriksa apakah pengguna sudah login
if (!isset($_SESSION['IdPengguna'])) {
    header("Location: login.php");
    exit();
}

// Mengambil iduser dari sesi
$iduser = $_SESSION['IdPengguna'];

// Mengambil data pengguna dari database jika diperlukan
$sql = "SELECT username FROM pengguna WHERE IdPengguna='$iduser'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $username = $row['username'];
    echo "Selamat datang, $username!";
} else {
    echo "Data pengguna tidak ditemukan.";
}
?>

<a href="logout.php">Logout</a>
