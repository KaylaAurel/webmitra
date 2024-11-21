<?php
include 'db_connection.php'; // Koneksi database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $targetDir = "assets/img/"; // Folder tujuan penyimpanan foto
    $targetFile = $targetDir . basename($_FILES["photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Validasi jenis file
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["photo"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File bukan gambar.";
            $uploadOk = 0;
        }
    }

    // Cek jika file sudah ada
    if (file_exists($targetFile)) {
        echo "File sudah ada.";
        $uploadOk = 0;
    }

    // Validasi ukuran file
    if ($_FILES["photo"]["size"] > 5000000) {
        echo "Ukuran file terlalu besar.";
        $uploadOk = 0;
    }

    // Hanya izinkan jenis file tertentu
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" &&
        $imageFileType != "gif"
    ) {
        echo "Hanya file JPG, JPEG, PNG, dan GIF yang diizinkan.";
        $uploadOk = 0;
    }

    // Cek jika $uploadOk adalah 0 karena error
    if ($uploadOk == 0) {
        echo "Gagal mengunggah file.";
    } else {
        // Jika semuanya OK, unggah file
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
            echo "File " . htmlspecialchars(basename($_FILES["photo"]["name"])) . " telah diunggah.";
        } else {
            echo "Terjadi kesalahan saat mengunggah file.";
        }
    }
}
?>
