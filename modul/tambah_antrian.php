<?php 
require __DIR__ . '/../lib/koneksi.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_pasien = $_POST['nama_pasien'];
    $nomor_antrian = $_POST['nomor_antrian'];
    $waktu_kedatangan = $_POST['waktu_kedatangan'];
    $sql = "INSERT INTO antrian (nama_pasien, nomor_antrian, waktu_kedatangan) VALUES (:nama_pasien, :nomor_antrian, :waktu_kedatangan)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nama_pasien', $nama_pasien);
    $stmt->bindParam(':nomor_antrian', $nomor_antrian);
    $stmt->bindParam(':waktu_kedatangan', $waktu_kedatangan);

    if ($stmt->execute()) {
        // echo "Data antrian berhasil ditambahkan!";
        echo "<script type='text/javascript'>alert('Data antrian berhasil ditambahkan!');
         window.location.href = '../index.php';
        </script>";
    } else {
        echo "Error: Gagal menambahkan data.";
    }

}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Antrian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        input[type="text"],
        input[type="number"],
        input[type="datetime-local"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }
        input[type="text"]:focus,
        input[type="number"]:focus,
        input[type="datetime-local"]:focus {
            border-color: #66afe9;
            outline: none;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #605678;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="fw-semibold font-monospace"><i>Tambah Antrian</i></h2>
    <form method="POST" action="modul/tambah_antrian.php">
        <div class="form-group">
            <label for="nama_pasien">Nama Pasien:</label>
            <input type="text" id="nama_pasien" name="nama_pasien" required style="border-color: black;">
        </div>
        <div class="form-group">
            <label for="nomor_antrian">Nomor Antrian:</label>
            <input type="number" id="nomor_antrian" name="nomor_antrian" required style="border-color: black;">
        </div>
        <div class="form-group">
            <label for="waktu_kedatangan">Waktu Kedatangan:</label>
            <input type="datetime-local" id="waktu_kedatangan" name="waktu_kedatangan" required style="border-color: black;">
        </div>
        <input type="submit" value="Tambah Antrian">
    </form>
</div>

</body>
</html>