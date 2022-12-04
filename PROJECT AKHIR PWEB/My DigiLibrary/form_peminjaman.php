<?php

include('db.php');
include('logout.php');

session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login_member.php");
}

$get_user = mysqli_query($db, "SELECT * FROM member WHERE m_email='$_SESSION[email]'");
$user = mysqli_fetch_array($get_user);

if(isset($_POST['logout'])){
    $logout = new logout();
    $logout->do_logout();
}

// if(isset($_POST['submit'])){
//     $member_id = $_POST['id_member'];
//     $book_id = $_POST['id_buku'];
//     $tgl_peminjaman = $_POST['tgl_peminjaman'];
//     $tgl_pengembalian = date('Y-m-d', strtotime($tgl_peminjaman. ' + 7 days'));

//     $query = "INSERT INTO peminjaman (peminjaman_id,tanggal_peminjaman, tanggal_pengembalian) VALUES ('','$tgl_peminjaman','$tgl_pengembalian')";

//     if(mysqli_query($db, $query)){
//         $last_id = $db->insert_id;
//         echo "<script>alert('$last_id')</script>";
//     }
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman | My DigiLibrary</title>

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
                            <a href="index.php" class='sidebar-link'>
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
                                <span>History Peminjaman Buku</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                                    <form method="post">
                                        <button href="" type="submit" name="logout" class='sidebar-link'>
                                            <i class="bi bi-box-arrow-right"></i>
                                            <span>Logout</span>
                                        </button>
                                    </form>
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
                            <h3>Form Peminjaman</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><?= $user['m_nama_awal']. " ". $user['m_nama_akhir'] ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Silahkan Isi Form Terlebih Dahulu</h4>
                </div>
                <div class="card-body">
                    <form method="POST" class="form-data" id="form-data">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Nama Member</label>
                            <input type="text" name="nama_member" id="nama_member" class="form-control" aria-describedby="emailHelp" value="<?= $user['m_nama_awal']. " ". $user['m_nama_akhir'] ?>" required disabled>
                            <input type="hidden" name="id_member" id="id_member" value="<?= $user['member_id'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="nama_buku" class="form-label">Judul Buku</label>
                            <input type="text" name="nama_buku" id="nama_buku" class="form-control" placeholder="Masukkan Judul Buku" required>
                            <input type="hidden" name="id_buku" id="id_buku">
                        </div>
                        <div class="mb-3">
                            <label for="tgl_peminjaman" class="form-label">Tanggal Peminjaman</label>
                            <input type="date" name="tgl_peminjaman" id="tgl_peminjaman" class="form-control" required>
                        </div>
                        <!-- <div class="mb-3">
                            <label for="tgl_pengembalian" class="form-label">Tanggal Pengembalian</label>
                            <input type="date" name="tgl_pengembalian" id="tgl_pengembalian" class="form-control" required>
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
    </div>
    <script src="mazer/dist/assets/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script type="text/javascript">
        // $('#nama_member').autocomplete({
        //     source: "search_member.php",

        //     select: function(event, ui) {
        //         $("#id_member").val(ui.item.id);
        //         $("#description").val(ui.item.description);
        //     }
        // });

        // $('#tgl_peminjaman').datepicker({
        //     dateFormat: 'yy-mm-dd',
        //     changeMonth: true,
        //     minDate: new Date(),
        //     maxDate: '+2y',
        //     onSelect: function(date){
        //         var selectedDate = new Date(date);
        //         var msecsInADay = 86400000;
        //         var endDate = new Date(selectedDate.getTime() + msecsInADay);

        //         $('#tgl_pengembalian').datepicker("option", "minDate", endDate);
        //         $('#tgl_pengembalian').datepicker("option", "maxDate", '+2y');
        //     }
        // });
        
        // $('#tgl_pengembalian').datepicker({
        //     dateFormat: 'yy-mm-dd',
        //     changeMonth
        // })

        // $(function(){
        //     $("#tgl_peminjaman").datepicker();
        //     $("#tgl_peminjaman").on('change', function(){
        //         var selected = $(this).val();
        //         alert(selected + 7)
        //     });
        // });


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
                url: "proses_insert.php",
                data: data,
                success: function() {
                    location.href = "data_peminjam.php"
                    alert("Berhasil Menyimpan Data")
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