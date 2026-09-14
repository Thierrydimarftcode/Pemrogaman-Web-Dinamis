<?php

include 'Koneksi.php';

$nama= $_POST['nama'];
$email= $_POST['email'];
$jurusan= $_POST['jurusan'];

$query = "INSERT INTO users (id, nama, email, jurusan) VALUES (NULL,'$nama','$email','$jurusan')";

$proses = mysqli_query ($koneksi,$query);

if($proses){
    echo "Data Berhasil Disimpan";
}
else {
    echo "Data Gagal Di Simpan :" . mysqli_error($koneksi);
}
?>