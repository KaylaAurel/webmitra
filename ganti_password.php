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

// Ambil data dari form ganti password
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['new_password'])) {
    session_start(); // Memulai session untuk mengambil username dari sesi login jika diperlukan
    $user = $_SESSION['username']; // Pastikan username disimpan di session saat login

    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    // Ambil data user dari database
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    // Verifikasi password lama dan konfirmasi password baru
    if (password_verify($old_password, $row['password'])) {
        if ($new_password === $confirm_password) {
            // Hash password baru
            $new_password_hash = password_hash($new_password, PASSWORD_DEFAULT);

            // Update password di database
            $update_sql = "UPDATE users SET password = ? WHERE username = ?";
            $update_stmt = $conn->prepare($update_sql);
            $update_stmt->bind_param("ss", $new_password_hash, $user);
            $update_stmt->execute();

            if ($update_stmt->affected_rows > 0) {
                echo "Password berhasil diperbarui.";
            } else {
                echo "Terjadi kesalahan saat memperbarui password.";
            }
        } else {
            echo "Konfirmasi password baru tidak cocok.";
        }
    } else {
        echo "Password lama salah.";
    }
}

$conn->close();
ob_end_flush(); // End output buffering
?>

<!-- Form Ganti Password -->
<form method="POST" action="">
    <label for="old_password">Password Lama:</label>
    <input type="password" name="old_password" required><br><br>

    <label for="new_password">Password Baru:</label>
    <input type="password" name="new_password" required><br><br>

    <label for="confirm_password">Konfirmasi Password Baru:</label>
    <input type="password" name="confirm_password" required><br><br>

    <input type="submit" value="Ganti Password">
</form>
