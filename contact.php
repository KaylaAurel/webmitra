<?php
ob_start(); // Start output buffering

// Koneksi ke database
$host = "localhost";
$dbname = "website";
$username = "root";
$password = "kaylaaurel20";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mengambil data dari form login
$user = $_POST['username'] ?? '';
$pass = $_POST['password'] ?? '';

// Cek username dan password
$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $user);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    // Verifikasi password
    if (password_verify($pass, $row['password'])) {
        // Jika login berhasil, alihkan ke index_admin.html
        header("Location: admin.php");
        exit(); // Pastikan untuk menghentikan eksekusi kode lebih lanjut
    } else {
        echo "Password salah.";
    }
} else {
    echo "Username tidak ditemukan.";
}

$conn->close();
ob_end_flush(); // End output buffering
?>

<!-- Form Login -->
<form method="POST" action="">
    <label for="username">Username:</label>
    <input type="text" name="username" required><br><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br><br>

    <input type="submit" value="Login">

    <!-- Link untuk mengganti password -->
    <p><a href="ganti_password.php">Ganti Password</a></p>
</form>
