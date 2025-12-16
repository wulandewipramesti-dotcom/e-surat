<?= $this->extend('layouts/sidebar_admin') ?>
<?= $this->section('content') ?>

<h1 class="h3 mb-4">Detail Surat</h1>

<?php if(session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php elseif(session()->getFlashdata('error')): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
<?php endif; ?>

<table class="table table-bordered">
    <tr>
        <th>User ID</th>
        <td><?= esc($surat['user_id']) ?></td>
    </tr>
    <tr>
        <th>Jenis Surat</th>
        <td><?= esc($surat['jenis_surat']) ?></td>
    </tr>
    <tr>
        <th>Status</th>
        <td><?= esc($surat['status']) ?></td>
    </tr>
    <tr>
        <th>Tanggal Dibuat</th>
        <td><?= date('d-m-Y H:i:s', strtotime($surat['created_at'])) ?></td>
    </tr>
</table>

<h4>Data Surat Mahasiswa</h4>
<table class="table table-bordered">
    <?php foreach($dataSurat as $key => $value): ?>
    <tr>
        <th><?= ucwords(str_replace('_', ' ', $key)) ?></th>
        <td><?= esc($value) ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<?php if($surat['status'] == 'pending'): ?>
    <a href="<?= base_url('admin/surat/approve/'.$surat['id']) ?>" class="btn btn-success">Terima</a>
    <a href="<?= base_url('admin/surat/reject/'.$surat['id']) ?>" class="btn btn-danger">Tolak</a>
<?php elseif(strtolower($surat['status']) == 'diterima'): ?>
    <h4 class="mt-4">Upload Surat Resmi</h4>
    <form action="<?= base_url('admin/surat/upload/'.$surat['id']) ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <input type="file" name="file_surat" class="form-control" required>
        <button type="submit" class="btn btn-primary mt-2">Upload</button>
    </form>
<?php elseif($surat['status'] == 'selesai' && !empty($surat['file_surat'])): ?>
    <p class="mt-3">File Surat: 
        <a href="<?= base_url('writable/uploads/surat/'.$surat['file_surat']) ?>" target="_blank">
            <?= esc($surat['file_surat']) ?>
        </a>
    </p>
<?php endif; ?>

<a href="<?= base_url('admin/surat') ?>" class="btn btn-secondary mt-3">Kembali</a>

<?= $this->endSection() ?>
