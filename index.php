<?php 
session_start();
date_default_timezone_set('Asia/Jakarta');
include "lib/koneksi.php";

if (!isset($_SESSION['user_id'])) {
    include "login.php";
} else {
    $sqlUser = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $sqlUser ->execute([$_SESSION['user_id']]);
    $resultUser = $sqlUser ->fetch();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Care.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php 
  include "modul/nav.php";
  $page = isset($_GET['page']) ? $_GET['page'] : null;
  if ($page) {
      if ($page == 'keluar') {
          include "modul/logout.php";
      }
      
      if ($page == 'antrian') {
            include "modul/tambah_antrian.php";
        }

        if ($page == 'daftar') {
            include "modul/daftar_antrian.php";
        }

        if ($page=='hapus') {
            include "modul/hapus_antrian.php";
         } 
        
      
  } else {
      include "modul/default.php";
  }
?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>
</html>
<?php 
}
?>