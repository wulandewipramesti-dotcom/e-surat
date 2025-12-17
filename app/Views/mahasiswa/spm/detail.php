<?= $this->extend('layouts/sidebar_mahasiswa') ?>
<?= $this->section('content') ?>

<?php
// Decode JSON data_surat
$data = json_decode($surat['data_surat'], true) ?? [];

// Fungsi untuk badge status
function statusBadge($status) {
    switch($status) {
        case 'pending': return '<span class="badge bg-warning text-dark">Pending</span>';
        case 'diproses': return '<span class="badge bg-primary">Diproses</span>';
        case 'selesai': return '<span class="badge bg-success">Selesai</span>';
        case 'ditolak': return '<span class="badge bg-danger">Ditolak</span>';
        default: return '<span class="badge bg-secondary">'.esc($status).'</span>';
    }
}
?>

<h1 class="h3 mb-4 text-gray-800">
    <i class="fas fa-envelope"></i> <?= esc($title) ?>
</h1>

<div class="card">
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Nama Mahasiswa</th>
                <td><?= esc($data['nama'] ?? '-') ?></td>
            </tr>
            <tr>
                <th>NIM</th>
                <td><?= esc($data['nim'] ?? '-') ?></td>
            </tr>
            <tr>
                <th>Jurusan</th>
                <td><?= esc($data['jurusan'] ?? '-') ?></td>
            </tr>
            <tr>
                <th>Tempat Magang</th>
                <td><?= esc($data['tempat_magang'] ?? '-') ?></td>
            </tr>
            <tr>
                <th>Tanggal Pengajuan</th>
                <td><?= esc($data['tanggal_pengajuan'] ?? '-') ?></td>
            </tr>
            <tr>
                <th>Status</th>
                <td><?= statusBadge($surat['status']) ?></td>
            </tr>
        </table>

        <a href="<?= route_to('spm.index') ?>" class="btn btn-secondary mt-3">Kembali</a>
    </div>
</div>

<?= $this->endSection() ?>
