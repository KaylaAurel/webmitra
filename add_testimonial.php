<?php
include 'db_connection.php'; // Koneksi database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $role = $_POST['role'];
    $stars = $_POST['stars'];
    $message = $_POST['message'];

    $targetDir = "assets/img/"; // Folder tujuan penyimpanan gambar
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Validasi file gambar
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        $imagePath = $targetFile;

        // Simpan data testimoni ke database
        $sql = "INSERT INTO testimonials (name, role, stars, message, image_path) VALUES ('$name', '$role', '$stars', '$message', '$imagePath')";
        if (mysqli_query($conn, $sql)) {
            echo "Testimoni berhasil ditambahkan.";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Gagal mengunggah gambar.";
    }
}

mysqli_close($conn);
?>
