<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="d-flex justify-content-center mt-4">
<div class="card shadow-lg" style="width: 80%; border-radius: 12px;">
    
    <div class="card-header bg-white">
        <h4 class="text-dark font-weight-bold mb-0">
            Edit Surat Keterangan Aktif Kuliah
        </h4>
    </div>

    <div class="card-body">
        <form action="<?= route_to('skak.update', $surat['id']) ?>" method="post">
            <?= csrf_field() ?>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="font-weight-bold">Nama Orang Tua *</label>
                    <input type="text" name="nama_orangtua" class="form-control" required
                           value="<?= esc($data['nama_orangtua'] ?? '') ?>">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="font-weight-bold">Pangkat / Golongan</label>
                    <input type="text" name="pangkat" class="form-control"
                           value="<?= esc($data['pangkat'] ?? '') ?>">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="font-weight-bold">Semester *</label>
                    <select name="semester" class="form-control" required>
                        <option value="Ganjil"
                            <?= ($data['semester'] ?? '') == 'Ganjil' ? 'selected' : '' ?>>
                            Ganjil
                        </option>
                        <option value="Genap"
                            <?= ($data['semester'] ?? '') == 'Genap' ? 'selected' : '' ?>>
                            Genap
                        </option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="font-weight-bold">Tahun Ajaran *</label>
                    <input type="text" name="tahun_ajaran" class="form-control" required
                           value="<?= esc($data['tahun_ajaran'] ?? '') ?>">
                </div>
            </div>

            <div class="text-right mt-3">
                <a href="<?= route_to('skak.index') ?>" class="btn btn-secondary">
                    Batal
                </a>
                <button type="submit" class="btn btn-primary">
                    Update Data
                </button>
            </div>
        </form>
    </div>
</div>
</div>

<?= $this->endSection() ?>
