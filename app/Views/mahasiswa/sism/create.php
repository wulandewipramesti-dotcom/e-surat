<?= $this->extend('layouts/sidebar_mahasiswa') ?>
<?= $this->section('content') ?>

<h4><?= esc($title) ?></h4>

<form action="<?= route_to('sism.store') ?>" method="post">
    <?= csrf_field() ?>

    <!-- Hidden fields otomatis dari session -->
    <input type="hidden" name="nama" value="<?= esc(session()->get('nama')) ?>">
    <input type="hidden" name="nim" value="<?= esc(session()->get('nim')) ?>">
    <input type="hidden" name="jurusan" value="<?= esc(session()->get('jurusan')) ?>">

    <div class="mb-3">
        <label>Nama Mahasiswa</label>
        <input type="text" class="form-control" value="<?= esc(session()->get('nama')) ?>" readonly>
    </div>

    <div class="mb-3">
        <label>NIM</label>
        <input type="text" class="form-control" value="<?= esc(session()->get('nim')) ?>" readonly>
    </div>

    <div class="mb-3">
        <label>Jurusan</label>
        <input type="text" class="form-control" value="<?= esc(session()->get('jurusan')) ?>" readonly>
    </div>

    <div class="mb-3">
        <label>Kegiatan Survey</label>
        <input type="text" name="kegiatan" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Lokasi Survey</label>
        <input type="text" name="lokasi_survey" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Tanggal</label>
        <input type="date" name="tanggal" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Waktu Mulai</label>
        <input type="time" name="waktu_mulai" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Waktu Selesai</label>
        <input type="time" name="waktu_selesai" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="<?= route_to('sism.index') ?>" class="btn btn-secondary">Kembali</a>
</form>

<?= $this->endSection() ?>
