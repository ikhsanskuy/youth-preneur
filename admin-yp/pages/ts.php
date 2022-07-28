<?php
session_start();
include "../../koneksi.php";

if (!isset($_SESSION['username'])) {
    echo "<script>alert('Log in dulu ya');
        location.href= '../'
        </script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<?php
require('include/header.php')
?>
<?php
require('include/navbar.php')
?>

<body>
    <div class="table-responsive jumbotron">
        <h2>Data pendaftar Talkshow</h2>
        <a href="excel/webinar_excel.php" class="btn btn-success">Report Excel</a>
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
                    <td scope="col" width="50px" style="font-size: 22px;"><i class="fa fa-tools"></i></td>
                </tr>
            </thead>
            <?php

            $no = 1;
            $tampil = mysqli_query($conn, "select * from ts");
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
                        <td>
                            <a class="btn-danger" onclick="return confirm('Apakah file ingin dihapus?')" href="../config/hapus_ts.php?id=<?php echo $data['id']; ?> "><i class="fa fa-trash" style="padding: 3px; border-radius:30%;"></i></a>
                        </td>
                    </tr>
                </tbody>
            <?php
            }
            ?>
        </table>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script>
        AOS.init();

        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>