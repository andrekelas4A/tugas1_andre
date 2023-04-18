<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA PEGAWAI</title>
</head>
<body>
    <br>
    <h2>DATA PEGAWAI</h2>
    <br>
    <a href="form_inputpegawai.php">+ TAMBAH DATA PEGAWAI</a>
    <br>
    <br>
    <table border="2" cellspacing="3" cellpadding="5" width="650">
        <tr>
            <th>NAMA</th>
            <th>NIP</th>
            <th>NO HP</th>
            <th>EMAIL</th>
            <th>AKSI</th>
        </tr>
        <?php
        include 'koneksi.php';
        $data = mysqli_query($koneksi,"select*from pegawai");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['nip']; ?></td>
                <td><?php echo $d['noHp']; ?></td>
                <td><?php echo $d['email']; ?></td>
            <td>
                    <a href="edit.php?id=<?php echo $d['nama']; ?>">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d['nama']; ?>">HAPUS</a>
            </td>
        </tr>
            <?php
        }
    ?>
    </table>
</body>
</html>