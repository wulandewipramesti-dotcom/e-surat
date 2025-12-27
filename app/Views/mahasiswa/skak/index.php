<?= $this->extend('layouts/sidebar_mahasiswa') ?>
<?= $this->section('content') ?>

<h4 class="mb-3"><?= esc($title) ?></h4>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('success') ?>
    </div>
<?php endif; ?>

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span>Daftar Surat</span>
        <a href="<?= route_to('skak.create') ?>" class="btn btn-primary btn-sm">
            + Tambah Surat
        </a>
    </div>

    <div class="card-body table-responsive">
        <table class="table table-bordered table-striped text-center align-middle">
            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jurusan</th>
                    <th>Semester</th>
                    <th>Tahun</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

            <?php if (empty($surats)): ?>
                <tr>
                    <td colspan="8" class="text-muted">
                        Belum ada pengajuan surat
                    </td>
                </tr>
            <?php endif; ?>

            <?php $no = 1; foreach ($surats as $row): ?>
                <?php
                    $data = json_decode($row['data_surat'], true) ?? [];

                    // ===== FALLBACK AMAN =====
                    $nama    = $row['nama']    ?? $data['nama']    ?? session()->get('nama');
                    $nim     = $row['nim']     ?? $data['nim']     ?? session()->get('nim');
                    $jurusan = $row['jurusan'] ?? $data['jurusan'] ?? session()->get('jurusan');
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= esc($nama) ?></td>
                    <td><?= esc($nim) ?></td>
                    <td><?= esc($jurusan) ?></td>
                    <td><?= esc($data['semester'] ?? '-') ?></td>
                    <td><?= esc($data['tahun_ajaran'] ?? '-') ?></td>

                    <!-- STATUS -->
                    <td>
                        <?php
                            switch ($row['status']) {
                                case 'pending':
                                    echo '<span class="badge bg-warning text-dark">Pending</span>';
                                    break;
                                case 'ditolak':
                                    echo '<span class="badge bg-danger">Ditolak</span>';
                                    break;
                                case 'diterima':
                                    echo '<span class="badge bg-primary">Diproses</span>';
                                    break;
                                case 'selesai':
                                    echo '<span class="badge bg-success">Selesai</span>';
                                    break;
                            }
                        ?>
                    </td>

                    <!-- AKSI -->
                    <td>
                        <div class="d-flex justify-content-center gap-1 flex-wrap">

                            <?php if ($row['status'] === 'pending'): ?>
                                <a href="<?= route_to('skak.detail', $row['id']) ?>"
                                   class="btn btn-info btn-sm">Detail</a>

                                <a href="<?= route_to('skak.edit', $row['id']) ?>"
                                   class="btn btn-warning btn-sm">Edit</a>

                                <a href="<?= route_to('skak.delete', $row['id']) ?>"
                                   onclick="return confirm('Yakin ingin menghapus surat ini?')"
                                   class="btn btn-danger btn-sm">Hapus</a>

                            <?php elseif ($row['status'] === 'ditolak'): ?>
                                <a href="<?= route_to('skak.edit', $row['id']) ?>"
                                   class="btn btn-warning btn-sm">Edit Ulang</a>

                            <?php elseif ($row['status'] === 'diterima'): ?>
                                <span class="text-muted">Sedang Diproses</span>

                            <?php elseif ($row['status'] === 'selesai' && !empty($row['file_surat'])): ?>
                                <a href="<?= base_url('uploads/surat/'.$row['file_surat']) ?>" target="_blank" class="btn btn-success btn-sm">⬇️ Unduh</a>
                            <?php endif; ?>

                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>
