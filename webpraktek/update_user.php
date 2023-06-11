<?php
include "koneksi.php";

$id            = $_POST['id'];
$nama           = $_POST['nama'];
$usernama          = $_POST['username'];
$password       = $_POST['password'];

$query = "UPDATE user SET nama='$nama', usernama='$usernama', password='$password' where id='$id'";

$update = mysqli_query($connect,$query);

if($update) {
    echo"berhasil";
}else{
    echo "gagal";
}

header("location:list_user.php?status=".$status);