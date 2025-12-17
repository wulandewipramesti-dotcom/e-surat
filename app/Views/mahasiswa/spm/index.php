<?= $this->extend('layouts/sidebar_mahasiswa') ?>
<?= $this->section('content') ?>

<h1 class="h3 mb-4 text-gray-800">
    <i class="fas fa-envelope"></i> <?= esc($title) ?>
</h1>

<?php if(session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>
<?php if(session()->getFlashdata('error')): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
<?php endif; ?>

<div class="card">
    <div class="card-header">
        <a href="<?= route_to('spm.create') ?>" class="btn btn-primary btn-sm">Tambah Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Jurusan</th>
                        <th>Tempat Magang</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
             <tbody>
<?php $no = 1; foreach($surats as $row): ?>
    <?php $data = json_decode($row['data_surat'], true); // decode JSON ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= esc($data['nama'] ?? '-') ?></td>
        <td><?= esc($data['nim'] ?? '-') ?></td>
        <td><?= esc($data['jurusan'] ?? '-') ?></td>
        <td><?= esc($data['tempat_magang'] ?? '-') ?></td>
        <td><?= esc($data['tanggal_pengajuan'] ?? '-') ?></td>
        <td>
            <?php
                switch($row['status']){
                    case 'pending': echo '<span class="badge bg-warning text-white">Pending</span>'; break;
                    case 'diterima': echo '<span class="badge bg-primary text-white">Diproses</span>'; break;
                    case 'selesai': echo '<span class="badge bg-success text-white">Selesai</span>'; break;
                    case 'ditolak': echo '<span class="badge bg-danger text-white">Ditolak</span>'; break;
                    default: echo '<span class="badge bg-secondary">'.esc($row['status']).'</span>';
                }
            ?>
        </td>
        <td>
    <?php if($row['status'] == 'pending'): ?>
        <div class="btn-group" role="group">
            <a href="<?= route_to('spm.detail', $row['id']) ?>" class="btn btn-info btn-sm">Detail</a>
            <a href="<?= route_to('spm.edit', $row['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
            <a href="<?= route_to('spm.delete', $row['id']) ?>" class="btn btn-danger btn-sm"
               onclick="return confirm('Yakin hapus surat ini?')">Hapus</a>
        </div>
    <?php elseif($row['status'] == 'diterima'): ?>
        <span class="text-muted">Sedang diproses</span>
    <?php elseif($row['status'] == 'selesai'): ?>
        <a href="<?= base_url('uploads/surat/'.$row['file_surat']) ?>" target="_blank" class="btn btn-success btn-sm">⬇️ Unduh</a>
    <?php elseif($row['status'] == 'ditolak'): ?>
        <a href="<?= route_to('spm.edit', $row['id']) ?>" class="btn btn-warning btn-sm">Edit Ulang</a>
    <?php endif; ?>
</td>
    </tr>
<?php endforeach; ?>
</tbody>


            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
