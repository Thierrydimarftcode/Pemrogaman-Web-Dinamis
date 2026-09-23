<?php
session_start();
include "koneksi.php";

$email = $_POST['email'];
$password = $_POST['password'];
$password = md5($password);

$query = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email'");

if (!$query) {
    die("Query error: " . mysqli_error($koneksi));
}

if (mysqli_num_rows($query) > 0) {
    $data = mysqli_fetch_assoc($query);

     // CEK DATA YANG DIBACA DARI DATABASE 
    if (!isset($data['password'])) { 
        echo "<h3>Kolom password tidak ditemukan.</h3>"; 
        echo "<pre>"; 
        print_r($data); 
        echo "</pre>"; 
        exit(); 
    } 
 
    if ($password == $data['password']) { 
 
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
