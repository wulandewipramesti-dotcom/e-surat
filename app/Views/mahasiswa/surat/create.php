<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<h1 class="h3 mb-4 text-gray-800">
    <i class="fas fa-envelope"></i> <?= esc($title) ?>
</h1>

<div class="card">
    <div class="card-body">
        <form action="<?= route_to('surat.store') ?>" method="post">
            <?= csrf_field() ?>

            <div class="form-group">
                <label for="semester">Semester</label>
                <input type="text" name="semester" id="semester" class="form-control" placeholder="Masukkan semester" required>
            </div>

            <div class="form-group">
                <label for="tahun_ajaran">Tahun Ajaran</label>
                <input type="text" name="tahun_ajaran" id="tahun_ajaran" class="form-control" placeholder="Masukkan tahun ajaran" required>
            </div>

            <div class="form-group">
                <label for="nama_orangtua">Nama Orang Tua</label>
                <input type="text" name="nama_orangtua" id="nama_orangtua" class="form-control" placeholder="Masukkan nama orang tua" required>
            </div>

            <div class="form-group">
                <label for="pangkat">Pangkat</label>
                <input type="text" name="pangkat" id="pangkat" class="form-control" placeholder="Masukkan pangkat (jika ada)">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= route_to('surat.index') ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
