<?php
// Memasukkan koneksi ke database
include 'db_connection.php';

// Pastikan request adalah POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Tentukan folder tempat menyimpan foto
    $targetDir = "assets/img/"; // Folder tujuan penyimpanan foto
    $targetFile = $targetDir . basename($_FILES["photo"]["name"]); // Nama file dengan path
    $uploadOk = 1; // Status upload (1 = berhasil, 0 = gagal)
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION)); // Mendapatkan ekstensi file

    // Validasi file gambar
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["photo"]["tmp_name"]); // Mengecek apakah file adalah gambar
        if ($check !== false) {
            // File adalah gambar
            $uploadOk = 1;
        } else {
            // Bukan gambar
            echo "File bukan gambar.";
            $uploadOk = 0;
        }
    }

    // Cek apakah file sudah ada
    if (file_exists($targetFile)) {
        echo "File sudah ada.";
        $uploadOk = 0;
    }

    // Validasi ukuran file (maksimal 5MB)
    if ($_FILES["photo"]["size"] > 5000000) {
        echo "Ukuran file terlalu besar.";
        $uploadOk = 0;
    }

    // Validasi jenis file (hanya gambar JPG, JPEG, PNG, dan GIF)
    if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif") {
        echo "Hanya file JPG, JPEG, PNG, dan GIF yang diizinkan.";
        $uploadOk = 0;
    }

    // Cek jika ada kesalahan upload
    if ($uploadOk == 0) {
        echo "Gagal mengunggah file.";
    } else {
        // Jika semuanya oke, upload file
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
            echo "File " . htmlspecialchars(basename($_FILES["photo"]["name"])) . " telah diunggah.";

            // Menyimpan path file ke database setelah berhasil upload
            $photoPath = mysqli_real_escape_string($conn, $targetFile); // Sanitasi path file
            $sql = "INSERT INTO photos (photo_path) VALUES (?)"; // Query untuk menyimpan path ke database

            // Menggunakan prepared statement untuk menghindari SQL Injection
            $stmt = mysqli_prepare($conn, $sql);
            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "s", $photoPath); // Menyisipkan path gambar ke dalam query
                if (mysqli_stmt_execute($stmt)) {
                    echo " Path gambar telah disimpan di database.";
                } else {
                    echo " Terjadi kesalahan saat menyimpan path ke database: " . mysqli_error($conn);
                }
                mysqli_stmt_close($stmt);
            } else {
                echo "Terjadi kesalahan dalam persiapan query: " . mysqli_error($conn);
            }
        } else {
            // Jika gagal upload
            echo "Terjadi kesalahan saat mengunggah file.";
        }
    }
}
?>
