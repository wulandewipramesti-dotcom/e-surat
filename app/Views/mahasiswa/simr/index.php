<?= $this->extend('layouts/sidebar_mahasiswa') ?>
<?= $this->section('content') ?>

<h1 class="h3 mb-4"><?= esc($title) ?></h1>

<a href="<?= base_url('mahasiswa/simr/create') ?>" class="btn btn-primary mb-3">
    <i class="fas fa-plus"></i> Tambah Surat
</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Kegiatan</th>
            <th>Tanggal</th>
            <th>Ruangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($simr): ?>
            <?php $no = 1; foreach ($simr as $s): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= esc($s['kegiatan']) ?></td>
                <td><?= date('d-m-Y', strtotime($s['tanggal'])) ?></td>
                <td><?= esc($s['ruangan']) ?></td>
                <td>
                    <a href="<?= base_url('mahasiswa/simr/cetak/'.$s['id']) ?>"
                       class="btn btn-sm btn-success">
                        <i class="fas fa-file-pdf"></i> PDF
                    </a>
                </td>
            </tr>
            <?php endforeach ?>
        <?php else: ?>
            <tr>
                <td colspan="5" class="text-center">Belum ada data</td>
            </tr>
        <?php endif ?>
    </tbody>
</table>

<?= $this->endSection() ?>
