<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "modul_webpro";

$conn = new mysqli($host, $username, $password, $database);

if($conn ->connect_error)   {
    die("koneksi gagal: " . $conn ->connect_error);
} else {
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nama = $_POST["nama"];
        $nim = $_POST["nim"];
        $jurusan = $_POST["jurusan"];

        $sql="INSERT INTO mahasiswa (nama,nim,jurusan) VALUES (?,?,?)";
        $stmt = $conn -> prepare($sql); 
        $stmt -> bind_param("sss",$nama,$nim,$jurusan);

        if($stmt -> execute()){
            header("Location: index.html");
            exit();
    }else{
        echo "<p>Error:".$stmt->error. "<p>";
    }
    $stmt->close();
    }
}

$conn ->close();
?>