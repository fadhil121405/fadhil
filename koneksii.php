<?php
$servername = "localhost";
$username = "userRPL";
$password = "";
$database= "dbmusic";

$koneksi = mysqli_connect($servername, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
