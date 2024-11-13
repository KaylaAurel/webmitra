<?php
// Koneksi ke database
$host = "localhost";
$dbname = "website";
$username = "root";
$password = "kaylaaurel20";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mengambil data dari form register
$new_user = $_POST['new_username'];
$new_pass = $_POST['new_password'];
$hashed_password = password_hash($new_pass, PASSWORD_DEFAULT);

// Menyimpan data admin baru
$sql = "INSERT INTO users (username, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $new_user, $hashed_password);

if ($stmt->execute()) {
    echo "Registrasi berhasil!";
} else {
    echo "Error: " . $stmt->error;
}

$conn->close();
?>
