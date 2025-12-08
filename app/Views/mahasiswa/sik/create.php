<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="d-flex justify-content-center mt-4">
<div class="card shadow-lg" style="width: 80%; border-radius: 12px;">

    <div class="card-header bg-white">
        <h4 class="text-dark font-weight-bold mb-0">Tambah Surat Izin Kuliah</h4>
    </div>

    <div class="card-body">
        <form action="<?= route_to('sik.store') ?>" method="post">
            <?= csrf_field() ?>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="font-weight-bold">Nama Mahasiswa *</label>
                    <input type="text" name="nama_mahasiswa" class="form-control" required placeholder="Masukkan nama mahasiswa">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="font-weight-bold">NIM *</label>
                    <input type="text" name="nim" class="form-control" required placeholder="Masukkan NIM">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="font-weight-bold">Semester *</label>
                    <select name="semester" class="form-control" required>
                        <option value="">-- Pilih Semester --</option>
                        <option value="Ganjil">Ganjil</option>
                        <option value="Genap">Genap</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="font-weight-bold">Tahun Ajaran *</label>
                    <input type="text" name="tahun_ajaran" class="form-control" required placeholder="2024/2025">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="font-weight-bold">Tanggal Izin *</label>
                    <input type="date" name="tanggal_izin" class="form-control" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="font-weight-bold">Alasan *</label>
                    <input type="text" name="alasan" class="form-control" required placeholder="Alasan izin">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="font-weight-bold">Prodi *</label>
                    <input type="text" name="prodi" class="form-control" required placeholder="Program Studi">
                </div>
            </div>

            <div class="text-right mt-3">
                <a href="<?= route_to('sik.index') ?>" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>
    </div>

</div>
</div>

<?= $this->endSection() ?>
