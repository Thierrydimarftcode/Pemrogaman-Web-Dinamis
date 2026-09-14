<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM INPUT DATA SISWA</title>
</head>
<body>
    <form action="proses_form.php" method="post">
    <table>
        <tr>
            <td>Nama Lengkap</td>
            <td><input type="text" name="nama" id="nama" placeholder="Masukkan Nama" required></td>
        </tr>

        <tr>
            <td>Email</td>
            <td><input type="email" name="email" id="email" placeholder="Masukkan Alamat Email" required></td>
        </tr>

        <tr>
            <td>Jurusan</td>
            <td>
                <select name="jurusan">
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Akutansi">Akuntansi</option>
                    <option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option>
                </select>
            </td>
        </tr>

        <tr>
            <td>
                <input type="submit" value="Register">
            </td>
        </tr>
    </table>
    </form>
</body>
</html>