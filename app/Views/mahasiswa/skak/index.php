<?= $this->extend('layouts/sidebar_mahasiswa') ?>
<?= $this->section('content') ?>

<h1 class="h3 mb-4 text-gray-800">
    <i class="fas fa-envelope"></i> <?= esc($title) ?>
</h1>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php elseif (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
<?php endif; ?>

<div class="card shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span>Daftar Surat</span>
        <a href="<?= route_to('skak.create') ?>" class="btn btn-primary btn-sm">
            <i class="fas fa-plus"></i> Tambah Surat
        </a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Semester</th>
                        <th>Tahun Ajaran</th>
                        <th>Nama Orang Tua</th>
                        <th>Pangkat</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                <?php if (!empty($surats)): ?>
                    <?php $no = 1; foreach ($surats as $row): ?>
                        <?php $data = json_decode($row['data_surat'], true); ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= esc($data['semester'] ?? '-') ?></td>
                            <td><?= esc($data['tahun_ajaran'] ?? '-') ?></td>
                            <td><?= esc($data['nama_orangtua'] ?? '-') ?></td>
                            <td><?= esc($data['pangkat'] ?? '-') ?></td>

                            <!-- STATUS -->
                            <td>
                                <?php if ($row['status'] === 'pending'): ?>
                                    <span class="badge badge-warning">Pending</span>
                                <?php elseif ($row['status'] === 'diterima'): ?>
                                    <span class="badge badge-primary">Diproses</span>
                                <?php elseif ($row['status'] === 'selesai'): ?>
                                    <span class="badge badge-success">Selesai</span>
                                <?php else: ?>
                                    <span class="badge badge-danger">Ditolak</span>
                                <?php endif; ?>
                            </td>

                            <!-- AKSI -->
                            <td>
                                <?php if ($row['status'] === 'pending'): ?>

                                    <a href="<?= base_url('mahasiswa/skak/edit/'.$row['id']) ?>"
                                       class="btn btn-sm btn-warning mb-1">
                                        ✏️ Edit
                                    </a>

                                    <a href="<?= base_url('mahasiswa/skak/delete/'.$row['id']) ?>"
                                       onclick="return confirm('Yakin ingin menghapus surat ini?')"
                                       class="btn btn-sm btn-danger">
                                        🗑 Hapus
                                    </a>

                                <?php elseif ($row['status'] === 'diterima'): ?>

                                    <span class="text-muted">
                                        <i class="fas fa-clock"></i> Menunggu admin
                                    </span>

                                <?php elseif ($row['status'] === 'selesai' && !empty($row['file_surat'])): ?>

                                    <a href="<?= base_url('uploads/surat/'.$row['file_surat']) ?>"
                                       target="_blank"
                                       class="btn btn-sm btn-success">
                                        ⬇️ Download
                                    </a>

                                <?php elseif ($row['status'] === 'ditolak'): ?>

                                    <a href="<?= base_url('mahasiswa/skak/edit/'.$row['id']) ?>"
                                       class="btn btn-sm btn-warning">
                                        ✏️ Edit Ulang
                                    </a>

                                <?php else: ?>
                                    <span class="text-muted">-</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7">Belum ada data surat</td>
                    </tr>
                <?php endif; ?>
                </tbody>

            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
