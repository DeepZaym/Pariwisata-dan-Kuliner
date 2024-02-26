<?php
// isi nama host, username mysql, dan password mysql
$databaseHost = "localhost";
$databaseName = "kuliner";
$databaseUsername = "root";
$databasePassword = "";

$mysqli =mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

//$host = mysqli_connect("localhost","root","");

if($mysqli){
    echo "koneksi db berhasil.<br/>";
}else{
    echo "koneksi gagal.<br/>";
}

?>