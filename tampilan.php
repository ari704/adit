    <style>
        h3 {
            font-size: 40px;
            text-align: center;
        }
        table {
            width: 50%;
            border-collapse: collapse;
            margin: auto;
        }
       th {
            margin: auto;
        }
    </style>
    
    <h3>Data base</h3>
    <table border="1" class="kotak">
        <tr bgcolor="#ccc">
            <th>no</th>
            <th>nik</th>
            <th>nama</th>
            <th>alamat</th>
        </tr>

        <?php

        include "koneksi.php";

        $no = 1;
        $ambil = mysqli_query($conn, "SELECT * FROM siswa");
        while ($tampil = mysqli_fetch_array($ambil)) {
            echo "
   
    <tr>
        <td>$no</td>
        <td>$tampil[nik]</td>
        <td>$tampil[nama]</td>
        <td>$tampil[alamat]</td>
    </tr> ";
            $no++;
        }
        ?>
 </table>