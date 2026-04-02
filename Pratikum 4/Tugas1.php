<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "userlogin";

$conn = new mysqli($host, $username, $password, $database);

if($conn ->connect_error)   {
    die("koneksi gagal: " . $conn ->connect_error);
} else {
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $Username = $_POST["Username"];
        $Email = $_POST["Email"];
        $Password = $_POST["Password"];

        $sql="INSERT INTO data_akun (Username,Email,Password) VALUES (?,?,?)";
        $stmt = $conn -> prepare($sql); 
        $stmt -> bind_param("sss",$Username,$Email,$Password);

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