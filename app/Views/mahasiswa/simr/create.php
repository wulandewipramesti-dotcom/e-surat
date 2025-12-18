<?= $this->extend('layouts/sidebar_mahasiswa') ?>
<?= $this->section('content') ?>

<h1 class="h3 mb-4"><?= esc($title) ?></h1>

<form action="<?= base_url('mahasiswa/simr/store') ?>" method="post">

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
        <input type="text" name="ruangan" class="form-control" required>
    </div>

    <button class="btn btn-success">
        <i class="fas fa-paper-plane"></i> Submit & Cetak
    </button>

    <a href="<?= base_url('mahasiswa/simr') ?>" class="btn btn-secondary">
        Kembali
    </a>

</form>

<?= $this->endSection() ?>
