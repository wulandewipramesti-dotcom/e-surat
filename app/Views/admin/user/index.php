<?= $this->extend('layouts/app') ?>


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
                <thead class="bg-primary text-white text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Surat</th>
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
                                Belum Disetujui
                            </span>
                        </td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>

                </tbody>
            </table>
                            </div>
        </div>
    </div>

<?= $this->endSection() ?>
 
