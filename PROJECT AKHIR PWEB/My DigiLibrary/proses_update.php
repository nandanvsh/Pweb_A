<?php
include('db.php');

$id = $_POST['id_peminjaman'];
$peminjaman = $_POST['id_peminjaman'];
$detail_peminjaman = $_POST['id_detail_peminjaman'];
$member_id = $_POST['id_member'];
$book_id = $_POST['id_buku'];
$staff_id = $_POST['id_staff'];
$tgl_peminjaman = $_POST['tgl_peminjaman'];
$tgl_pengembalian = date('Y-m-d', strtotime($tgl_peminjaman. ' + 7 days'));

$query = "UPDATE peminjaman SET tanggal_peminjaman='$tgl_peminjaman', tanggal_pengembalian='$tgl_pengembalian' WHERE peminjaman_id='$peminjaman'";

if (mysqli_query($db, $query)) {
    $sql = "UPDATE detail_peminjaman SET buku_id='$book_id', staff_id='$staff_id' WHERE detail_peminjaman_id='$detail_peminjaman'";
    if(mysqli_query($db, $sql)){
        echo "sukses";
    }
} else {
    echo "Gagal";
}

?>
