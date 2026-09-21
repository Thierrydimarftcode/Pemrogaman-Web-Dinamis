<?php
session_start();
if($_SESSION['status'] != "login"){
    header("location:login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mata Pelajaran</title>
</head>
<body>
    <h2>Form Tambah Mata Pelajaran</h2>
    <?php include 'menu.php'; ?>

    <form action="proses_tambah_mapel.php" method="post">
        <table>
            <tr>
                <td>Hari</td>
                <td>
                    <select name="hari" required>
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                        <option value="Sabtu">Sabtu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nama Mata Pelajaran</td>
                <td><input type="text" name="nama_mapel" placeholder="Contoh: Pemrograman Web" required></td>
            </tr>
            <tr>
                <td>Jam Mulai</td>
                <td><input type="time" name="jam_mulai" required></td>
            </tr>
            <tr>
                <td>Jam Selesai</td>
                <td><input type="time" name="jam_selesai" required></td>
            </tr>
            <tr>
                <td>Guru Pengampu</td>
                <td><input type="text" name="guru_pengampu" placeholder="Nama guru dan gelar" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>