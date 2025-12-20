<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial; font-size: 12pt; }
        h2 { text-align: center; }
        table { width: 100%; margin-top: 20px; }
        td { padding: 5px; }
    </style>
</head>
<body>

<h2>SURAT IZIN MEMINJAM RUANGAN</h2>

<table>
    <tr><td>Nama</td><td>: <?= esc($simr['nama']) ?></td></tr>
    <tr><td>NIM</td><td>: <?= esc($simr['nim']) ?></td></tr>
    <tr><td>Jurusan</td><td>: <?= esc($simr['jurusan']) ?></td></tr>
    <tr><td>Kegiatan</td><td>: <?= esc($simr['kegiatan']) ?></td></tr>
    <tr><td>Tanggal</td><td>: <?= esc($simr['tanggal']) ?></td></tr>
    <tr><td>Waktu</td>
        <td>: <?= esc($simr['waktu_mulai']) ?> - <?= esc($simr['waktu_selesai']) ?></td>
    </tr>
    <tr><td>Ruangan</td><td>: <?= esc($simr['ruangan']) ?></td></tr>
</table>

<br><br>
<p>Demikian surat ini dibuat untuk dipergunakan sebagaimana mestinya.</p>

<br><br>
<p style="text-align:right;">
    Hormat saya,<br><br><br>
    <?= esc($simr['nama']) ?>
</p>

</body>
</html>
