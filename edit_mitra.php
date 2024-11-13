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
$sql = "SELECT * FROM mitra WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mitra</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        /* Menambahkan warna background hijau */
        body {
            background-color: #79A37E; /* Warna hijau */
            color: #ffffff;
        }
        .container {
            background-color: #2E7D32; /* Warna hijau tua untuk kontras */
            padding: 20px;
            border-radius: 8px;
        }
        h2, label {
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Data Mitra</h2>
        <form action="update_mitra.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            <div class="mb-3">
                <label>Nama Mitra</label>
                <input type="text" name="supplier_name" class="form-control" value="<?php echo $data['supplier_name']; ?>" required>
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <input type="text" name="address" class="form-control" value="<?php echo $data['address']; ?>" required>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo $data['email']; ?>" required>
            </div>
            <div class="mb-3">
                <label>Telepon</label>
                <input type="text" name="phone" class="form-control" value="<?php echo $data['phone']; ?>" required>
            </div>
            <div class="mb-3">
                <label>Pesan</label>
                <textarea name="message" class="form-control" required><?php echo $data['message']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>

<?php
$stmt->close();
$conn->close();
?>
