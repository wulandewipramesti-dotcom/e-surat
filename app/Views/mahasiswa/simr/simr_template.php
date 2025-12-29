<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <style>
        @page { margin: 1.5cm 2cm; }
        body { 
            font-family: 'Arial', sans-serif; 
            line-height: 1.6; 
            color: #333;
            margin: 0;
            padding: 0;
        }

        /* --- Header Styles --- */
        .header-table {
            width: 100%;
            border-bottom: 2px solid #062963;
            padding-bottom: 10px;
            margin-bottom: 25px;
        }
        .logo-text {
            font-size: 26px;
            font-weight: bold;
            color: #062963;
            letter-spacing: 2px;
        }
        .iso-icons {
            text-align: right;
            font-size: 10px;
            color: #555;
        }

        /* --- Document Info --- */
        .doc-title {
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            text-decoration: underline;
            margin-bottom: 30px;
            color: #000;
        }

        .meta-data {
            font-size: 14px;
            margin-bottom: 20px;
        }

        .recipient {
            margin-left: 50%;
            margin-bottom: 30px;
            font-size: 14px;
        }

        /* --- Content Body --- */
        .content-text {
            text-align: justify;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .info-table {
            width: 90%;
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
            font-size: 14px;
            margin-bottom: 20px;
        }
        .info-table td {
            padding: 5px;
            vertical-align: top;
        }

        /* --- Footer Styles --- */
        .footer-info {
            position: fixed;
            bottom: 20px;
            width: 100%;
            font-size: 9px;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }
        .footer-col {
            width: 33.3%;
            vertical-align: top;
            color: #444;
        }
        .blue-bar-bottom {
            height: 12px;
            background: linear-gradient(to right, #ffc107 30%, #062963 30%);
            width: 100%;
            position: fixed;
            bottom: 0;
        }

        .signature {
            margin-top: 50px;
            float: right;
            width: 250px;
            text-align: center;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <table class="header-table">
        <tr>
            <td><div class="logo-text">ALFA PRIMA</div></td>
            <td class="iso-icons">
                <strong>ISO 9001:2015</strong> | <strong>ISO 21001:2018</strong>
            </td>
        </tr>
    </table>

    <div class="doc-title">SURAT IZIN MEMINJAM RUANGAN</div>

    <table class="meta-data">
        <tr>
            <td width="60">Nomor</td>
            <td width="10">:</td>
            <td><?= date('Y/m/d') ?>/SIMR/AP-DPS/<?= esc($simr['nim']) ?></td>
        </tr>
        <tr>
            <td>Hal</td>
            <td>:</td>
            <td>Permohonan Peminjaman Ruangan</td>
        </tr>
    </table>

    <div class="recipient">
        Kepada Yth.<br>
        <b>Bagian Sarana dan Prasarana</b><br>
        Kampus Alfa Prima<br>
        di Tempat
    </div>

    <div class="content-text">
        Dengan hormat,<br>
        Bersama surat ini, saya yang bertanda tangan di bawah ini mengajukan permohonan izin untuk meminjam fasilitas ruangan dengan rincian sebagai berikut:
    </div>

    <table class="info-table">
        <tr>
            <td width="150">Nama Peminjam</td>
            <td width="10">:</td>
            <td><b><?= esc($simr['nama']) ?></b></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><?= esc($simr['nim']) ?></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><?= esc($simr['jurusan']) ?></td>
        </tr>
        <tr>
            <td>Nama Kegiatan</td>
            <td>:</td>
            <td><?= esc($simr['kegiatan']) ?></td>
        </tr>
        <tr>
            <td>Ruangan yang Dipinjam</td>
            <td>:</td>
            <td><b><?= esc($simr['ruangan']) ?></b></td>
        </tr>
        <tr>
            <td>Hari / Tanggal</td>
            <td>:</td>
            <td><?= esc($simr['tanggal']) ?></td>
        </tr>
        <tr>
            <td>Waktu</td>
            <td>:</td>
            <td><?= esc($simr['waktu_mulai']) ?> - <?= esc($simr['waktu_selesai']) ?> WITA</td>
        </tr>
    </table>

    <div class="content-text">
        Demikian permohonan ini saya sampaikan. Saya berkomitmen untuk menjaga kebersihan dan ketertiban ruangan selama digunakan. Atas izin dan bantuan Bapak/Ibu, saya ucapkan terima kasih.
    </div>

    <div class="signature">
        Denpasar, <?= date('d F Y') ?><br>
        Hormat saya,<br><br><br><br>
        <b>( <?= esc($simr['nama']) ?> )</b>
    </div>

    <div class="footer-info">
        <table width="100%">
            <tr>
                <td class="footer-col">
                    <b>ALFA PRIMA DENPASAR</b><br>
                    Jl. Hayam Wuruk 186 Denpasar<br>
                    (0361) 232422
                </td>
                <td class="footer-col">
                    <b>ALFA PRIMA SINGARAJA</b><br>
                    Jl. Serma Karma No.88, Buleleng<br>
                    (0362) 3435453
                </td>
                <td class="footer-col">
                    <b>ALFA PRIMA KARANGASEM</b><br>
                    Jl. Nenas, Subagan, Karangasem<br>
                    (0363) 2787499
                </td>
            </tr>
        </table>
        <div style="text-align: center; color: #062963; font-weight: bold; margin-top: 5px;">www.alfaprima.id</div>
    </div>

    <div class="blue-bar-bottom"></div>

</body>
</html>