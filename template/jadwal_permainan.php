<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dolanan Admin - Data Jadwal Permainan</title>
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
                <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo-removebg-preview-1.png"
                        alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-removebg-preview-1.png"
                        alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex flex-grow">
                <ul class="navbar-nav navbar-nav-left collapse navbar-collapse" id="horizontal-top-example">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="projects-dropdown" data-toggle="dropdown"
                            aria-expanded="false">
                            Master Data
                        </a>
                        <div class="dropdown-menu navbar-dropdown" aria-labelledby="projects-dropdown">
                            <a class="dropdown-item" href="data_pemain.php">
                                <i class="mdi mdi-laptop-mac mr-2 text-primary"></i>
                                Data Pemain
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="data_permainan.php">
                                <i class="mdi mdi-database mr-2 text-primary"></i>
                                Data Permainan
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="data_user.php">
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
                            <a class="dropdown-item" href="jadwal_permainan.php">
                                <i class="mdi mdi-laptop-mac mr-2 text-primary"></i>
                                Jadwal Permainan
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="tracking_profil.php">
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
                            <a class="dropdown-item" href="laporan_jadwal.php">
                                <i class="mdi mdi-laptop-mac mr-2 text-primary"></i>
                                Laporan Jadwal Permainan
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="laporan_pertandingan.php">
                                <i class="mdi mdi-database mr-2 text-primary"></i>
                                Laporan Pertandingan
                            </a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile">
                        <a href="profile.php" class="nav-link">
                            <div class="nav-profile-text">
                                Jane Robert
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
                            Data Jadwal Permainan
                        </h3>
                    </div>
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body d-flex flex-column">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <h4 class="card-title">
                                                <i class="fas fa-list"></i>
                                                Daftar Data Jadwal Permainan
                                            </h4>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="button" class="btn btn-primary btn-fw ml-2"
                                                data-toggle="modal" data-target="#exampleModal"><i
                                                    class="fa fa-plus"></i> Tambah Data</button>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table order-listing">
                                            <thead>
                                                <tr>
                                                    <th width="5px">No</th>
                                                    <th>Permainan</th>
                                                    <th>Jumlah Pemain</th>
                                                    <th>Host</th>
                                                    <th>Tanggal</th>
                                                    <th width="45px">Lokasi</th>
                                                    <th>Status</th>

                                                    <th>#</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tb-main">
                                                <tr>
                                                    <td>1</td>
                                                    <td>Clifford Wilson</td>
                                                    <td>10 Orang</td>
                                                    <td>Ahmad</td>
                                                    <td>12 Mei 2021</td>
                                                    <td>Jl. Kawi 1, Wonotingal, Kec. Candisari, Kota Semarang, Jawa
                                                        Tengah 50252</td>
                                                    <th><label class="badge badge-warning badge-pill">Akan
                                                            Datang</label></th>
                                                    <td>
                                                        <button type="button" class="btn btn-danger btn-sm btn-icon">
                                                            <i class="fa fa-trash btn-icon-prepend"></i>

                                                        </button>
                                                        <button type="button" class="btn btn-warning btn-sm btn-icon">
                                                            <i class="fa fa-edit btn-icon-prepend"></i>

                                                        </button>
                                                        <button type="button" class="btn btn-success btn-sm btn-icon">
                                                            <i class="fa fa-eye btn-icon-prepend"></i>

                                                        </button>
                                                        <button type="button" class="btn btn-info btn-sm btn-icon">
                                                            <i class="fa fa-redo btn-icon-prepend"></i>

                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Mary Payne </td>
                                                    <td>5 Orang</td>
                                                    <td>Meliodas</td>
                                                    <td>15 Mei 2021</td>
                                                    <td>Jl. Rinjani No.1, Bendungan, Kec. Gajahmungkur, Kota Semarang,
                                                        Jawa Tengah 50231</td>
                                                    <td><label class="badge badge-info badge-pill">Sedang
                                                            Berlangsung</label></td>
                                                    <td>
                                                        <button type="button" class="btn btn-danger btn-sm btn-icon">
                                                            <i class="fa fa-trash btn-icon-prepend"></i>

                                                        </button>
                                                        <button type="button" class="btn btn-warning btn-sm btn-icon">
                                                            <i class="fa fa-edit btn-icon-prepend"></i>

                                                        </button>
                                                        <button type="button" class="btn btn-success btn-sm btn-icon">
                                                            <i class="fa fa-eye btn-icon-prepend"></i>

                                                        </button>
                                                        <button type="button" class="btn btn-info btn-sm btn-icon">
                                                            <i class="fa fa-redo btn-icon-prepend"></i>

                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td> Adelaide Blake </td>
                                                    <td>4 Orang</td>
                                                    <td>Novita</td>
                                                    <td>20 Mei 2021</td>
                                                    <td>Jl. Sisingamangaraja No.21, Candi, Kec. Candisari, Kota
                                                        Semarang, Jawa Tengah 50257</td>
                                                    <td><label class="badge badge-success badge-pill">Selesai</label>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-danger btn-sm btn-icon">
                                                            <i class="fa fa-trash btn-icon-prepend"></i>

                                                        </button>
                                                        <button type="button" class="btn btn-warning btn-sm btn-icon">
                                                            <i class="fa fa-edit btn-icon-prepend"></i>

                                                        </button>
                                                        <button type="button" class="btn btn-success btn-sm btn-icon">
                                                            <i class="fa fa-eye btn-icon-prepend"></i>

                                                        </button>
                                                        <button type="button" class="btn btn-info btn-sm btn-icon">
                                                            <i class="fa fa-redo btn-icon-prepend"></i>

                                                        </button>
                                                    </td>
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
                <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Form Jadwal Permainan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="">Jenis Permainan</label>
                                        <select name="" id="jenis" class="form-control" onchange="jenis_game(this)">
                                            <option value="">Pilih Jenis Permainan</option>
                                            <option value="1">Clifford Wilson</option>
                                            <option value="2">Mary Payne</option>
                                            <option value="3">Adelaide Blake </option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="">Jumlah Pemain</label>
                                        <input type="text" class="form-control jml_pemain" name="" id="jml">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="">Host Permainan</label>
                                        <select name="" id="host" class="form-control">
                                            <option value="">Pilih Host</option>
                                            <option value="">Ahmad</option>
                                            <option value="">Meliodas</option>
                                            <option value="">Novita</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Tanggal Permainan</label>
                                        <div id="datepicker-popup" class="input-group date datepicker">
                                            <input type="text" class="form-control" id="tgl">
                                            <span class="input-group-addon input-group-append border-left">
                                                <span class="far fa-calendar input-group-text"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="">Alamat</label>
                                        <textarea name="" class="form-control" id="alamat" cols="30"
                                            rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="button" class="btn btn-primary" onclick="add()">Simpan</button>
                            </div>
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
    <script src="js/formpickers.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <script src="js/data-table.js"></script>
    <!-- End custom js for this page-->
    <script>
    function jenis_game(param) {
        var set_val = param.value;
        if (set_val == "1") {
            $('.jml_pemain').val('10');
        } else if (set_val == "2") {
            $('.jml_pemain').val('5');
        } else if (set_val == "3") {
            $('.jml_pemain').val('4');
        } else {
            $('.jml_pemain').val('');
        }
    }

    function add() {
        var count = $('table >tbody >tr').length;
        var nomor = count + 1;
        set_val = $('#jenis').val();
        if (set_val == "1") {
            var jenis = "Clifford Wilson";
        } else if (set_val == "2") {
            var jenis = "Mary Payne";
        } else if (set_val == "3") {
            var jenis = "Adelaide Blake";
        } else {

        }
        var html = '<tr>' +
            '<td>' + nomor + '</td>' +
            '<td>' + jenis + '</td>' +
            '<td>' + $('#jml').val() + '</td>' +
            '<td>' + $('#host').val() + '</td>' +
            '<td>' + $('#tgl').val() + '</td>' +
            '<td>' + $('#alamat').val() + '</td>' +
            '<th><label class="badge badge-warning badge-pill">Akan Datang</label></th>' +
            '<td>' +
            '<button type="button" class="btn btn-danger btn-sm btn-icon"><i class="fa fa-trash btn-icon-prepend"></i></button>' +
            '<button type="button" class="btn btn-warning btn-sm btn-icon"><i class="fa fa-edit btn-icon-prepend"></i></button>' +
            '<button type="button" class="btn btn-success btn-sm btn-icon"><i class="fa fa-eye btn-icon-prepend"></i></button>' +
            '<button type="button" class="btn btn-info btn-sm btn-icon"><i class="fa fa-redo btn-icon-prepend"></i></button>' +
            '</td>'
        '</tr>';

        $('#tb-main').append(html);

        swal({
                title: "Success!",
                text: "Berhasil Menyimpan Data",
                icon: "success"
            })
            .then(function() {
                $('#exampleModal').modal('hide');
            });
    }
    </script>
</body>

</html>