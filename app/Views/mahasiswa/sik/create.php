<?= $this->extend('layouts/sidebar_mahasiswa') ?>
<?= $this->section('content') ?>

<h1 class="h3 mb-4 text-gray-800">
    <i class="fas fa-envelope"></i> <?= esc($title) ?>
</h1>

<form action="<?= route_to('sik.store') ?>" method="post">
    <?= csrf_field() ?>

    <div class="card">
        <div class="card-body">

            <!-- USER ID (HIDDEN) -->
            <input type="hidden" name="user_id" value="<?= session()->get('user_id') ?>">

            <!-- NIM -->
            
            <!-- NAMA -->
            <div class="form-group">
                <label>Nama Mahasiswa</label>
                <input type="text"
                class="form-control"
                value="<?= esc(session()->get('nama')) ?>"
                readonly>
            </div>
            <div class="form-group">
                <label>NIM</label>
                <input type="text"
                       class="form-control"
                       value="<?= esc(session()->get('nim')) ?>"
                       readonly>
            </div>

            <!-- PROGRAM STUDI -->
            <div class="form-group">
                <label>Program Studi</label>
                <input type="text"
                       name="prodi"
                       class="form-control"
                       required>
            </div>

            <!-- SEMESTER -->
            <div class="form-group">
                <label>Semester</label>
                <input type="text"
                       name="semester"
                       class="form-control"
                       required>
            </div>

            <!-- TAHUN AJARAN -->
            <div class="form-group">
                <label>Tahun Ajaran</label>
                <input type="text"
                       name="tahun_ajaran"
                       class="form-control"
                       required>
            </div>

            <!-- TANGGAL IZIN -->
            <div class="form-group">
                <label>Tanggal Izin</label>
                <input type="date"
                       name="tanggal_izin"
                       class="form-control"
                       required>
            </div>

            <!-- ALASAN -->
            <div class="form-group">
                <label>Alasan</label>
                <textarea name="alasan"
                          class="form-control"
                          rows="3"
                          required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">
                <i class="fas fa-file-pdf"></i> Buat Surat
            </button>

            <a href="<?= base_url('mahasiswa/sik') ?>" class="btn btn-secondary ml-2">
                Kembali
            </a>

        </div>
    </div>
</form>

<?= $this->endSection() ?>
