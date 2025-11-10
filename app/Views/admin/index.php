<?= $this->extend('layouts/sidebar_admin') ?>


<?= $this->section('content') ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
    <i class="fas fa-user-alt mr-2"></i>    
    <?= esc($title) ?></h1>
    <div class="card">
        <div class="card-header">
        <div>
            <a href="" class="btnn btn-sm btn-primary"> 
            Tambah Data</a>
        </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                               <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead style="color: black";>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jenis Surat</th>
                        <th>Info</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td>1</td>
                        <td>Tiger Nixon</td>
                        <td>Tiger@test</td>
                        <td>Surat Keterangan Kuliah</td>
                        <td>
                            <span class="badge badge-danger badge-pill">
                                Menunggu
                            </span>
                        </td>
                        <td>
                             <!-- Tombol untuk melihat detail request -->
                            <a href="" 
                                 class="btn btn-warning btn-sm" 
                                 data-toggle="tooltip" title="Lihat Request">
                                 <i class="fas fa-exclamation-circle"></i>
                            </a>
                             <button class="btn btn-success btn-sm" data-toggle="tooltip" title="Setujui">
                                <i class="fas fa-check"></i> Setujui
                            </button>
                             <button class="btn btn-danger btn-sm" data-toggle="tooltip" title="Tolak">
                                <i class="fas fa-times"></i> Tolak
                            </button>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>2</td>
                        <td>Bunga</td>
                        <td>Tiger@bunga</td>
                        <td>Surat Meminjam Ruangan</td>
                        <td>
                            <span class="badge badge-danger badge-pill">
                                Menunggu
                            </span>
                        </td>
                        <td>
                            <a href="" 
                                 class="btn btn-warning btn-sm" 
                                 data-toggle="tooltip" title="Lihat Request">
                                 <i class="fas fa-exclamation-circle"></i>
                            </a>
                            <button class="btn btn-success btn-sm" data-toggle="tooltip" title="Setujui">
                                <i class="fas fa-check"></i> Setujui
                            </button>
                             <button class="btn btn-danger btn-sm" data-toggle="tooltip" title="Tolak">
                                <i class="fas fa-times"></i> Tolak
                            </button>
                        </td>
                    </tr>

                     <tr class="text-center">
                        <td>2</td>
                        <td>Bunga</td>
                        <td>Tiger@bunga</td>
                        <td>Surat Meminjam Ruangan</td>
                        <td>
                            <span class="badge badge-danger badge-pill">
                               Diproses
                            </span>
                        </td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm">
                            <i class="fas fa-print"></i> Cetak Surat
                            </a>

                        </td>
                    </tr>
                    

                </tbody>
            </table>
                            </div>
        </div>
    </div>

<?= $this->endSection() ?>
 
