<?php
// Konfigurasi database
$servername = "localhost";
$username = "root"; // Ganti jika menggunakan username lain
$password = "kaylaaurel20";     // Ganti jika ada password
$dbname = "website"; // Nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Jika berhasil, koneksi tetap aktif
?>
