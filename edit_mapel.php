<?php
session_start();
if($_SESSION['status'] != "login"){
    header("location:login.php");
    exit();
}
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM mata_pelajaran WHERE id='$id'");
$d = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Mata Pelajaran</title>
</head>
<body>
    <h2>Form Edit Mata Pelajaran</h2>
    <?php include 'menu.php'; ?>

    <form action="proses_edit_mapel.php" method="post">
        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
        <table>
            <tr>
                <td>Hari</td>
                <td>
                    <select name="hari" required>
                        <option value="Senin" <?php if($d['hari'] == 'Senin') echo 'selected'; ?>>Senin</option>
                        <option value="Selasa" <?php if($d['hari'] == 'Selasa') echo 'selected'; ?>>Selasa</option>
                        <option value="Rabu" <?php if($d['hari'] == 'Rabu') echo 'selected'; ?>>Rabu</option>
                        <option value="Kamis" <?php if($d['hari'] == 'Kamis') echo 'selected'; ?>>Kamis</option>
                        <option value="Jumat" <?php if($d['hari'] == 'Jumat') echo 'selected'; ?>>Jumat</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nama Mata Pelajaran</td>
                <td><input type="text" name="nama_mapel" value="<?php echo $d['nama_mapel']; ?>" required></td>
            </tr>
            <tr>
                <td>Jam Mulai</td>
                <td><input type="time" name="jam_mulai" value="<?php echo $d['jam_mulai']; ?>" required></td>
            </tr>
            <tr>
                <td>Jam Selesai</td>
                <td><input type="time" name="jam_selesai" value="<?php echo $d['jam_selesai']; ?>" required></td>
            </tr>
            <tr>
                <td>Guru Pengampu</td>
                <td><input type="text" name="guru_pengampu" value="<?php echo $d['guru_pengampu']; ?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
