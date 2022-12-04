<?php
include 'db.php';

$member_id = $_POST['id_member'];
$book_id = $_POST['id_buku'];
$tgl_peminjaman = $_POST['tgl_peminjaman'];
$tgl_pengembalian = date('Y-m-d', strtotime($tgl_peminjaman. ' + 7 days'));
// $tgl_pengembalian  = $_POST['tgl_pengembalian'];

$query = "INSERT INTO peminjaman (peminjaman_id,tanggal_peminjaman, tanggal_pengembalian) VALUES ('','$tgl_peminjaman','$tgl_pengembalian')";
// var_dump($query);
// die;

if (mysqli_query($db, $query)) {
    $last_id = $db->insert_id;
    $sql = "INSERT INTO detail_peminjaman (detail_peminjaman_id,status,buku_id, peminjaman_id, member_id, staff_id) VALUES ('', 0, '$book_id', '$last_id', '$member_id', 1)";
    if(mysqli_query($db, $sql)){
        echo "sukses";
    }

} else {
    echo "Gagal";
}
