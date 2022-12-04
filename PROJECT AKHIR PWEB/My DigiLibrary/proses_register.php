<?php
include 'db.php';

$nama_depan = $_POST['nama_depan'];
$nama_belakang = $_POST['nama_belakang'];
$no_telpon = $_POST['no_telpon'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$tgl_lahir = $_POST['tanggal_lahir'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO member (member_id, m_nama_awal, m_nama_akhir, m_no_telp, m_tanggal_lahir, m_tanggal_daftar, m_alamat, m_kota, m_email, m_password) VALUES ('','$nama_depan','$nama_belakang','$no_telpon', '$tgl_lahir', '', '$alamat', '$kota', '$email', '$password')";

// var_dump($query);
// die;

if (mysqli_query($db, $query)) {
    echo "Sukses";
} else {
    echo "Gagal";
}
