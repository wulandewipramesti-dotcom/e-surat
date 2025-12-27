<?= $this->extend('layouts/sidebar_mahasiswa') ?>
<?= $this->section('content') ?>

<h4><?= esc($title) ?></h4>

<table class="table table-bordered">
<tr><th>Nama</th><td><?= esc($data['nama'] ?? '-') ?></td></tr>
<tr><th>NIM</th><td><?= esc($data['nim'] ?? '-') ?></td></tr>
<tr><th>Jurusan</th><td><?= esc($data['jurusan'] ?? '-') ?></td></tr>
<tr><th>Nama Orang Tua</th><td><?= esc($data['nama_orangtua'] ?? '-') ?></td></tr>
<tr><th>Pangkat</th><td><?= esc($data['pangkat'] ?? '-') ?></td></tr>
<tr><th>Semester</th><td><?= esc($data['semester'] ?? '-') ?></td></tr>
<tr><th>Tahun Ajaran</th><td><?= esc($data['tahun_ajaran'] ?? '-') ?></td></tr>
<tr><th>Status</th><td><?= esc($surat['status']) ?></td></tr>
</table>

<a href="<?= route_to('skak.index') ?>" class="btn btn-secondary">Kembali</a>

<?= $this->endSection() ?>
