<?= $this->extend('layouts/sidebar_mahasiswa') ?>
<?= $this->section('content') ?>

<h4><?= esc($title) ?></h4>

<form action="<?= route_to('skak.store') ?>" method="post">
    <?= csrf_field() ?>

    <div class="mb-3">
        <label>Nama Mahasiswa</label>
        <input class="form-control" value="<?= esc(session()->get('nama')) ?>" readonly>
    </div>

    <div class="mb-3">
        <label>NIM</label>
        <input class="form-control" value="<?= esc(session()->get('nim')) ?>" readonly>
    </div>

    <div class="mb-3">
        <label>Jurusan</label>
        <input class="form-control" value="<?= esc(session()->get('jurusan')) ?>" readonly>
    </div>

    <div class="mb-3">
        <label>Nama Orang Tua *</label>
        <input type="text" name="nama_orangtua" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Pangkat</label>
        <input type="text" name="pangkat" class="form-control">
    </div>

    <div class="mb-3">
        <label>Semester *</label>
        <select name="semester" class="form-control" required>
            <option value="">-- Pilih --</option>
            <option value="Ganjil">Ganjil</option>
            <option value="Genap">Genap</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Tahun Ajaran *</label>
        <input type="text" name="tahun_ajaran" class="form-control" required>
    </div>

    <button class="btn btn-success">Simpan</button>
    <a href="<?= route_to('skak.index') ?>" class="btn btn-secondary">Kembali</a>
</form>

<?= $this->endSection() ?>
