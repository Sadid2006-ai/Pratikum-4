<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "modul_webpro";

$conn = new mysqli(hostname: $host, username: $username, password: $password, database: $database);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];

    $sql = "DELETE FROM mahasiswa WHERE id=?";
    $stmt = $conn->prepare(query: $sql);
    $stmt->bind_param( "i", $id);

    if ($stmt->execute()) {
        header(header: "Location: index.php"); // Redirect ke halaman utama
        exit();
    } else {
        echo "Gagal menghapus data: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>