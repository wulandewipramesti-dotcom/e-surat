<?= $this->extend('layouts/sidebar_mahasiswa') ?>

<?= $this->section('content') ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
    <i class="fas fa-tachometer-alt mr-2"></i>    
    <?= esc($title) ?></h1>

    <div class="row">

         <!-- SPM -->
    <div class="col-xl-3 col-md-6 mb-4">
    <a href="<?= base_url('mahasiswa/spm') ?>" class="text-decoration-none">
        <div class="card bg-warning text-white shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                            Surat Permohonan Magang
                        </div>
                        <div class="h5 mb-0 font-weight-bold">
                            <?= esc($totalSPM ?? 0) ?>
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
<!-- SKAK -->
<div class="col-xl-3 col-md-6 mb-4">
    <a href="<?= base_url('mahasiswa/skak') ?>" class="text-decoration-none">
        <div class="card bg-success text-white shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                           Surat Keterangan Kuliah
                        </div>
                        <div class="h5 mb-0 font-weight-bold">
                             <?= esc($totalkak ?? 0) ?>
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

<!-- SISM -->
<div class="col-xl-3 col-md-6 mb-4">
    <a href="<?= base_url('mahasiswa/sism') ?>" class="text-decoration-none">
        <div class="card bg-primary text-white shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                          Surat Izin Survey Mata Kuliah
                        </div>
                        <div class="h5 mb-0 font-weight-bold">
                             <?= esc($totalsism?? 0) ?>
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
<!-- SIMR -->
<div class="col-xl-3 col-md-6 mb-4">
    <a href="<?= base_url('mahasiswa/simr') ?>" class="text-decoration-none">
        <div class="card bg-danger text-white shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                          Surat Izin Meminjam Ruangan
                        </div>
                        <div class="h5 mb-0 font-weight-bold">
                             <?= esc($totalsimr ?? 0) ?>
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
<div class="col-xl-3 col-md-6 mb-4">
    <a href="<?= base_url('mahasiswa/sik') ?>" class="text-decoration-none">
        <div class="card bg-danger text-white shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                          Surat Izin Kuliah
                        </div>
                        <div class="h5 mb-0 font-weight-bold">
                             <?= esc($totalsik ?? 0) ?>
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
 
