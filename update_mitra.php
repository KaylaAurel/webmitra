<?php
$host = "localhost";
$dbname = "website";
$username = "root";
$password = "kaylaaurel20";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];
$supplier_name = $_POST['supplier_name'];
$contact_person = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$sql = "UPDATE mitra SET supplier_name = ?, address = ?, email = ?, phone = ?, message = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssi", $supplier_name, $contact_person, $email, $phone, $message, $id);

if ($stmt->execute()) {
    echo "Data berhasil diupdate!";
    header("Location: admin.php");
} else {
    echo "Gagal mengupdate data: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
