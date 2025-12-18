<?= $this->extend('layouts/sidebar_admin') ?>
<?= $this->section('content') ?>

<h1 class="h3 mb-4 text-gray-800">
    <i class="fas fa-tachometer-alt mr-2"></i><?= esc($title) ?>
</h1>

<div class="row">

   <div class="col-xl-3 col-md-6 mb-4">
    <a href="<?= base_url('admin/users') ?>" class="text-decoration-none">
        <div class="card bg-primary text-white shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                            Total Admin
                        </div>
                        <div class="h5 mb-0 font-weight-bold">
                            <?= esc($totalAdmin ?? 0) ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-shield fa-2x text-white-50"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>

    <div class="col-xl-3 col-md-6 mb-4">
    <a href="<?= base_url('admin/users') ?>" class="text-decoration-none">
        <div class="card bg-danger text-white shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                            Total Mahasiswa
                        </div>
                        <div class="h5 mb-0 font-weight-bold">
                            <?= esc($totalUsers ?? 0) ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-graduate fa-2x text-white-50"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>

    <!-- SURAT MASUK -->
    
    <div class="col-xl-3 col-md-6 mb-4">
    <a href="<?= base_url('admin/surat') ?>" class="text-decoration-none">
        <div class="card bg-warning text-white shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                            Surat Masuk
                        </div>
                        <div class="h5 mb-0 font-weight-bold">
                            <?= esc($totalSuratMasuk ?? 0) ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-envelope fa-2x text-white-50"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>


    <div class="col-xl-3 col-md-6 mb-4">
    <a href="<?= base_url('admin/suratKeluar') ?>" class="text-decoration-none">
        <div class="card bg-success text-white shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                            Surat Keluar
                        </div>
                        <div class="h5 mb-0 font-weight-bold">
                            <?= esc($totalSuratKeluar ?? 0) ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-paper-plane fa-2x text-white-50"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>


</div>

<?= $this->endSection() ?>
