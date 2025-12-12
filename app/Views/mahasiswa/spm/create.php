<?= $this->extend('layouts/sidebar_mahasiswa') ?>
<?= $this->section('content') ?>

<h3 class="mb-4 text-dark"><?= esc($title) ?></h3>

<div class="card shadow">
    <div class="card-body">

        <form action="<?= route_to('spm.store') ?>" method="post">
            <?= csrf_field() ?>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Nama *</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>NIM *</label>
                    <input type="text" name="nim" class="form-control" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Jurusan *</label>
                    <input type="text" name="jurusan" class="form-control" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Tempat Magang *</label>
                    <input type="text" name="tempat_magang" class="form-control" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Tanggal Pengajuan *</label>
                    <input type="date" name="tanggal_pengajuan" class="form-control" required>
                </div>
            </div>

            <button class="btn btn-primary">Simpan</button>
            <a href="<?= route_to('spm.index') ?>" class="btn btn-secondary">Batal</a>

        </form>

    </div>
</div>

<?= $this->endSection() ?>
