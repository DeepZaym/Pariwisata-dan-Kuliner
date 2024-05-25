<?php
// isi nama host, username mysql, dan password mysql
$databaseHost = 'localhost';
$databaseName = '10ukl';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli =mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

//$host = mysqli_connect("localhost","root","");

if($mysqli->connect_error) {
    echo "Koneksi database gagal.<br/>";
    die("error!"); 
}

?>