<?= $this->extend('layouts/sidebar_mahasiswa') ?>
<?= $this->section('content') ?>

<div class="d-flex justify-content-center mt-4">
<div class="card shadow-lg" style="width: 80%; border-radius: 12px;">

    <div class="card-header bg-white">
        <h4 class="text-dark font-weight-bold mb-0">Edit Surat Izin Meminjam Ruangan</h4>
    </div>

    <div class="card-body">
        <form action="<?= route_to('simr.update', $surat['id']) ?>" method="post">
            <?= csrf_field() ?>
            <!-- Hapus method spoofing, pakai POST biasa -->

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="font-weight-bold">Nama *</label>
                    <input type="text" name="nama" class="form-control" value="<?= esc($surat['nama']) ?>" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="font-weight-bold">NIM *</label>
                    <input type="text" name="nim" class="form-control" value="<?= esc($surat['nim']) ?>" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="font-weight-bold">Jurusan *</label>
                    <input type="text" name="jurusan" class="form-control" value="<?= esc($surat['matkul']) ?>" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="font-weight-bold">Kegiatan *</label>
                    <input type="text" name="kegiatan" class="form-control" value="<?= esc($surat['kegiatan']) ?>" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="font-weight-bold">Tanggal *</label>
                    <input type="date" name="tanggal" class="form-control" value="<?= esc($surat['tanggal']) ?>" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="font-weight-bold">Waktu Mulai *</label>
                    <input type="time" name="waktu_mulai" class="form-control" value="<?= esc($surat['waktu_mulai']) ?>" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="font-weight-bold">Waktu Selesai *</label>
                    <input type="time" name="waktu_selesai" class="form-control" value="<?= esc($surat['waktu_selesai']) ?>" required>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="font-weight-bold">Ruangan *</label>
                    <input type="text" name="ruangan" class="form-control" value="<?= esc($surat['ruangan']) ?>" required>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="font-weight-bold">Status</label>
                    <select name="status" class="form-control">
                        <option value="pending" <?= $surat['status'] == 'pending' ? 'selected' : '' ?>>Pending</option>
                        <option value="approved" <?= $surat['status'] == 'approved' ? 'selected' : '' ?>>Approved</option>
                        <option value="rejected" <?= $surat['status'] == 'rejected' ? 'selected' : '' ?>>Rejected</option>
                    </select>
                </div>
            </div>

            <div class="text-right mt-3">
                <a href="<?= route_to('simr.index') ?>" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>

        </form>
    </div>

</div>
</div>

<?= $this->endSection() ?>
