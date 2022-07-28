<?php

include "../../koneksi.php";

$getid = $_GET['id'];

$deletedata = mysqli_query($conn, "DELETE FROM `ws` WHERE id = '$getid'");

if ($deletedata) {
    echo "<script>alert('File berhasil terhapus');
    location.href='../pages/ws.php';</script>";
} else {
    echo "<script>alert('File gagal terhapus');
    location.href='../pages/ws.php';</script>";
}
