<?php
// koneksi database
include 'db.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];
$peminjaman_id = $_GET['peminjaman_id'];


// menghapus data dari database
mysqli_query($db, "DELETE FROM detail_peminjaman where detail_peminjaman_id='$id'");
mysqli_query($db, "DELETE FROM peminjaman where peminjaman_id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:data_peminjam_admin.php");
