<?php 
    include("../koneksi.php");

    if (!isset($_GET['id'])){
        header('Location: ../viwtableuser.php');
    }
    $id = $_GET['id'];

    $result = mysqli_query($mysqli, "DELETE FROM pengguna WHERE IdPengguna=$id");
    header("location:../viwtableuser.php?pesan=hapus");
    ?>