<?php
// Koneksi ke database
$host = "localhost";
$dbname = "website"; // Ganti dengan nama database Anda
$username = "root"; // Ganti dengan username database Anda
$password = "kaylaaurel20"; // Ganti dengan password database Anda

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mengambil data dari form
$supplier_name = $_POST['supplier_name'];
$contact_person = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Menyimpan data ke dalam database
$sql = "INSERT INTO mitra (supplier_name, address, email, phone, message) 
        VALUES (?, ?, ?, ?, ?)";

// Menyiapkan statement
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $supplier_name, $contact_person, $email, $phone, $message);

if ($stmt->execute()) {
    echo "Pendaftaran berhasil! Terima kasih telah bergabung.";
} else {
    echo "Gagal mendaftar: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
