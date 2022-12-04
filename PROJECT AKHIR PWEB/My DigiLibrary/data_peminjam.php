<?php

include('db.php');
include('logout.php');

session_start();

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
}

$get_user = mysqli_query($db, "SELECT * FROM member WHERE m_email='$_SESSION[email]'");
$user = mysqli_fetch_array($get_user);

$query = "SELECT * FROM detail_peminjaman JOIN buku USING (buku_id) JOIN peminjaman USING (peminjaman_id) JOIN staff USING (staff_id) JOIN member USING (member_id) WHERE member_id ='$_SESSION[member_id]'  ORDER BY detail_peminjaman_id ASC";
$dewan1 = $db->prepare($query);
$dewan1->execute();
$res1 = $dewan1->get_result();

if(isset($_POST['logout'])){
    $logout = new logout();
    $logout->do_logout();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peminjaman | My DigiLibrary</title>

    <link rel="stylesheet" href="mazer/dist/assets/css/main/app.css">
    <link rel="stylesheet" href="mazer/dist/assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="mazer/dist/assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="mazer/dist/assets/images/logo/favicon.png" type="image/png">

    <link rel="stylesheet" href="mazer/dist/assets/css/pages/fontawesome.css">
    <link rel="stylesheet" href="mazer/dist/assets/css/pages/datatables.css">

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
                            <h3>Data Peminjaman</h3>

                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><?= $user['m_nama_awal'].' '.$user['m_nama_akhir'] ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Basic Tables start -->
                <section class="section">
                    <div class="card mt-4">
                        <div class="card-body">
                            <table class="table" id="table1">
                                <thead>
                                    <tr>
                                        <th>ID Peminjaman</th>
                                        <th>Status</th>
                                        <th>Nama Member</th>
                                        <th>Kode Buku</th>
                                        <th>Judul Buku</th>
                                        <th>Tanggal Peminjaman</th>
                                        <th>Tanggal Pengembalian</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = $res1->fetch_assoc()) { ?>
                                        <tr>
                                            <td><?= $row['detail_peminjaman_id'] ?></td>
                                            <td><?php if($row['status'] == 0){?>
                                                <p class="text-danger">Belum Dikembalikan</p>
                                                <?php }else{?> 
                                                <p class="text-success">Sudah Dikembalikan</p>    
                                                <?php } ?></td>
                                            <td><?= $row['m_nama_awal'].' '.$row['m_nama_akhir'] ?></td>
                                            <td><?= $row['buku_id'] ?></td>
                                            <td><?= $row['judul_buku'] ?></td>
                                            <td><?= $row['tanggal_peminjaman'] ?></td>
                                            <td><?= $row['tanggal_pengembalian'] ?></td>
                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
                <!-- Basic Tables end -->
            </div>

        </div>
    </div>
    <script src="mazer/dist/assets/js/app.js"></script>

    <script src="mazer/dist/assets/js/extensions/datatables.js"></script>

</body>

</html>