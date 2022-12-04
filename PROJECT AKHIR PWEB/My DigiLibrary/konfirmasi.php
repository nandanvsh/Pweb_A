<?php
include('db.php');

$id = $_GET['id'];

$query = "UPDATE detail_peminjaman SET status=1 WHERE detail_peminjaman_id='$id'";

if (mysqli_query($db, $query)) {
    header("Location: data_peminjam_admin.php");
} else {
    echo "Gagal";
}

?>