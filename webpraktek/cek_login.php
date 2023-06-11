<?php
include 'koneksi.php';
$usernama = $_POST['usernama'];
$password = $_POST['password'];

$user = mysqli_query($connect, "SELECT * FROM user WHERE usernama='$usernama' and password='$password'");
$cek = mysqli_num_rows($user);

session_start();
$userRow= mysqli_fetch_array($user);
$_SESSION['usernama']= $userRow['usernama'];
$_SESSION['nama']= $userRow['nama'];

if($cek>0){
    header("location:home.php");
}else{
    header("location:login.php");
}