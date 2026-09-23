<?php
// Pemanggilan koneksi
include "koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$jurusan = $_POST['jurusan'];
$password = $_POST['password'];

// Enkripsi password
$password = md5($password);

$query = "INSERT INTO users (id, nama, email, jurusan, password) VALUES (NULL, '$nama', '$email', '$jurusan', '$password')";
$proses = mysqli_query($koneksi, $query);

if ($proses) {
    echo "Registrasi berhasil! <a href='login.php'>Silakan Login</a>";
} else {
    echo "Data gagal disimpan : " . mysqli_error($koneksi);
}
?>
