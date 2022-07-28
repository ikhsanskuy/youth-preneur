<?php
// konvert file ke excel
header("Content-type:application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Pendaftar Seminar.xls");
?>

<?php
include "../../../koneksi.php";
?>

<h3>Data pendaftar Seminar</h3>

<table id="data-example" class="table table-striped table-bordered table-hover" style="width:100%">
    <thead>
        <tr>
            <th scope="col" width="25px">No</th>
            <th scope="col">Nama</th>
            <th scope="col" width="65px">Email</th>
            <th scope="col">No telepon</th>
            <th scope="col">Gender</th>
            <th scope="col">Instansi</th>
            <th scope="col" width="130px">Timestamp</th>
        </tr>
    </thead>
    <?php

    $no = 1;
    $tampil = mysqli_query($conn, "SELECT * FROM `sm`");
    while ($data = mysqli_fetch_array($tampil)) {

    ?>
        <tbody>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['notelp']; ?></td>
                <td><?php echo $data['gender']; ?></td>
                <td><?php echo $data['instansi']; ?></td>
                <td><?php echo $data['timestamp']; ?></td>
            </tr>
        </tbody>
    <?php
    }
    ?>
</table>