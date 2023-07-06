<?php
include "../../config/koneksi.php";

$max_user = mysqli_fetch_array(mysqli_query($koneksi, "SELECT max(id_makanan) as maxid from tb_makanan"));
$id = $max_user['maxid'] + 1;

$nama = $_POST['nama_makanan'];
$deskripsi = $_POST['deskripsi_makanan'];
$harga = $_POST['harga_makanan'];
$status_pesan = $_POST['status_pesan'];

$target_dir = "../../assets/img/makanan/";
$target_file = $target_dir . basename($_FILES['foto_makanan']['name']);
$imgType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

echo $imgType;


if ($_POST['tambahmkn']) {
    // cek gambar atau bukan
    $cek = getimagesize($_FILES['foto_makanan']['tmp_name']);
    if ($cek == false) {
        $message = "Bukan file gambar";
        $status_upload = 0;
    } else {
        $status_upload = 1;
        if (file_exists($target_file)) {
            $message = "File yang dimasukkan telah ada";
            $status_upload = 0;
        } else {
            if ($_FILES['foto_makanan']['size'] > 1000000) {
                $message = "File terlalu besar";
                $status_upload = 0;
            } else {
                if ($imgType != "jpg" && $imgType != "png" && $imgType != "jpeg") {
                    $message = "Format tidak diperbolehkan";
                    $status_upload = 0;
                }
            }
        }
    }

    if ($status_upload == 0) {
        echo "<script>alert('$message'); window.location.href='../../index.php?hal=makanan';</script>";
        exit();
    } else {
        $select = mysqli_query($koneksi, "SELECT * FROM tb_makanan WHERE nama_makanan='$nama'");
        if (mysqli_num_rows($select) > 0) {
            echo "<script>alert('Nama Menu yang anda masukkan telah ada.'); window.location.href='../../index.php?hal=makanan';</script>";
        } else {
            if (move_uploaded_file($_FILES['foto_makanan']['tmp_name'], $target_file)) {
                $query = mysqli_query($koneksi, "INSERT INTO `tb_makanan`(`id_makanan`, `foto_makanan`, `nama_makanan`, `deskripsi`, `harga`, `status_pesan`) VALUES ('$id','" . $_FILES['foto_makanan']['name'] . "','$nama','$deskripsi','$harga','$status_pesan')");

                if ($query) {
                    echo "<script>alert('Menu berhasil ditambahkan.'); window.location.href='../../index.php?hal=makanan';</script>";
                } else {
                    echo "<script>alert('Menu gagal ditambahkan.'); window.location.href='../../index.php?hal=makanan';</script>";
                }
            } else {
                echo "<script>alert('Terjadi kesalahan saat memasukkan data.'); window.location.href='../../index.php?hal=makanan';</script>";
            }
        }
    }
}
