<?php
session_start();
// Cek apakah user sudah login
if ($_SESSION['status'] != "login") {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Siswa</title>
</head>
<body>
    <h2>Selamat Datang, <?php echo $_SESSION['nama']; ?>!</h2>
    <p>Kamu terdaftar di jurusan: <b><?php echo $_SESSION['jurusan']; ?></b></p>
    
    <a href="logout.php">Logout</a>
</body>
</html>