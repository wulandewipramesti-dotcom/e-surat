<?= $this->extend('layouts/sidebar_mahasiswa') ?>
<?= $this->section('content') ?>

<?php
// Ambil data JSON dari SISM
$data = json_decode($surat['data_surat'], true) ?? [];

// Fungsi badge status
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
                <td><?= esc($data['nama'] ?? session()->get('nama')) ?></td>
            </tr>
            <tr>
                <th>NIM</th>
                <td><?= esc($data['nim'] ?? session()->get('nim')) ?></td>
            </tr>
            <tr>
                <th>Jurusan</th>
                <td><?= esc($data['jurusan'] ?? session()->get('jurusan')) ?></td>
            </tr>
            <tr>
                <th>Kegiatan Survey</th>
                <td><?= esc($data['kegiatan'] ?? '-') ?></td>
            </tr>
            <tr>
                <th>Lokasi Survey</th>
                <td><?= esc($data['lokasi_survey'] ?? '-') ?></td>
            </tr>
            <tr>
                <th>Tanggal</th>
                <td><?= esc($data['tanggal'] ?? '-') ?></td>
            </tr>
            <tr>
                <th>Waktu Mulai</th>
                <td><?= esc($data['waktu_mulai'] ?? '-') ?></td>
            </tr>
            <tr>
                <th>Waktu Selesai</th>
                <td><?= esc($data['waktu_selesai'] ?? '-') ?></td>
            </tr>
            <tr>
                <th>Status</th>
                <td><?= statusBadge($surat['status']) ?></td>
            </tr>
        </table>

        <a href="<?= route_to('sism.index') ?>" class="btn btn-secondary mt-3">Kembali</a>
    </div>
</div>

<?= $this->endSection() ?>
