<?= $this->extend('layouts/app') ?>


<?= $this->section('content') ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
   <i class="fas fa-envelope"></i>    
    <?= esc($title) ?></h1>
    <div class="card">
        <div class="card-header">
        <div>
            <a href="<?= route_to('surat.create') ?>" class="btn btn-sm btn-primary"> 
            Tambah Data</a>
        </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                               <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-primary text-white text-center">
                    <tr>
                        <th>No</th>
                        <th>Semester</th>
                        <th>Tahun Ajaran</th>
                        <th>Nama Orang Tua</th>
                        <th>Pangkat</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   <?php $i=1; foreach($surats as $surat): ?>
<tr class="text-center">
    <td><?= $i++ ?></td>
    <td><?= $surat['semester'] ?></td>
    <td><?= $surat['tahun_ajaran'] ?></td>
    <td><?= $surat['nama_orangtua'] ?></td>
    <td><?= $surat['pangkat'] ?></td>
    <td>
        <?php if($surat['status']=='pending'): ?>
            <span class="badge badge-warning badge-pill">Menunggu</span>
        <?php elseif($surat['status']=='approved'): ?>
            <span class="badge badge-success badge-pill">Disetujui</span>
        <?php else: ?>
            <span class="badge badge-danger badge-pill">Ditolak</span>
        <?php endif; ?>
    </td>
    <td>
        <a href="<?= route_to('surat.edit', $surat['id']) ?>" class="btn btn-warning btn-sm">
            <i class="fas fa-edit"></i>
        </a>
        <a href="<?= route_to('surat.delete', $surat['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">
            <i class="fas fa-trash"></i>
        </a>
    </td>
</tr>
<?php endforeach; ?>


                </tbody>
            </table>
                            </div>
        </div>
    </div>

<?= $this->endSection() ?>
 
