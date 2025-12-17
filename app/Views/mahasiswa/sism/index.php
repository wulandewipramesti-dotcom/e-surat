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
        <a href="<?= route_to('sism.create') ?>" class="btn btn-primary btn-sm">Tambah Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <?php 
            function statusBadge($status, $file_surat = null) {
                switch($status) {
                    case 'pending': return '<span class="badge bg-warning text-white">Pending</span>';
                    case 'diterima': return '<span class="badge bg-primary text-white">Diproses</span>';
                    case 'selesai': return '<span class="badge bg-success text-white">Selesai</span>';
                    case 'ditolak': return '<span class="badge bg-danger text-white">Ditolak</span>';
                    default: return '<span class="badge bg-secondary">'.esc($status).'</span>';
                }
            }
            ?>
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kegiatan</th>
                        <th>Lokasi Survey</th>
                        <th>Tanggal / Waktu</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php if($surats): $no=1; foreach($surats as $row): ?>
                    <?php $data = json_decode($row['data_surat'], true); ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= esc($data['nama'] ?? '-') ?></td>
                        <td><?= esc($data['kegiatan'] ?? '-') ?></td>
                        <td><?= esc($data['lokasi_survey'] ?? '-') ?></td>
                        <td>
                            <?= esc($data['tanggal'] ?? '-') ?><br>
                            <?= esc($data['waktu_mulai'] ?? '-') ?> - <?= esc($data['waktu_selesai'] ?? '-') ?>
                        </td>
                        <td><?= statusBadge($row['status'], $row['file_surat']) ?></td>
                        <td>
                            <?php if($row['status'] == 'pending'): ?>
                                <a href="<?= route_to('sism.detail', $row['id']) ?>" class="btn btn-sm btn-info">Detail</a>
                                <a href="<?= route_to('sism.edit', $row['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="<?= route_to('sism.delete', $row['id']) ?>" class="btn btn-sm btn-danger"
                                   onclick="return confirm('Yakin hapus surat ini?')">Hapus</a>
                            <?php elseif($row['status'] == 'diterima'): ?>
                                <span class="text-muted">Sedang diproses</span>
                            <?php elseif($row['status'] == 'selesai'): ?>
                                <a href="<?= base_url('uploads/surat/'.$row['file_surat']) ?>" target="_blank"
                                   class="btn btn-sm btn-success">⬇️ Unduh</a>
                            <?php elseif($row['status'] == 'ditolak'): ?>
                                <a href="<?= route_to('sism.edit', $row['id']) ?>" class="btn btn-sm btn-warning">Edit Ulang</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; else: ?>
                    <tr>
                        <td colspan="7">Belum ada data.</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
