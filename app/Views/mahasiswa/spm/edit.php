<?= $this->extend('layouts/sidebar_mahasiswa') ?>
<?= $this->section('content') ?>

<h3 class="mb-4 text-dark"><?= esc($title) ?></h3>

<div class="card shadow">
    <div class="card-body">

        <form action="<?= route_to('spm.update', $surat['id']) ?>" method="post">
            <?= csrf_field() ?>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Nama *</label>
                    <input type="text" name="nama" class="form-control" value="<?= esc($surat['nama']) ?>" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>NIM *</label>
                    <input type="text" name="nim" class="form-control" value="<?= esc($surat['nim']) ?>" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Jurusan *</label>
                    <input type="text" name="jurusan" class="form-control" value="<?= esc($surat['jurusan']) ?>" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Tempat Magang *</label>
                    <input type="text" name="tempat_magang" class="form-control" value="<?= esc($surat['tempat_magang']) ?>" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Tanggal Pengajuan *</label>
                    <input type="date" name="tanggal_pengajuan" class="form-control" value="<?= esc($surat['tanggal_pengajuan']) ?>" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="pending"  <?= $surat['status']=='pending'?'selected':'' ?>>Pending</option>
                        <option value="approved" <?= $surat['status']=='approved'?'selected':'' ?>>Approved</option>
                        <option value="rejected" <?= $surat['status']=='rejected'?'selected':'' ?>>Rejected</option>
                    </select>
                </div>
            </div>

            <button class="btn btn-primary">Update</button>
            <a href="<?= route_to('spm.index') ?>" class="btn btn-secondary">Batal</a>

        </form>

    </div>
</div>

<?= $this->endSection() ?>
