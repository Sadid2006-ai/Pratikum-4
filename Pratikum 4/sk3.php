<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "modul_webpro";

$conn = mysqli_connect(hostname:$host,username: $username, password:$password,database:$database);
if($conn->connect_error){
    die("Koneksi Gagal : ". $conn->connect_error);
}

$sql = "SELECT * FROM mahasiswa";
$result = $conn->query(query:$sql);    

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo"<tr>
                <td>{$row['id']}</tr>
                <td>{$row['nama']}</tr>
                <td>{$row['nim']}</tr>
                <td>{$row['jurusan']}</tr>
            </tr>";
    }
}else{
    echo "<tr><td colspan-'4'>Tidak ada data</td></tr>";
}

$conn->close(); 
?>