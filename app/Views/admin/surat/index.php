<?= $this->extend('layouts/sidebar_admin') ?>
<?= $this->section('content') ?>

<h1 class="h3 mb-4"><?= esc($title) ?></h1>

<?php if(session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php elseif(session()->getFlashdata('error')): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
<?php endif; ?>

<div class="table-responsive">
<table class="table table-bordered table-striped text-center align-middle">
    <thead >
        <tr>
            <th>No</th>
            <th>Jenis Surat</th>
            <th>Mahasiswa</th>
            <th>Status</th>
            <th>Tanggal</th>
            <th>Detail</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($surats)): ?>
            <?php $no = 1; foreach ($surats as $s): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= strtoupper($s['jenis_surat']) ?></td>
                    <td>User ID: <?= esc($s['user_id']) ?></td>

                    <!-- STATUS -->
                    <td>
                        <?php if ($s['status'] == 'pending'): ?>
                            <span class="badge badge-warning px-3 py-2">Pending</span>

                        <?php elseif ($s['status'] == 'diterima'): ?>
                            <span class="badge badge-primary px-3 py-2">Sedang Diproses</span>

                        <?php elseif ($s['status'] == 'selesai'): ?>
                            <span class="badge badge-success px-3 py-2">Selesai</span>

                        <?php elseif ($s['status'] == 'ditolak'): ?>
                            <span class="badge badge-danger px-3 py-2">Ditolak</span>
                        <?php endif; ?>
                    </td>

                    <td><?= date('d-m-Y', strtotime($s['created_at'])) ?></td>

                    <!-- DETAIL -->
                    <td>
                        <a href="<?= base_url('admin/surat/detail/'.$s['id']) ?>" 
                           class="btn btn-sm btn-info">
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>

                    <!-- AKSI -->
                    <td>
                        <?php if ($s['status'] == 'pending'): ?>
                            <a href="<?= base_url('admin/surat/approve/'.$s['id']) ?>" 
                               class="btn btn-sm btn-success mb-1">
                                <i class="fas fa-check"></i> Terima
                            </a>
                            <a href="<?= base_url('admin/surat/reject/'.$s['id']) ?>" 
                               class="btn btn-sm btn-danger mb-1">
                                <i class="fas fa-times"></i> Tolak
                            </a>

                        <?php elseif ($s['status'] == 'diterima'): ?>
                            <a href="<?= base_url('admin/surat/detail/'.$s['id']) ?>" 
                               class="btn btn-sm btn-primary">
                                <i class="fas fa-upload"></i> Upload File
                            </a>

                        <?php elseif ($s['status'] == 'selesai'): ?>
                            <span class="text-success font-weight-bold">
                                <i class="fas fa-check-circle"></i> Selesai
                            </span>

                        <?php elseif ($s['status'] == 'ditolak'): ?>
                            <span class="text-danger font-weight-bold">
                                <i class="fas fa-times-circle"></i> Ditolak
                            </span>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="7">Tidak ada data surat</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
</div>

<?= $this->endSection() ?>
