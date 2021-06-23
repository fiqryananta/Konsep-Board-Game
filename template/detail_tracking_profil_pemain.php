<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dolanan Admin - Detail Tracking Pemain</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/iconfonts/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/logo-removebg-preview-1.png" />
</head>

<body class="horizontal-menu">
    <div class="container-scroller">
        <nav class="navbar horizontal-layout-navbar fixed-top navbar-expand-lg">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <a class="navbar-brand brand-logo" href="index_pemain.php"><img src="images/logo-removebg-preview-1.png"
                        alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index_pemain.php"><img
                        src="images/logo-removebg-preview-1.png" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex flex-grow">
                <ul class="navbar-nav navbar-nav-left collapse navbar-collapse" id="horizontal-top-example">
                    <li class="nav-item">
                        <a class="nav-link " href="pertandingan.php" aria-expanded="false" style="font-size: medium;">
                            Pertandingan
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="detail_tracking_profil_pemain.php" aria-expanded="false"
                            style="font-size: medium;">
                            Tracking
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile">
                        <a href="profile.php" class="nav-link">
                            <div class="nav-profile-text">
                                Ahmad
                            </div>
                            <div class="nav-profile-img">
                                <img src="assets/img/avatar.png" alt="image" class="img-xs rounded-circle ml-3">
                                <span class="availability-status online"></span>
                            </div>
                        </a>
                    </li>
                    <!-- <li class="nav-item nav-search">
            <div class="nav-link">
              <div class="search-field d-none d-md-block">
                <form class="d-flex align-items-stretch h-100" action="#">
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-search"></i>                                          
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Search your projects ...">
                  </div>
                </form>
              </div>
            </div>
          </li> -->
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">
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
                            Detail Tracking Pemain
                        </h3>
                    </div>
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body d-flex flex-column">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <img src="assets/img/avatar.png" alt="image"
                                                class="img-lg rounded-circle d-flex" alt="">
                                        </div>
                                        <div class="col-md-1 mr-3"><br>
                                            <label for="">Ahmad</label><br>
                                            <label class="badge badge-info badge-pill">Pemain Aktif</label>
                                        </div>
                                        <div class="col-md-2 ml-5 mt-3 mr-5">
                                            <p>
                                                <i class="icon-sm fas fa-arrow-circle-up mr-2"></i>
                                                Menang Pertandingan
                                            </p>
                                            <h3>345</h3>
                                        </div>
                                        <div class="col-md-2 ml-5 mt-3 mr-5">
                                            <p>
                                                <i class="icon-sm fas fa-arrow-circle-down mr-2"></i>
                                                Kalah Pertandingan
                                            </p>
                                            <h3>50</h3>
                                        </div>
                                        <div class="col-md-3 mt-3">
                                            <div class="card card-inverse-success" id="context-menu-simple">
                                                <div class="card-body">
                                                    <p class="card-text">
                                                        Ahmad Pemain <b>Terbaik Bulan Ini.</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body d-flex flex-column">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="card-title">
                                                <i class="fas fa-list"></i>
                                                Grafik Tracking Pertandingan
                                            </h4>
                                            <canvas id="orders-chart"></canvas>
                                            <div id="orders-chart-legend" class="orders-chart-legend"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body d-flex flex-column">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="card-title">
                                                <i class="fas fa-list"></i>
                                                Grafik Tracking Permainan
                                            </h4>
                                            <canvas id="daily-sales-chart"
                                                class="mt-3 mb-3 mb-md-0 chartjs-render-monitor"></canvas>
                                            <div id="daily-sales-chart-legend"
                                                class="daily-sales-chart-legend pt-4 border-top"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body d-flex flex-column">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h4 class="card-title">
                                                <i class="fas fa-list"></i>
                                                Daftar Data Tracking Pemain
                                            </h4>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="button" class="btn btn-success btn-fw ml-2"
                                                data-toggle="modal" data-target="#exampleModal"><i
                                                    class="fa fa-file-excel"></i> EXPORT EXCEL</button>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="detail_tracking_profil_pdf.php" target="_blank">
                                                <button type="button" class="btn btn-danger btn-fw ml-2"
                                                    data-toggle="modal" data-target="#exampleModal"><i
                                                        class="fa fa-file-pdf"></i> EXPORT
                                                    PDF</button>
                                            </a>

                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table order-listing">
                                            <thead>
                                                <tr>
                                                    <th width="5px">No</th>
                                                    <th>Permainan</th>
                                                    <th>Pertandingan</th>
                                                    <th>Status</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Fast Fun Blokus </td>
                                                    <td>15</td>
                                                    <th><label class="badge badge-warning badge-pill">Kalah</label></th>

                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Wooden Latches Board </td>
                                                    <td>10</td>
                                                    <td><label class="badge badge-info badge-pill">Menang</label></td>

                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Splendor </td>
                                                    <td>25</td>
                                                    <td><label class="badge badge-info badge-pill">Menang</label></td>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
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
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <script src="vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/misc.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <script src="js/data-table.js"></script>
    <!-- End custom js for this page-->
</body>

</html>