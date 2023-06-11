<?php
$NIK=$_GET['NIK'];

include 'koneksi.php';
include 'header.php';

$delete = mysqli_query($connect,"DELETE FROM penduduk WHERE NIK='$NIK'");
if ($delete) {
    $status = 'berhasil';
} else {
    $status = 'gagal';
}
header('location:index.php?status'.$status);

?>