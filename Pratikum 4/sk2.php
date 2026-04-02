<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "modul_webpro";

$conn = new mysqli($host, $username, $password, $database);

if($conn ->connect_error)   {
    die("koneksi gagal: " . $conn ->connect_error);
} else {
    $nim ="12345678";
    $nama = "Budi Santoso";
    $jurusan = "Teknik Informatika";

    $sql = "INSERT INTO mahasiswa (nama,nim,jurusan) VALUES(?,?,?)";
    $stmt = $conn ->prepare($sql);
    $stmt -> bind_param("sss", $nama,$nim,$jurusan);

    if($stmt->execute()){
        echo"Data berhasil ditambahkan";
    }else{
        echo $stmt->error;
    }
}

$conn ->close();
?>