<?= $this->extend('layouts/sidebar_admin') ?>
<?= $this->section('content') ?>

<h1 class="h3 mb-4"><?= esc($title) ?></h1>

<div class="card shadow-sm">
    <div class="card-body">
        <form action="<?= base_url('admin/users/update/'.$user['id']) ?>" method="post">
            <?= csrf_field() ?>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control"
                           value="<?= esc($user['nama']) ?>" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control"
                           value="<?= esc($user['email']) ?>" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Password (opsional)</label>
                    <input type="password" name="password" class="form-control"
                           placeholder="Kosongkan jika tidak diubah">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Role</label>
                    <select name="role" class="form-control" required>
                        <option value="admin" <?= $user['role']=='admin'?'selected':'' ?>>Admin</option>
                        <option value="mahasiswa" <?= $user['role']=='mahasiswa'?'selected':'' ?>>Mahasiswa</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label>NIM</label>
                    <input type="text" name="nim" class="form-control"
                           value="<?= esc($user['nim']) ?>">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Jurusan</label>
                    <input type="text" name="jurusan" class="form-control"
                           value="<?= esc($user['jurusan']) ?>">
                </div>
            </div>

            <div class="text-right">
                <a href="<?= base_url('admin/users') ?>" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
