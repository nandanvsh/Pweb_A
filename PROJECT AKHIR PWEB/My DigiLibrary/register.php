<?php
include 'db.php';
error_reporting(0);
session_start();
if (isset($_SESSION['email'])) {
    header("Location: index.php");
}

// if (isset($_POST['submit'])) {
//     $nama_depan = $_POST['nama_depan'];
//     $nama_belakang = $_POST['nama_belakang'];
//     $no_telpon = $_POST['no_telpon'];
//     $alamat = $_POST['alamat'];
//     $kota = $_POST['kota'];
//     $tgl_lahir = $_POST['tanggal_lahir'];
//     $tgl_daftar = $_POST['tanggal_daftar'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $jabatan = 'Member';

//     $sql = "INSERT INTO staff (staff_id, nama_awal, nama_akhir, jabatan, no_telp, tanggal_lahir, tanggal_masuk, alamat, kota, email, password) VALUES ('','$nama_depan','$nama_belakang','$jabatan','$no_telpon', '$tgl_lahir', '$tgl_daftar', '$alamat', '$kota', '$email', '$password')";
    
//     if (mysqli_query($db, $sql)) {
//         header("Location: login.php");
//     } else {
//         echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
//     }

    // if(empty($_POST['email'] || $_POST['password'])){
    //     echo "<script>alert('Email atau Password tidak boleh kosong. Silahkan coba lagi!')</script>";
    // }else{
    //     $sql = "SELECT * FROM staff WHERE email='$email' AND password='$password'";
    //     $result = mysqli_query($db, $sql);
    //     if ($result->num_rows > 0) {
    //         $row = mysqli_fetch_assoc($result);
    //         $_SESSION['email'] = $row['email'];
    //         header("Location: index.php");
    //     } else {
    //         echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    //     }
    // }

// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo(2).png">
    <title>My DigiLibrary | Sistem Informasi Peminjaman Buku</title>
    <!-- Bootstrap Core CSS -->
    <link href="template/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="template/assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="template/assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="template/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="template/assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="template/html/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="template/html/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div class="container-lg">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-6 col-md-8">
                <center>
                    <img src="assets/img/logo(2).png" style="max-width: 100px; margin-top: 10%;">
                    <h1 class="mt-5">My DigiLibrary</h1>
                </center>
                <div class="card o-hidden border-3 shadow-lg" style="margin-top: 10%; margin-bottom: 25%;">
                    <div class="card-body col-md-12 mx-auto">
                        <!-- Nested Row within Card Body -->
                        <div class=" d-none d-lg-block"></div>
                        <div class=" mt-2">
                            <form action="#" method="POST" id="form-data" class="form-data">
                                <div class="col-md-12">
                                    <h3 align="center">Halaman Register</h3>
                                    <hr>
                                    <div class="mt-3 form-group">
                                        <label for="Nama Depan" style="margin-left:2%;">Nama Depan: </label>
                                        <input type="text" id="nama_depan" name="nama_depan" placeholder="Masukkan nama awal Anda" class="form form-lg form-control mt-2" required>

                                    </div>
                                    <div class="mt-3 form-group">
                                        <label for="Nama Belakang" style="margin-left:2%;">Nama Belakang: </label>
                                        <input type="text" id="nama_belakang" name="nama_belakang" placeholder="Masukkan nama akhir Anda" class="form form-lg form-control mt-2" required>

                                    </div>
                                    <div class="mt-3 form-group">
                                        <label for="No Telpon" style="margin-left:2%;">No Telpon: </label>
                                        <input type="text" id="no_telpon" name="no_telpon" placeholder="Masukkan nomor telepon Anda" class="form form-lg form-control mt-2" required>

                                    </div>
                                    <div class="mt-3 form-group">
                                        <label for="Alamat" style="margin-left:2%;">Alamat: </label>
                                        <input type="text" id="alamat" name="alamat" placeholder="Masukkan alamat Anda" class="form form-lg form-control mt-2" required>

                                    </div>
                                    <div class="mt-3 form-group">
                                        <label for="kota" style="margin-left:2%;">Kota: </label>
                                        <input type="text" id="kota" name="kota" placeholder="Masukkan alamat Anda" class="form form-lg form-control mt-2" required>

                                    </div>
                                    <div class="mt-3 form-group">
                                        <!-- <label for="Kota" style="margin-left:2%;">Kota: </label>
                                        <input type="text" id="Kota" name="Kota" placeholder="Masukkan kota Anda" class="form form-lg form-control mt-2" required>

                                    </div> -->
                                    <div class="mt-3 form-group">
                                        <label for="Tanggal Lahir" style="margin-left:2%;">Tanggal Lahir: </label>
                                        <input type="date" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukkan tanggal lahir Anda" class="form form-lg form-control mt-2" required>

                                    </div>
                                    <div class="mt-3 form-group">
                                        <label for="email" style="margin-left:2%;">Email: </label>
                                        <input type="text" id="email" name="email" placeholder="Masukkan email anda" class="form form-lg form-control mt-2" required>

                                    </div>
                                    <div class="mt-3 mb-3 form-group">
                                        <label for="password" style="margin-left:2%;">Password: </label>
                                        <input type="password" id="password" name="password" placeholder="Masukkan password anda" class="form form-lg form-control mt-2" required>

                                    </div>
                                    <div class="mt-3 mb-3 form-group">
                                        <label for="cp_password" style="margin-left:2%;">Password: </label>
                                        <input type="password" id="cp_password" name="cp_password" placeholder="Konfirmasi password anda" class="form form-lg form-control mt-2" required>
                            
                                        <p class="mt-3">Sudah punya akun? <a href="login.php">Login</a></p>
                                    </div>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary col-md-12 col-xs-12 mt-3">Submit</button>
                            </br>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="template/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="template/assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="template/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="template/html/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="template/html/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="template/html/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="template/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="template/html/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="template/assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="template/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="template/assets/plugins/d3/d3.min.js"></script>
    <script src="template/assets/plugins/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="template/html/js/dashboard1.js"></script>

    <script type="text/javascript">

        function coba(){
            const coba = document.getElementById("password").value;
            alert(coba);
        }

        // $('#submit').on('click', function(){
        //     const pw = $('#password').value();
        //     const conf_pw = $('#cp_password').value();
        //     console.log(pw)
        // })

        $(document).on('submit', "#form-data", function(e) {
            e.preventDefault()
            var data = $('.form-data').serialize();
            const pw = document.getElementById("password").value;
            const conf_pw = document.getElementById("cp_password").value;
            if(pw == conf_pw){
                $.ajax({
                    type: 'POST',
                    url: "proses_register.php",
                    data: data,
                    success: function() {
                        location.href = "login_member.php"
                        alert("Berhasil Menyimpan Data")
                    }
                });
            }else{
                alert("Password Tidak Sama!")
            }
        });
    </script>

</body>

</html>