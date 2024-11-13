<?php
$host = "localhost";
$dbname = "website";
$username = "root";
$password = "kaylaaurel20";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];
$sql = "DELETE FROM mitra WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo "Data berhasil dihapus!";
    header("Location: admin.php"); // Redirect kembali ke halaman admin
} else {
    echo "Gagal menghapus data: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
