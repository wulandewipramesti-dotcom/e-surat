<?= $this->extend('layouts/sidebar_admin') ?>
<?= $this->section('content') ?>

<h1 class="h3 mb-4 text-gray-800">
    <i class="fas fa-envelope-open"></i> <?= esc($title) ?>
</h1>

<div class="card shadow">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Mahasiswa</th>
                        <th>NIM</th>
                        <th>Jurusan</th>
                        <th>Tempat Magang / Kegiatan</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach($surats as $surat): ?>
                        <?php $data = json_decode($surat['data_surat'], true) ?? []; ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= esc($data['nama'] ?? '-') ?></td>
                            <td><?= esc($data['nim'] ?? '-') ?></td>
                            <td><?= esc($data['jurusan'] ?? '-') ?></td>
                            <td>
                                <?= esc($data['tempat_magang'] ?? $data['kegiatan'] ?? '-') ?>
                            </td>
                            <td><?= esc($data['tanggal'] ?? $data['tanggal_pengajuan'] ?? '-') ?></td>
                            <td>
                                <span class="badge bg-success">Selesai</span>
                            </td>
                            <td>
                                <?php if(!empty($surat['file_surat'])): ?>
                                    <a href="<?= base_url('uploads/surat/'.$surat['file_surat']) ?>" class="btn btn-success btn-sm" target="_blank">⬇️ Unduh</a>
                                <?php else: ?>
                                    <span class="text-muted">Belum ada file</span>
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
