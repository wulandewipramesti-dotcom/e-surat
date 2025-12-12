<?= $this->extend('layouts/sidebar_mahasiswa') ?>
<?= $this->section('content') ?>

<div class="d-flex justify-content-center mt-4">
<div class="card shadow-lg" style="width:80%; border-radius:12px;">

    <div class="card-header bg-white">
        <h4 class="text-dark font-weight-bold mb-0">Tambah Surat Izin Survey</h4>
    </div>

    <div class="card-body">
        <form action="<?= route_to('sism.store') ?>" method="post">
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
                    <label>Kegiatan Survey *</label>
                    <input type="text" name="kegiatan" class="form-control" required>
                </div>

                <div class="col-md-12 mb-3">
                    <label>Lokasi Survey *</label>
                    <input type="text" name="lokasi_survey" class="form-control" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label>Tanggal *</label>
                    <input type="date" name="tanggal" class="form-control" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label>Waktu Mulai *</label>
                    <input type="time" name="waktu_mulai" class="form-control" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label>Waktu Selesai *</label>
                    <input type="time" name="waktu_selesai" class="form-control" required>
                </div>
            </div>

            <div class="text-right mt-3">
                <a href="<?= route_to('sism.index') ?>" class="btn btn-secondary">Batal</a>
                <button class="btn btn-primary">Simpan</button>
            </div>

        </form>
    </div>

</div>
</div>

<?= $this->endSection() ?>
