<?php
include 'db.php';
session_start();

if(isset($_POST['forget_pw'])){

  $email=$_POST['email'];
  $pwd=$_POST['new_password'];
  
  $query="select * from member where m_email='$email'";
  
  $result=mysqli_query($db,$query);
  $num=mysqli_fetch_array($result);
  if($num>0){
  mysqli_query($db,"update member set m_password='$pwd' where m_email='$email' ");
  // $_SESSION['email']=$email;
  header('location: login_member.php');
  }else{
  echo"<script>alert('something wrong try again')</script>";
  }
}
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
                            <form action="forget_pw.php" method="POST">
                                <div class="col-md-12">
                                    <h3 align="center">Forget Password</h3>
                                    <hr>
                                    <div class="mt-3 form-group">
                                        <label for="email" style="margin-left:2%;">Email: </label>
                                        <input type="email" id="email" name="email" placeholder="Email : admin@gmail.com" class="form form-lg form-control mt-2">

                                    </div>
                                    <div class="mt-3 mb-3 form-group">
                                        <label for="password" style="margin-left:2%;">New Password: </label>
                                        <input type="password" id="new_password" name="new_password" placeholder="Password : secret" class="form form-lg form-control mt-2">

                                    </div>
                                </div>
                                <button type="submit" name="forget_pw" class="btn btn-primary col-md-12 col-xs-12 mt-3">Submit</button>
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

</body>

</html>