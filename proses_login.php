<?php
session_start();
include "koneksi.php";

$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email'");

if (!$query) {
    die("Query error: " . mysqli_error($koneksi));
}

if (mysqli_num_rows($query) > 0) {
    $data = mysqli_fetch_assoc($query);

    //md5 diganti dengan password_verify agar bisa cocok dengan password hash
    if (password_verify($password, $data['password'])) {
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['jurusan'] = $data['jurusan'];
        $_SESSION['status'] = "login";
        
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Password salah! <a href='login.php'>Kembali</a>";
    }
} else {
    echo "Email tidak ditemukan! <a href='login.php'>Kembali</a>";
}
?>