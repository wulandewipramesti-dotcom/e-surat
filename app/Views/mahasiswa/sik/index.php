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
        <a href="<?= route_to('sik.create') ?>" class="btn btn-primary btn-sm">
            Tambah Data
        </a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Prodi</th>
                        <th>Semester</th>
                        <th>Tahun Ajaran</th>
                        <th>Tanggal Izin</th>
                        <th>Alasan</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (!empty($surats)): ?>
                        <?php $no = 1; foreach($surats as $row): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= esc($row['nim']) ?></td>
                            <td><?= esc($row['nama_mahasiswa']) ?></td>
                            <td><?= esc($row['prodi']) ?></td>
                            <td><?= esc($row['semester']) ?></td>
                            <td><?= esc($row['tahun_ajaran']) ?></td>
                            <td><?= esc($row['tanggal_izin']) ?></td>
                            <td><?= esc($row['alasan']) ?></td>
                            <td>
                                <span class="badge 
                                    <?= $row['status'] == 'Pending' ? 'badge-warning' : ($row['status'] == 'Disetujui' ? 'badge-success' : 'badge-danger') ?>">
                                    <?= esc($row['status']) ?>
                                </span>
                            </td>
                            <td>
                                <a href="<?= route_to('sik.edit', $row['id']) ?>" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="<?= route_to('sik.delete', $row['id']) ?>" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus data ini?')">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr><td colspan="11" class="text-center">Belum ada data surat izin kuliah.</td></tr>
                    <?php endif; ?>
                </tbody>

            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
