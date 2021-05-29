<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dolanan Admin - Data Pemain</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../vendors/iconfonts/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../images/logo-removebg-preview-1.png" />
</head>

<body class="horizontal-menu">
    <div class="container-scroller">
        <nav class="navbar horizontal-layout-navbar fixed-top navbar-expand-lg">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <a class="navbar-brand brand-logo" href="../index.html"><img src="../images/logo-removebg-preview-1.png"
                        alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="../index.html"><img
                        src="../images/logo-removebg-preview-1.png" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex flex-grow">
                <ul class="navbar-nav navbar-nav-left collapse navbar-collapse" id="horizontal-top-example">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="projects-dropdown" data-toggle="dropdown"
                            aria-expanded="false">
                            Master Data
                        </a>
                        <div class="dropdown-menu navbar-dropdown" aria-labelledby="projects-dropdown">
                            <a class="dropdown-item" href="../data_pemain.php">
                                <i class="mdi mdi-laptop-mac mr-2 text-primary"></i>
                                Data Pemain
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <i class="mdi mdi-database mr-2 text-primary"></i>
                                Data Permainan
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <i class="mdi mdi-cellphone-android mr-2 text-primary"></i>
                                Data User
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="projects-dropdown" data-toggle="dropdown"
                            aria-expanded="false">
                            Pertandingan
                        </a>
                        <div class="dropdown-menu navbar-dropdown" aria-labelledby="projects-dropdown">
                            <a class="dropdown-item" href="#">
                                <i class="mdi mdi-laptop-mac mr-2 text-primary"></i>
                                Jadwal Permainan
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <i class="mdi mdi-database mr-2 text-primary"></i>
                                Tracking Profil
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="projects-dropdown" data-toggle="dropdown"
                            aria-expanded="false">
                            Laporan
                        </a>
                        <div class="dropdown-menu navbar-dropdown" aria-labelledby="projects-dropdown">
                            <a class="dropdown-item" href="#">
                                <i class="mdi mdi-laptop-mac mr-2 text-primary"></i>
                                Laporan Jadwal Permainan
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <i class="mdi mdi-database mr-2 text-primary"></i>
                                Laporan Pertandingan
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <i class="mdi mdi-database mr-2 text-primary"></i>
                                Laporan Tracking Pemain
                            </a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile">
                        <a href="../profile.php" class="nav-link">
                            <div class="nav-profile-text">
                                Jane Robert
                            </div>
                            <div class="nav-profile-img">
                                <img src="../assets/img/avatar.png" alt="image" class="img-xs rounded-circle ml-3">
                                <span class="availability-status online"></span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../login.php" class="nav-link">
                            <i class="fas fa-power-off font-weight-bold icon-sm"></i>
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center ml-auto" type="button"
                    data-toggle="collapse" data-target="#horizontal-top-example">
                    <span class="fa fa-bars"></span>
                </button>
            </div>
        </nav>
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">
                            Update Password
                        </h3>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 mx-auto">
                            <!-- <form action="" method="POST"> -->
                            <div class="form-group">
                                <label>Password Lama</label>
                                <input type="password" name="password3" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Password Baru</label>
                                <input type="password" name="password1" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Repeat Password Baru</label>
                                <input type="password" name="password2" class="form-control">
                            </div>
                            <div class="form-group float-right">
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <a href="../profile.php" type="submit" name="edit" value="nama"
                                    class="btn btn-primary">Simpan</a>
                            </div>
                            <!-- </form> -->

                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a
                                href="https://www.semogajaya.club/" target="_blank">DOLANAN</a>. All rights
                            reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made
                            with <i class="far fa-heart text-danger"></i></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="../vendors/js/vendor.bundle.base.js"></script>
    <script src="../vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../js/off-canvas.js"></script>
    <script src="../js/hoverable-collapse.js"></script>
    <script src="../js/misc.js"></script>
    <script src="../js/settings.js"></script>
    <script src="../js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../js/dashboard.js"></script>
    <!-- End custom js for this page-->
</body>

</html>