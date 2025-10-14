<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

   <title>E-Surat | <?= esc($title) ?></title>


    <!-- Custom fonts for this template-->
    <link href="<?= base_url('sbadmin2/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('sbadmin2/css/sb-admin-2.min.css'); ?>" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="sidebar-brand-text mx-3">E-Surat</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?= (current_url() == base_url('menuDashboard')) ? 'active' : '' ?>">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu Admin
            </div>


            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-inbox"></i>
                    <span>Surat di Proses User</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                     <i class="fas fa-share-square"></i>
                    
                    <span>Surat di Proses Akademik</span></a>
            </li>

             <!-- Heading -->
            <div class="sidebar-heading">
                Surat
            </div>


            <!-- Nav Item - Charts -->

 <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSendiri"
           aria-expanded="true" aria-controls="collapseSendiri">
            <i class="fas fa-inbox"></i>
            <span>Surat Diproses Sendiri</span>
        </a>
        <div id="collapseSendiri" class="collapse" aria-labelledby="headingSendiri" data-parent="#accordionSidebar">
            <div class="collapse-inner" style="padding-left: 15px; background: transparent; box-shadow: none;">
                <ul class="list-unstyled mb-0">
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center text-white-50" href="#">
                            <span class="bullet"></span>
                            <span class="nav-text">Surat Izin Kuliah</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center text-white-50" href="#">
                            <span class="bullet"></span>
                            <span class="nav-text">Surat Izin Meminjam Ruangan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center text-white-50" href="#">
                            <span class="bullet"></span>
                            <span class="nav-text">Surat Izin Cuti</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </li>

    <!-- Dropdown Surat Diproses Akademik -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAkademik"
           aria-expanded="true" aria-controls="collapseAkademik">
            <i class="fas fa-envelope"></i>
            <span>Surat Diproses Akademik</span>
        </a>
        <div id="collapseAkademik" class="collapse" aria-labelledby="headingAkademik" data-parent="#accordionSidebar">
            <div class="collapse-inner" style="padding-left: 15px; background: transparent; box-shadow: none;">
                <ul class="list-unstyled mb-0">
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center text-white-50" href="#">
                            <span class="bullet"></span>
                            <span class="nav-text">Surat Permohonan Magang</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center text-white-50" href="#">
                            <span class="bullet"></span>
                            <span class="nav-text">Surat Izin Survey Matakuliah</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center text-white-50" href="#">
                            <span class="bullet"></span>
                            <span class="nav-text">Surat Keterangan Aktif Kuliah</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </li>

</ul>

<!-- Custom CSS -->
<style>
/* Bulatan di samping link */
.bullet {
    width: 8px;
    height: 8px;
    background: white;
    border-radius: 50%;
    display: inline-block;
    margin-right: 10px;
}

/* Ukuran font lebih besar untuk nama surat */
.nav-text {
    font-size: 16px;
}

/* Hover effect: hanya teks yang berubah warna */
.collapse-inner .nav-link:hover .nav-text {
    color: white !important;
}
</style>


            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Akun ku</span>
                                <img class="img-profile rounded-circle"
                                    src="<?= base_url('sbadmin2/img/undraw_profile.svg'); ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <div class="badge badge-success justify-content-center d-flex">
                                        Admin
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cog fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                 <?= $this->renderSection('content') ?>


                </div>
                <!-- /.container-fluid -->


            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('sbadmin2/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('sbadmin2/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
    <script src="<?= base_url('sbadmin2/js/sb-admin-2.min.js'); ?>"></script>

</body>

</html>