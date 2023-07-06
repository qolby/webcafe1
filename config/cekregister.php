<?php
include "koneksi.php";

$max_user = mysqli_fetch_array(mysqli_query($koneksi, "SELECT max(id_user) as maxid from tb_user"));
$id = $max_user['maxid'] + 1;

$name = $_POST['first_name'] . " " . $_POST['last_name'];
$email = $_POST['email'];
$notelp = $_POST['telepon'];
$jns_kel = $_POST['jeniskel'];

$password = ($_POST['password'] == $_POST['repassword']) ? $_POST['password'] : "";

if (empty($password)) {
    echo "<script>alert('Password tidak sama'); window.location.href='../register.php';</script>";
}

if ($_POST['register']) {
    $register = mysqli_query($koneksi, "INSERT INTO `tb_user`(`id_user`, `nama`, `email`, `telepon`, `jenis_kelamin`, `password`, `level`) VALUES ('$id','$name','$email','$notelp','$jns_kel','$password','2')");
    if ($register) {
        echo "<script>alert('Registrasi Akun Berhasil'); window.location.href='../login.php';</script>";
    } else {
        echo "<script>alert('Registrasi Akun Gagal'); window.location.href='../register.php';</script>";
    }
}
