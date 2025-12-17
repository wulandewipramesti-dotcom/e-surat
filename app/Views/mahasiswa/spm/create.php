    <?= $this->extend('layouts/sidebar_mahasiswa') ?>
    <?= $this->section('content') ?>

    <h4><?= esc($title) ?></h4>

    <form action="<?= route_to('spm.store') ?>" method="post">
        <?= csrf_field() ?>

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
        <input type="text" name="jurusan" class="form-control" required>
    </div>

        <div class="mb-3">
            <label>Tempat Magang</label>
            <input type="text" name="tempat_magang" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Tanggal Pengajuan</label>
            <input type="date" name="tanggal_pengajuan" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="<?= route_to('spm.index') ?>" class="btn btn-secondary">Kembali</a>
    </form>

    <?= $this->endSection() ?>
