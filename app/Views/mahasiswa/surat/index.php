<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<h1 class="h3 mb-4 text-gray-800">
    <i class="fas fa-envelope"></i> <?= esc($title) ?>
</h1>

<div class="card">
    <div class="card-header">
        <!-- Link ke halaman create -->
        <a href="<?= route_to('surat.create') ?>" class="btn btn-primary btn-sm">
            Tambah Data
        </a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>No</th>
                        <th>Semester</th>
                        <th>Tahun Ajaran</th>
                        <th>Nama Orang Tua</th>
                        <th>Pangkat</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1; foreach($surats as $row): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row['semester'] ?></td>
                        <td><?= $row['tahun_ajaran'] ?></td>
                        <td><?= $row['nama_orangtua'] ?></td>
                        <td><?= $row['pangkat'] ?></td>
                        <td>
                            <span class="badge badge-warning">Menunggu</span>
                        </td>
                        <td>
                            <a href="<?= route_to('surat.edit', $row['id']) ?>" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i>
                            </a>


                            <a href="/surat/delete/<?= $row['id'] ?>" class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin menghapus data ini?')">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
