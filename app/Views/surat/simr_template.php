<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Times New Roman; font-size: 12pt; }
        .center { text-align: center; }
        .bold { font-weight: bold; }
    </style>
</head>
<body>

<div class="center bold">
    <p>SURAT IZIN MEMINJAM RUANGAN</p>
</div>

<p>Yang bertanda tangan di bawah ini menerangkan bahwa:</p>

<table>
    <tr><td>Nama</td><td>: <?= esc($simr['nama']) ?></td></tr>
    <tr><td>NIM</td><td>: <?= esc($simr['nim']) ?></td></tr>
    <tr><td>Jurusan</td><td>: <?= esc($simr['jurusan']) ?></td></tr>
</table>

<p>
Akan menggunakan ruangan <b><?= esc($simr['ruangan']) ?></b>
pada tanggal <b><?= esc($simr['tanggal']) ?></b>
untuk kegiatan <b><?= esc($simr['kegiatan']) ?></b>.
</p>

<p>Demikian surat ini dibuat untuk digunakan sebagaimana mestinya.</p>

<br><br>
<p class="center">
    Mengetahui,<br>
    Bagian Akademik
</p>

</body>
</html>
