<?php
$servername = "127.0.0.1"; // atau ganti localhost jika perlu
$username = "root";
$password = ""; // masukkan password MySQL Anda, biasanya kosong untuk Laragon
$dbname = ""; // ganti dengan nama database Anda

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
