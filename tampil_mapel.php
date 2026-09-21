<?php
session_start();
if($_SESSION['status'] != "login"){
    header("location:login.php");
    exit();
}
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mata Pelajaran</title>
</head>
<body>
    <h2>Manajemen Jadwal Mata Pelajaran</h2>
    <?php include 'menu.php'; ?>

    <p><a href="tambah_mapel.php">+ Tambah Mata Pelajaran Baru</a></p>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Hari</th>
            <th>Nama Mata Pelajaran</th>
            <th>Jam</th>
            <th>Guru Pengampu</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM mata_pelajaran ORDER BY FIELD(hari, 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat'), jam_mulai ASC");
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['hari']; ?></td>
            <td><?php echo $d['nama_mapel']; ?></td>
            <td><?php echo $d['jam_mulai'] . " - " . $d['jam_selesai']; ?></td>
            <td><?php echo $d['guru_pengampu']; ?></td>
            <td>
                <a href="edit_mapel.php?id=<?php echo $d['id']; ?>">Edit</a> | 
                <a href="proses_hapus_mapel.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>