<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "modul_webpro";

$conn = new mysqli($host, $username, $password, $database);

if($conn ->connect_error)   {
    die("koneksi gagal: " . $conn ->connect_error);
} else {
    echo "Koneksi ke database berhasil";
}

$conn ->close();
?>