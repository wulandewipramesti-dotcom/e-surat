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
    <link href="<?= base_url('sbadmin2/css/custom.css'); ?>" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('sbadmin2/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('sbadmin2/vendor/datatables/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet">
    
    

    <!-- Custom CSS tambahan -->
    <style>
        /* Sidebar full biru tua */
        #accordionSidebar {
            background: #062963 !important; /* biru tua */
        }

        /* Collapse inner dropdown */
        .collapse-inner {
            padding-left: 15px;
            padding-right: 15px;
            background: transparent;
        }

        /* Teks dropdown bisa wrap */
        .sidebar .collapse-inner .nav-link {
            white-space: normal;
            overflow: visible;
            color: #ffffff;
            font-size: 16px;
        }

        /* Hover dropdown */
        .sidebar .collapse-inner .nav-link:hover {
            background-color: #031d4f !important;
            color: #ffffff !important;
        }

        /* Bullet di samping link */
        .bullet {
            width: 8px;
            height: 8px;
            background: white;
            border-radius: 50%;
            display: inline-block;
            margin-right: 10px;
        }

        /* Navbar Topbar tetap putih */
        .navbar-light.bg-white {
            background-color: #ffffff !important;
        }

        /* Footer tetap putih */
        .sticky-footer.bg-white {
            background-color: #ffffff !important;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="sidebar-brand-text mx-3">E-Surat</div>
            </a>

            <hr class="sidebar-divider my-0">

            <li class="nav-item <?= (current_url() == base_url('menuDashboard')) ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('dashboard_mhs') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <hr class="sidebar-divider">
  
  <div class="sidebar-heading">Surat</div>

            <!-- Dropdown Surat Diproses Sendiri -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSendiri"
                   aria-expanded="true" aria-controls="collapseSendiri">
                    <i class="fas fa-envelope"></i>
                    <span>Surat Diproses Sendiri</span>
                </a>
                <div id="collapseSendiri" class="collapse" data-parent="#accordionSidebar">
                    <div class="collapse-inner">
                        <ul class="list-unstyled mb-0">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('mahasiswa/sik') ?>"><span class="nav-text">Surat Izin Kuliah</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('mahasiswa/simr') ?>"><span class="nav-text">Surat Izin Meminjam Ruangan</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('mahasiswa/sic') ?>"><span class="nav-text">Surat Izin Cuti</span></a>
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
                <div id="collapseAkademik" class="collapse" data-parent="#accordionSidebar">
                    <div class="collapse-inner">
                        <ul class="list-unstyled mb-0">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('mahasiswa/spm') ?>"><span class="nav-text">Surat Permohonan Magang</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('mahasiswa/sism') ?>"><span class="nav-text">Surat Izin Survey Matakuliah</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('mahasiswa/skak') ?>"><span class="nav-text">Surat Keterangan Aktif Kuliah</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider d-none d-md-block">
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?= esc(session()->get('nama')) ?>
                                </span>
                                <img class="img-profile rounded-circle"
                                     src="<?= base_url('sbadmin2/img/undraw_profile.svg'); ?>">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                 aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <div class="badge badge-success text-uppercase text-center">
                                         <?= esc(session()->get('role')) ?>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cog fa-sm fa-fw mr-2 text-gray-400"></i>Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout
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

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

     <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi Logout</h5>
                <button class="close" type="button" data-dismiss="modal">
                    <span>×</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin logout dan kembali ke halaman utama?
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a class="btn btn-danger" href="<?= base_url('logout') ?>">
                    Ya, Logout
                </a>
            </div>
        </div>
    </div>
</div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('sbadmin2/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('sbadmin2/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
    <script src="<?= base_url('sbadmin2/js/sb-admin-2.min.js'); ?>"></script>
    <!-- Page level plugins -->
    <script src="<?= base_url('sbadmin2/vendor/datatables/jquery.dataTables.min.js'); ?>"></script>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
<?php if(session()->getFlashdata('success')): ?>
Swal.fire({
    icon: 'success',
    title: 'Berhasil',
    text: '<?= session()->getFlashdata('success') ?>',
    timer: 2000,
    showConfirmButton: false
});
<?php endif; ?>

<?php if(session()->getFlashdata('error')): ?>
Swal.fire({
    icon: 'error',
    title: 'Gagal',
    text: '<?= session()->getFlashdata('error') ?>'
});
<?php endif; ?>
</script>