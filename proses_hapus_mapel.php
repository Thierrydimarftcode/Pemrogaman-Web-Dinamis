<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM mata_pelajaran WHERE id='$id'");

if($query) {
    header("location:tampil_mapel.php");
} else {
    echo "Gagal menghapus data: " . mysqli_error($koneksi);
}
?>
