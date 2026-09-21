<?php
session_start();
if($_SESSION['status'] != "login"){
    header("location:login.php");
    exit();
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
    
    <!-- Memanggil Menu Navigasi -->
    <?php include 'menu.php'; ?>

</body>
</html>
