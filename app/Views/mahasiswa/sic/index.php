<?= $this->extend('layouts/sidebar_mahasiswa') ?>
<?= $this->section('content') ?>

<h1 class="h3 mb-4 text-gray-800">
    <i class="fas fa-envelope"></i> <?= esc($title) ?>
</h1>

<?php if(session()->getFlashdata('success')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('success') ?>
    </div>
<?php endif; ?>

<div class="card">
    <div class="card-header">
        <a href="<?= route_to('sic.create') ?>" class="btn btn-primary btn-sm">
            Tambah Data
        </a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center">
                <thead>
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
                    <?php if (!empty($surats)): ?>
                        <?php $no = 1; foreach($surats as $row): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= esc($row['semester']) ?></td>
                            <td><?= esc($row['tahun_ajaran']) ?></td>
                            <td><?= esc($row['nama_orangtua']) ?></td>
                            <td><?= esc($row['pangkat']) ?></td>
                            <td>
                                <span class="badge badge-warning"><?= esc($row['status']) ?></span>
                            </td>
                            <td>
                                <a href="<?= route_to('sic.edit', $row['id']) ?>" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="<?= route_to('sic.delete', $row['id']) ?>" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus data ini?')">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr><td colspan="7" class="text-center">Belum ada data surat.</td></tr>
                    <?php endif; ?>
                </tbody>

            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
