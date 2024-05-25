<?php
// Memeriksa apakah pengguna sudah login
if (isset($_SESSION['Idpengguna'])) {
    // Mengamankan nilai sesi
$IdPengguna = mysqli_real_escape_string($conn, $_SESSION['Idpengguna']);
$IdBarang = 1;
// Mengambil data pengguna dari database
$sql = "INSERT INTO `order`(IdPengguna, IdBarang) VALUES ('$IdPengguna', '$IdBarang')";
$result = mysqli_query($mysqli, "INSERT INTO `order`(IdPengguna, IdBarang) VALUES('$IdPengguna', '$IdBarang')");
    
    if($result) {
        header("Location: kuliner.php");
        exit();
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($mysqli);
    }}
?>