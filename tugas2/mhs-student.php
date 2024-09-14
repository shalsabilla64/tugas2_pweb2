<?php 
    require_once "koneksi.php";

    $data = $student->tampilData();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Mahasiswa</title>
</head>

<?php require_once "mhs-navbar.php"?>

<body>
    <table class="table table-stripped">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Signature</th>
                <th scope="col">No. HP</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if(empty($data)) {
                echo "<tr>";
                    echo "<td colspan='11' style='text-align: center'>Belum ada data</td>";
                echo "</tr>";
            } else {
                $no = 1;
                foreach($data as $row) {
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['nim']; ?></td>
                <td><?= $row['name']; ?></td>
                <td><?= $row['address']; ?></td>
                <td><?= $row['signature']; ?></td>
                <td><?= $row['number_phone']; ?></td>
            </tr>
            <?php }
            } ?>
        </tbody>
    </table>
</body>

</html>