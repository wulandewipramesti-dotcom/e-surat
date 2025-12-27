<?= $this->extend('layouts/sidebar_mahasiswa') ?>
<?= $this->section('content') ?>

<h4><?= esc($title) ?></h4>

<form action="<?= route_to('skak.update', $surat['id']) ?>" method="post">
<?= csrf_field() ?>

<div class="mb-3">
    <label>Nama</label>
    <input class="form-control" value="<?= esc($data['nama'] ?? '') ?>" readonly>
</div>

<div class="mb-3">
    <label>NIM</label>
    <input class="form-control" value="<?= esc($data['nim'] ?? '') ?>" readonly>
</div>

<div class="mb-3">
    <label>Jurusan</label>
    <input class="form-control" value="<?= esc($data['jurusan'] ?? '') ?>" readonly>
</div>

<div class="mb-3">
    <label>Nama Orang Tua *</label>
    <input type="text" name="nama_orangtua" class="form-control"
           value="<?= esc($data['nama_orangtua'] ?? '') ?>" required>
</div>

<div class="mb-3">
    <label>Pangkat</label>
    <input type="text" name="pangkat" class="form-control"
           value="<?= esc($data['pangkat'] ?? '') ?>">
</div>

<div class="mb-3">
    <label>Semester *</label>
    <select name="semester" class="form-control">
        <option value="Ganjil" <?= ($data['semester'] ?? '')=='Ganjil'?'selected':'' ?>>Ganjil</option>
        <option value="Genap" <?= ($data['semester'] ?? '')=='Genap'?'selected':'' ?>>Genap</option>
    </select>
</div>

<div class="mb-3">
    <label>Tahun Ajaran *</label>
    <input type="text" name="tahun_ajaran" class="form-control"
           value="<?= esc($data['tahun_ajaran'] ?? '') ?>" required>
</div>

<button class="btn btn-primary">Update</button>
<a href="<?= route_to('skak.index') ?>" class="btn btn-secondary">Batal</a>
</form>

<?= $this->endSection() ?>
