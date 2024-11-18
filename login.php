<?php
session_start();
include 'lib/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    // cari pengguna dari email
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    // Jika pengguna ditemukan, simpan ke session dan arahkan ke halaman utama
    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username']; // Tambahkan session username
        header("Location: index.php");
        exit();
    } else {
        $error = "wah, kamu belum daftar akun nih!";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    .login {
        min-height: 100vh;
    }

    .bg-image {
        background-image: url('https://img.freepik.com/free-vector/cloud-computing-service-web-hosting-synchronised-information-online-storage-backup-technology-internet-server-cloud-data-center-design-element_335657-2638.jpg?t=st=1731508977~exp=1731512577~hmac=1485f72b070db25308dcba47025a5655f472dbb6a1f5f0f49f7b3b70e2546e27&w=740');
        background-size: cover;
        background-position: center;
    }

    .login-heading {
        font-weight: 300;
    }

    .btn-login {
        font-size: 0.9rem;
        letter-spacing: 0.05rem;
        padding: 0.75rem 1rem;
    }
    </style>
</head>
<body>
<div class="container ps-md-0 mt-5 mb-5">
        <div class="row g-0">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image rounded"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4 fw-semibold font-monospace" style="color:#605678;">Login here</h3>
                                <?php if (isset($error)) echo "<p>$error</p>"; ?>

                                <form method="POST">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email :</label>
                                        <input type="email" class="form-control" id="email" placeholder="Masukan Email disini"
                                            name="email" style="border-color: black;">
                                    </div>
                                    <!-- <button type="submit" name="btn" class="btn btn-dark text-dark" style="background-color: #A79277;">Submit</button> -->
                                    <div class="d-grid gap-2">
                                    <button name="btn" class="btn btn-dark"  type="submit" style="background-color: #605678;">Masuk Sekarang</button>
                                    </div>
                                    <p class="mt-3">kamu gak punya akun? <a href="signup.php" class="text-dark">Daftar disini ya</a></p>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>