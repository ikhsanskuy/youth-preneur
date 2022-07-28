<?php
session_start();
include "../../koneksi.php";

if (!isset($_SESSION['username'])) {
    echo "<script>alert('Kamu login dulu yaachh');
        location.href= '../'
        </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<body style="background-image: url(../../images/service-bg.png); background-color:#6144b9; background-size: 100%;background-repeat:no-repeat;height:100vh;">

    <?php
    require('include/header.php')
    ?>
    <?php
    require('include/navbar.php')
    ?>
    </br>
    <div class="table-responsive container">
        <h2 style="text-align:center; color:#ffffff">Welcome To Youth Preneur Admin Page</h2>
        </br>

        <div class="panel-body">
            <div class="row" style="margin-top: 180px;">


                <!-- webinar -->
                <div class="col-sm">
                    <div class="panel panel-primary text-center no-boder bg-color-green thick-green-border">
                        <div class="panel-body">
                            <i class="fa fa-headset fa-5x" style="color:var(--white)"></i>
                            <h3 style="color: white;">
                                <?php
                                include "../../koneksi.php";
                                $tampil = "SELECT * FROM `sm`";
                                $query = mysqli_query($conn, $tampil);
                                $count = mysqli_num_rows($query);
                                echo "$count";
                                ?>
                            </h3>
                        </div>
                        <div class="panel-footer back-footer-green" style="color: white;">
                            Data Pendaftar Seminar :
                            <br>
                            <a href="sm.php" class="btn btn-primary" role="button" aria-pressed="true">Detail</a>

                        </div>
                    </div>
                </div>


                <!-- workshop -->
                <div class="col-sm">
                    <div class="panel panel-primary text-center no-boder bg-color-green thick-green-border">
                        <div class="panel-body">
                            <i class="fa fa-building fa-5x" style="color:var(--white)"></i>
                            <h3 style="color: white;">
                                <?php
                                include "../../koneksi.php";
                                $tampil = "SELECT * FROM `ws`";
                                $query = mysqli_query($conn, $tampil);
                                $count = mysqli_num_rows($query);
                                echo "$count";
                                ?>
                            </h3>
                        </div>
                        <div class="panel-footer back-footer-green" style="color: white;">
                            Data Pendaftar Workshop :
                            <br>
                            <a href="ws.php" class="btn btn-primary" role="button" aria-pressed="true">Detail</a>
                        </div>
                    </div>
                </div>


                <!-- talkshow -->
                <div class="col-sm">
                    <div class="panel panel-primary text-center no-boder bg-color-green thick-green-border">
                        <div class="panel-body">
                            <i class="fa fa-briefcase fa-5x" style="color:var(--white)"></i>
                            <h3 style="color: white;">
                                <?php
                                include "../../koneksi.php";
                                $tampil = "SELECT * FROM `ts`";
                                $query = mysqli_query($conn, $tampil);
                                $count = mysqli_num_rows($query);
                                echo "$count";
                                ?>
                            </h3>
                        </div>
                        <div class="panel-footer back-footer-green" style="color: white;">
                            Data Pendaftar Talkshow :
                            <br>
                            <a href="ts.php" class="btn btn-primary" role="button" aria-pressed="true">Detail</a>

                        </div>
                    </div>
                </div>



            </div>
        </div>

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