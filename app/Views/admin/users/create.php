<?= $this->extend('layouts/sidebar_admin') ?>
<?= $this->section('content') ?>

<h1 class="h3 mb-4">Tambah User</h1>

<div class="card shadow-sm">
    <div class="card-body">

        <form action="<?= base_url('admin/users/store') ?>" method="post">
            <?= csrf_field() ?>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Role</label>
                    <select name="role" class="form-control" required>
                        <option value="admin">Admin</option>
                        <option value="mahasiswa">Mahasiswa</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label>NIM</label>
                    <input type="text" name="nim" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Jurusan</label>
                    <input type="text" name="jurusan" class="form-control">
                </div>
            </div>

            <div class="text-right">
                <a href="<?= base_url('admin/users') ?>" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>

        </form>

    </div>
</div>

<?= $this->endSection() ?>
