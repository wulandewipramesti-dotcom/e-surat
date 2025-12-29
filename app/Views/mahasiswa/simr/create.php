<?= $this->extend('layouts/sidebar_mahasiswa') ?>
<?= $this->section('content') ?>

<h1 class="h3 mb-4 text-gray-800"><?= esc($title) ?></h1>

<form action="<?= route_to('simr.store') ?>" method="post">
    <?= csrf_field() ?>

    <div class="card">
        <div class="card-body">

            <div class="form-group">
                <label>Nama Mahasiswa</label>
                <input type="text" class="form-control"
                       value="<?= session()->get('nama') ?>" readonly>
            </div>

            <div class="form-group">
                <label>NIM</label>
                <input type="text" class="form-control"
                       value="<?= session()->get('nim') ?>" readonly>
            </div>

            <div class="form-group">
                <label>Kegiatan</label>
                <input type="text" name="kegiatan" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Tanggal</label>
                <input type="date" name="tanggal" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Waktu Mulai</label>
                <input type="time" name="waktu_mulai" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Waktu Selesai</label>
                <input type="time" name="waktu_selesai" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Ruangan</label>
                <select name="ruangan" class="form-control" required>
                    <option value="">-- Pilih Ruangan --</option>
                    <option>Lab 1</option>
                    <option>Lab 2</option>
                    <option>Ruangan 1</option>
                    <option>Ruangan 2</option>
                    <option>Ruangan 3</option>
                    <option>Ruangan 4</option>
                    <option>Ruangan 5</option>
                    <option>Ruangan 6</option>
                </select>
            </div>

            <button class="btn btn-primary">
                <i class="fas fa-file-pdf"></i> Buat Surat
            </button>

            <a href="<?= base_url('mahasiswa/simr') ?>" class="btn btn-secondary ml-2">
                Reset
            </a>

        </div>
    </div>
</form>

<?= $this->endSection() ?>
