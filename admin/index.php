<?php
include '../koneksi.php';

session_start();
//jika gagal kembalikan ke index
IF($_SESSION ['status'] !='login'){
    header('location:../index.php');
}
<h1>echo'selamat datang'.$_SESSION ['username'];</h1>
?>
<a href='logot.php'>Logout</a>
