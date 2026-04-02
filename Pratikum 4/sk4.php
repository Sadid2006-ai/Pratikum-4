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
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $jurusan = $_POST["jurusan"];

    $sql = "UPDATE mahasiswa SET nama=?, nim=?, jurusan=? WHERE id=?";
    $stmt = $conn->prepare(query: $sql);
    $stmt->bind_param("sssi", $nim, $nama, $jurusan, $id);

    if ($stmt->execute()) {
        header(header: "Location: index.php "); // Redirect ke halaman utama setelah update
        exit();
    } else {
        echo "Gagal memperbarui data: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>