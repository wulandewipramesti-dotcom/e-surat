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
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Semester</th>
                                            <th>Tahun Ajaran</th>
                                            <th>Nama Orangtua</th>
                                            <th>Pangkat</th>
                                            <th>Status</th>
                                            <th>action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                            <td class="text-center"></td>
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
 
