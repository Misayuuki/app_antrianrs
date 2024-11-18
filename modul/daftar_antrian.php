<?php 
include 'lib/koneksi.php';

// menyiapkan query untuk mengambil data antrian
$sql = "SELECT * FROM antrian";
$stmt = $conn->prepare($sql);
$stmt->execute(); //eksekusi query

//menampilkan hasil query
echo "<h2>Daftar Antrian Pasien</h2>";
echo "<table border='1'>
<tr> 
<th>No</th>
<th>Nama Pasien</th>
<th>Nomor Antrian</th>
<th>Waktu Kedatangan</th>
<th>Status</th>
<th>Aksi</th>
</tr>";

//ambil semua data dari query
$antrian = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($antrian) > 0) {
    $no = 1;
    foreach ($antrian as $row) {
        echo "<tr> 
        <td>".$no."</td>
        <td>".$row["nama_pasien"]."</td>
        <td>".$row["nomor_antrian"]."</td>
        <td>".$row["waktu_kedatangan"]."</td>
        <td>".$row["status"]."</td>
        <td><a href='modul/ubah_status.php?id=".$row["id"]."'>Ubah Status</a> | <a href='modul/hapus_antrian.php?id=".$row["id"]."'>Hapus</a></td>
  
        </tr>";
        $no++;
    }
    echo "</table>";
} else {
    echo "Tidak ada antrian";
}

$conn = null; //nutup koneksi pdo


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Antrian Pasien</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
           
         
        }
        h2 {
            text-align: center;
            color: #333;
            font-weight: bold;
            font-style: italic;
        }
        table {
            border-collapse: collapse;
            width: 90%;
            margin: 20px auto;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            border: black solid 1px;
            overflow: hidden;
            
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border: black solid 1px;
        }
        th {
            background-color: #4A628A;
            color: white;
            border: black solid 1px;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e9f5e9;
        }
        td a {
            text-decoration: none;
            color: #605678;
            font-weight: bold;
        }
        td a:hover {
            color: #3a9a40;
        }
        td:last-child {
            text-align: center;
        }
        .no-data {
            text-align: center;
            color: #888;
            margin-top: 20px;
        }
    </style>
</head>
<body>
  