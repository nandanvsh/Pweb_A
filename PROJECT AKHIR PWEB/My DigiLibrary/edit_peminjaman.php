<?php

include('db.php');

session_start();

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
}

$get_user = mysqli_query($db, "SELECT * FROM staff WHERE email='$_SESSION[email]'");
$user = mysqli_fetch_array($get_user);
$id_peminjaman = $_GET['id'];
$query = "SELECT * FROM detail_peminjaman JOIN member ON detail_peminjaman.member_id = member.member_id JOIN detail_penulis_buku ON detail_peminjaman.buku_id = detail_penulis_buku.buku_id join buku on detail_peminjaman.buku_id = buku.buku_id JOIN peminjaman on detail_peminjaman.peminjaman_id = peminjaman.peminjaman_id WHERE detail_peminjaman.detail_peminjaman_id = $id_peminjaman";;
$get_peminjaman = mysqli_query($db, $query);
$peminjaman = mysqli_fetch_array($get_peminjaman);

// if(isset($_POST['submit'])){
//     $id = $_POST['id_peminjaman'];
//     $peminjaman = $_POST['id_peminjaman'];
//     $detail_peminjaman = $_POST['id_detail_peminjaman'];
//     $member_id = $_POST['id_member'];
//     $book_id = $_POST['id_buku'];
//     $staff_id = $_POST['id_staff'];
//     $tgl_peminjaman = $_POST['tgl_peminjaman'];
//     $tgl_pengembalian = date('Y-m-d', strtotime($tgl_peminjaman. ' + 7 days'));

//     $query = "UPDATE peminjaman SET tanggal_peminjaman='$tgl_peminjaman', tanggal_pengembalian='$tgl_pengembalian' WHERE peminjaman_id='$peminjaman'";

//     if (mysqli_query($db, $query)) {
//         $sql = "UPDATE detail_peminjaman SET buku_id='$book_id', staff_id='$staff_id' WHERE detail_peminjaman_id='$detail_peminjaman'";
//         if(mysqli_query($db, $sql)){
//             echo "sukses";
//         }
//     } else {
//         echo "Gagal";
//     }
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Peminjaman | My DigiLibrary</title>

    <link rel="stylesheet" href="mazer/dist/assets/css/main/app.css">
    <link rel="stylesheet" href="mazer/dist/assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="mazer/dist/assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="mazer/dist/assets/images/logo/favicon.png" type="image/png">

    <style>
        #ui-id-1 {
            background-color: white;
            /* list-style: none; */
            border: blue 2px solid;
            width: 100px;
        }

        #ui-id-2 {
            background-color: white;
            /* list-style: none; */
            border: blue 2px solid;
            width: 100px;
        }

        #ui-id-3 {
            background-color: white;
            /* list-style: none; */
            border: blue 2px solid;
            width: 100px;
        }
    </style>

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="dashboard.php">My DigiLibrary</a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item  ">
                            <a href="dashboard.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="form_peminjaman.php" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Buat Peminjaman Buku</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="data_peminjam.php" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Lihat Peminjaman Buku</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="logout.php" class='sidebar-link'>
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Logout</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Edit Peminjaman</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><?= $user['nama_awal'] ." " . $user['nama_akhir'] ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Basic Inputs</h4>
                </div>
                <div class="card-body">
                    <form method="POST" class="form-data" id="form-data">
                        <input type="hidden" name="id_detail_peminjaman" value="<?= $peminjaman['detail_peminjaman_id'] ?>">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Nama Awal</label>
                            <input type="text" name="nama_member" id="nama_member" value="<?= $peminjaman['m_nama_awal'] ?>" class="form-control" aria-describedby="emailHelp" required disabled>
                            <input type="hidden" name="id_member" id="id_member" value="<?= $peminjaman['member_id'] ?>">
                            <input type="hidden" name="id_peminjaman" id="id_peminjaman" value="<?= $peminjaman['peminjaman_id'] ?>">
                            <input type="hidden" name="id_staff" id="id_staff" value="<?= $user['staff_id'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Nama Akhir</label>
                            <input type="text" name="nama_member" id="nama_member" value="<?= $peminjaman['m_nama_akhir'] ?>" class="form-control" aria-describedby="emailHelp" required disabled>
                            <!-- <input type="hidden" name="id_member" id="id_member" value="<?= $peminjaman['member_id'] ?>"> -->
                        <!-- </div> -->
                        <div class="mb-3">
                            <label for="nama_buku" class="form-label">Judul Buku</label>
                            <input type="text" name="nama_buku" id="nama_buku" value="<?= $peminjaman['judul_buku'] ?>" class="form-control" required>
                            <input type="hidden" name="id_buku" id="id_buku" value="<?= $peminjaman['buku_id'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="tgl_peminjaman" class="form-label">Tanggal Peminjaman</label>
                            <input type="date" name="tgl_peminjaman" id="tgl_peminjaman" value="<?= date('Y-m-d', strtotime($peminjaman['tanggal_peminjaman'])) ?>" class="form-control" required>
                        </div>
                        <!-- <div class="mb-3">
                            <label for="tgl_pengembalian" class="form-label">Tanggal Pengembalian</label>
                            <input type="date" name="tgl_pengembalian" id="tgl_pengembalian" value="<?= date('Y-m-d', strtotime($peminjaman['tanggal_pengembalian'])) ?>" class="form-control" required>
                        </div> -->
                        <button type="submit" name="submit" class="btn btn-primary simpan" id="simpan">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Row -->
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- </div> -->
    </div>
    <script src="mazer/dist/assets/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script type="text/javascript">
        $('#nama_member').autocomplete({
            source: "search_member.php",

            select: function(event, ui) {
                $("#id_member").val(ui.item.id);
                $("#description").val(ui.item.description);
            }
        });

        $('#nama_buku').autocomplete({
            source: "search_buku.php",

            select: function(event, ui) {
                $("#id_buku").val(ui.item.id);
                $("#description").val(ui.item.description);
            }
        });

        $(document).on('submit', "#form-data", function(e) {
            e.preventDefault()
            var data = $('.form-data').serialize();
            $.ajax({
                type: 'POST',
                url: "proses_update.php",
                data: data,
                success: function() {
                    location.href = "data_peminjam_admin.php"
                    alert("Berhasil Memperbarui Data")
                }
            });
        });


        // $(document).ready(function() {
        //     $(".simpan").click(function() {
        //         var data = $('.form-data').serialize();
        //         $.ajax({
        //             type: 'POST',
        //             url: "proses_insert.php",
        //             data: data,
        //             success: function() {
        //                 console.log(data);
        //             }
        //         });
        //         console.log(data);
        //     });
        // });
    </script>
</body>

</html>