<?= $this->extend('layouts/sidebar_mahasiswa') ?>
<?= $this->section('content') ?>

<?php
// Ambil data JSON
$data = json_decode($surat['data_surat'], true) ?? [];
?>

<h4><?= esc($title) ?></h4>

<form action="<?= route_to('spm.update', $surat['id']) ?>" method="post">
    <?= csrf_field() ?>

    <div class="mb-3">
        <label>Nama Mahasiswa</label>
        <input type="text" name="nama" class="form-control" value="<?= esc($data['nama'] ?? '') ?>" readonly>
    </div>

    <div class="mb-3">
        <label>NIM</label>
        <input type="text" name="nim" class="form-control" value="<?= esc($data['nim'] ?? '') ?>" readonly>
    </div>

    <div class="mb-3">
        <label>Jurusan</label>
        <input type="text" name="jurusan" class="form-control" value="<?= esc($data['jurusan'] ?? '') ?>" required>
    </div>

    <div class="mb-3">
        <label>Tempat Magang</label>
        <input type="text" name="tempat_magang" class="form-control" value="<?= esc($data['tempat_magang'] ?? '') ?>" required>
    </div>

    <div class="mb-3">
        <label>Tanggal Pengajuan</label>
        <input type="date" name="tanggal_pengajuan" class="form-control" value="<?= esc($data['tanggal_pengajuan'] ?? '') ?>" required>
    </div>

    <button type="submit" class="btn btn-success">Update</button>
    <a href="<?= route_to('spm.index') ?>" class="btn btn-secondary">Kembali</a>
</form>

<?= $this->endSection() ?>
