<?php 
    require_once "koneksi.php";

    $data = $student_classes->tampilData();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Mahasiswa</title>
</head>

<?php require_once "admin-navbar.php"?>

<body>
    <table class="table table-stripped">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Tahun Akademik</th>
                <th scope="col">ID Prodi</th>
                <th scope="col">Deleted At</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
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
                <td><?= $row['id']; ?></td>
                <td><?= $row['name']; ?></td>
                <td><?= $row['academic_year']; ?></td>
                <td><?= $row['study_program_id']; ?></td>
                <td><?= $row['deleted_at']; ?></td>
                <td><?= $row['created_at']; ?></td>
                <td><?= $row['updated_at']; ?></td>
            </tr>
            <?php } } ?>
        </tbody>
    </table>
</body>

</html>