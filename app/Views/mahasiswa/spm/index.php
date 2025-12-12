<?= $this->extend('layouts/sidebar_mahasiswa') ?>
<?= $this->section('content') ?>

<h3 class="mb-4 text-dark">Surat Permohonan Magang</h3>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>

<div class="card">
    <div class="card-header">
        <a href="<?= route_to('spm.create') ?>" class="btn btn-primary btn-sm">Tambah Data</a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center">
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
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= esc($row['nama']) ?></td>
                        <td><?= esc($row['nim']) ?></td>
                        <td><?= esc($row['jurusan']) ?></td>
                        <td><?= esc($row['tempat_magang']) ?></td>
                        <td><?= esc($row['tanggal_pengajuan']) ?></td>
                        <td><span class="badge bg-warning"><?= esc($row['status']) ?></span></td>

                        <td>
                            <a href="<?= route_to('spm.edit', $row['id']) ?>" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>

                            <a href="<?= route_to('spm.delete', $row['id']) ?>" 
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin menghapus data ini?')">
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
