<?php
session_start();
session_destroy();
echo "<script>alert('Selamat Tinggal');
location.href='../'</script>";
echo "<script> window.location = '../index.php' </script>";
