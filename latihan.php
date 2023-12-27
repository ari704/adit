<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <table>
            <tr>
                <td>nik</td>
                <td><input type="number" name="nik"></td>
            </tr>

            <tr>
                <td>nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="simpan" name="proses"></td>
            </tr>
            </tr>
        </table>
    </form>
</body>
<?php
include "koneksi.php";

if (isset($_POST['proses'])) {
    mysqli_query($conn, "INSERT INTO  siswa set
 nik = '$_POST[nik]',
 nama = '$_POST[nama]',
 alamat = '$_POST[alamat]'");

    echo "data baru tersimpan";
}

?>

</html>