<?php
session_start();
include "koneksi.php";
echo "hello";
$email = (isset($_POST['email'])) ? $_POST['email'] : "";
$password = (isset($_POST['password'])) ? $_POST['password'] : "";

if (!empty($_POST['login'])) {
    $query = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE email='$email' && password='$password'");
    $query_run = mysqli_fetch_array($query);

    if ($query_run) {
        $_SESSION['user'] = $email;
        header("location:../index.php");
    } else {
        echo "<script>alert('email atau password salah.')</script>";
        echo "<meta http-equiv='refresh' content='1;url=../login.php'>";
    }
}
