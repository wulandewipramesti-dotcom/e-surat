<?= $this->extend('layouts/sidebar_mahasiswa') ?>
<?= $this->section('content') ?>

<?php
// Ambil data JSON dari controller
$data = $data ?? [];
?>

<h4><?= esc($title) ?></h4>

<form action="<?= route_to('sism.update', $surat['id']) ?>" method="post">
    <?= csrf_field() ?>

    <div class="mb-3">
        <label>Nama Mahasiswa</label>
        <input type="text" class="form-control" value="<?= esc($data['nama'] ?? '') ?>" readonly>
    </div>

    <div class="mb-3">
        <label>NIM</label>
        <input type="text" class="form-control" value="<?= esc($data['nim'] ?? '') ?>" readonly>
    </div>

    <div class="mb-3">
        <label>Jurusan</label>
        <input type="text" class="form-control" value="<?= esc($data['jurusan'] ?? '') ?>" readonly>
    </div>

    <div class="mb-3">
        <label>Kegiatan Survey</label>
        <input type="text" name="kegiatan" class="form-control" value="<?= esc($data['kegiatan'] ?? '') ?>" required>
    </div>

    <div class="mb-3">
        <label>Lokasi Survey</label>
        <input type="text" name="lokasi_survey" class="form-control" value="<?= esc($data['lokasi_survey'] ?? '') ?>" required>
    </div>

    <div class="row">
        <div class="col-md-4 mb-3">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="<?= esc($data['tanggal'] ?? '') ?>" required>
        </div>
        <div class="col-md-4 mb-3">
            <label>Waktu Mulai</label>
            <input type="time" name="waktu_mulai" class="form-control" value="<?= esc($data['waktu_mulai'] ?? '') ?>" required>
        </div>
        <div class="col-md-4 mb-3">
            <label>Waktu Selesai</label>
            <input type="time" name="waktu_selesai" class="form-control" value="<?= esc($data['waktu_selesai'] ?? '') ?>" required>
        </div>
    </div>

    <button type="submit" class="btn btn-success">Update</button>
    <a href="<?= route_to('sism.index') ?>" class="btn btn-secondary">Kembali</a>
</form>

<?= $this->endSection() ?>
