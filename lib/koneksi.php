<?php 
$host = "localhost";
$username = "root";
$password = "";
$dbname = "rumahsakit";

try {
    //koneksi dengan pdo
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //set mode error pdo untuk tampilan exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Koneksi Mu Berhasil Nich!";
} catch (PDOException $e) {
    //menangkap error jika koneksi gagal
    echo "Koneksi gagal:" . $e->getMessage();
}
?>