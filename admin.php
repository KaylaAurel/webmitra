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

// Mengambil data dari tabel mitra
$sql = "SELECT * FROM mitra";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Data Mitra</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
    /* CSS untuk background gambar */
/* CSS untuk background warna */
html, body {
    height: 100%;
    margin: 0;
    padding: 0;
}

body {
    background-color: #79A37E; /* Ganti dengan warna latar belakang yang diinginkan (misalnya hijau) */
    color: #ffffff;
}

.container {
    background-color: rgba(27, 120, 37, 0.8); /* Warna hijau tua dengan transparansi */
    padding: 20px;
    border-radius: 8px;
}

h2 {
    color: #ffffff;
}

/* Mengatur warna font pada tabel */
.table, .table th, .table td {
    color: #ffffff; /* Warna font putih untuk header dan sel tabel */
}

/* Pastikan header tabel juga berwarna putih */
.table th {
    color: #ffffff !important; /* Tambahkan !important untuk memastikan header tabel selalu putih */
}


    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Data Mitra</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Mitra</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Pesan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $phoneNumber = $row['phone'];
                        $message = "Selamat, Pendaftaran Mitra Sengon Anda Disetujui!";

                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['supplier_name'] . "</td>";
                        echo "<td>" . $row['address'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $phoneNumber . "</td>";
                        echo "<td>" . $row['message'] . "</td>";
                        echo "<td>
                                <a href='edit_mitra.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Edit</a>
                                <a href='delete_mitra.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm' onclick=\"return confirm('Apakah Anda yakin ingin menghapus data ini?')\">Hapus</a>
                                <a href='https://wa.me/$phoneNumber?text=" . urlencode($message) . "' target='_blank' class='btn btn-success btn-sm'>Setujui</a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>Tidak ada data mitra.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
$conn->close();
?>
