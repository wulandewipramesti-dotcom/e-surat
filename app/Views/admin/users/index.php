<?= $this->extend('layouts/sidebar_admin') ?>
<?= $this->section('content') ?>

<h1 class="h3 mb-4"><?= esc($title) ?></h1>

<div class="card shadow-sm">
    <div class="card-body">

       <div class="d-flex justify-content-between mb-3">
    <h5 class="mb-0">Daftar Users</h5>
    <a href="<?= base_url('admin/users/create') ?>" class="btn btn-primary btn-sm">
        <i class="fas fa-plus"></i> Tambah User
    </a>
</div>


        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>NIM</th>
                        <th>Jurusan</th>
                        <th>Role</th>
                        <th>Tanggal Daftar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php if (!empty($users)): ?>
                    <?php $no=1; foreach($users as $u): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= esc($u['nama']) ?></td>
                        <td><?= esc($u['email']) ?></td>
                        <td><?= esc($u['nim'] ?? '-') ?></td>
                        <td><?= esc($u['jurusan'] ?? '-') ?></td>
                        <td>
                            <span class="badge <?= $u['role']=='admin'?'badge-danger':'badge-primary' ?>">
                                <?= ucfirst($u['role']) ?>
                            </span>
                        </td>
                        <td><?= date('d-m-Y', strtotime($u['created_at'])) ?></td>
                       <td>
    <div class="d-flex justify-content-center gap-1">
        <a href="<?= base_url('admin/users/edit/'.$u['id']) ?>"
           class="btn btn-sm btn-warning">
            <i class="fas fa-edit"></i>
        </a>

        <a href="<?= base_url('admin/users/delete/'.$u['id']) ?>"
           onclick="return confirm('Yakin hapus user ini?')"
           class="btn btn-sm btn-danger">
            <i class="fas fa-trash"></i>
        </a>
    </div>
</td>

                    </tr>
                    <?php endforeach ?>
                <?php else: ?>
                    <tr>
                        <td colspan="8">Belum ada user</td>
                    </tr>
                <?php endif ?>
                </tbody>
            </table>
        </div>

    </div>
</div>

<?= $this->endSection() ?>
