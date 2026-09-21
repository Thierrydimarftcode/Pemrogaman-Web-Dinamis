<?php
include 'koneksi.php';

$id = $_POST['id'];
$hari = $_POST['hari'];
$nama_mapel = $_POST['nama_mapel'];
$jam_mulai = $_POST['jam_mulai'];
$jam_selesai = $_POST['jam_selesai'];
$guru_pengampu = $_POST['guru_pengampu'];

$query = "UPDATE mata_pelajaran SET hari='$hari', nama_mapel='$nama_mapel', jam_mulai='$jam_mulai', jam_selesai='$jam_selesai', guru_pengampu='$guru_pengampu' WHERE id='$id'";
$proses = mysqli_query($koneksi, $query);

if($proses) {
    header("location:tampil_mapel.php");
} else {
    echo "Gagal mengupdate data: " . mysqli_error($koneksi);
}
?>
