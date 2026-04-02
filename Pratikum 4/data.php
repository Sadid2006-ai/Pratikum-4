<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "modul_webpro";

$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query ambil data
$sql = "SELECT * FROM mahasiswa";
$result = mysqli_query($conn, $sql);
?>