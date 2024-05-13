<?php 
include '../koneksi.php';
$id = $_GET['IdPengguna'];
mysql_query("DELETE FROM pengguna WHERE IdPengguna='$id'")or die(mysql_error());
 
header("location:viwtableuser.php?pesan=hapus");

include 'koneksi.php';

$id = $_GET['IdPengguna'];

mysql_query("DELETE FROM pengguna WHERE IdPengguna='$id'")or die(mysql_error());

header("location:viwtableuser.php?pesan=hapus");
?>
