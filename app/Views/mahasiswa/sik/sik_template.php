<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Times New Roman; }
        table { width: 100%; }
        td { padding: 4px; }
    </style>
</head>
<body>

<h3 style="text-align:center;">SURAT IZIN KULIAH</h3>
<hr>

<table>
    <tr><td width="30%">NIM</td><td>: <?= $surat['nim'] ?></td></tr>
    <tr><td>Nama</td><td>: <?= $surat['nama_mahasiswa'] ?></td></tr>
    <tr><td>Prodi</td><td>: <?= $surat['prodi'] ?></td></tr>
    <tr><td>Semester</td><td>: <?= $surat['semester'] ?></td></tr>
    <tr><td>Tahun Ajaran</td><td>: <?= $surat['tahun_ajaran'] ?></td></tr>
</table>

<p>
Dengan ini mengajukan izin tidak mengikuti perkuliahan pada tanggal
<b><?= $surat['tanggal_izin'] ?></b>
dikarenakan <b><?= $surat['alasan'] ?></b>.
</p>

<p style="text-align:right; margin-top:50px;">
Hormat saya,<br><br><br>
<b><?= $surat['nama_mahasiswa'] ?></b>
</p>

</body>
</html>
