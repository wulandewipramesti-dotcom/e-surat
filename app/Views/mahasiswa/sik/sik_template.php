<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        @page { margin: 2cm; }
        body { 
            font-family: 'Arial', 'Helvetica', sans-serif; 
            line-height: 1.5; 
            color: #333;
            margin: 0;
            padding: 0;
        }
        /* Header Styling */
        .header-table {
            width: 100%;
            border-bottom: 2px solid #062963;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .logo-text {
            font-size: 24px;
            font-weight: bold;
            color: #062963;
            letter-spacing: 2px;
        }
        .iso-icons {
            text-align: right;
            font-size: 10px;
            color: #666;
        }
        
        /* Content Styling */
        .meta-data {
            margin-bottom: 30px;
            font-size: 14px;
        }
        .meta-data td {
            vertical-align: top;
            padding: 2px 0;
        }

        .recipient {
            margin-left: 50%;
            margin-bottom: 40px;
            font-size: 14px;
        }

        .content-body {
            text-align: justify;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .details-table {
            margin-left: 30px;
            margin-bottom: 30px;
            font-size: 14px;
        }
        .details-table td {
            padding: 3px 5px;
        }

        /* Footer Styling */
        .footer-info {
            position: fixed;
            bottom: 0;
            width: 100%;
            font-size: 9px;
            border-top: 1px solid #ccc;
            padding-top: 10px;
        }
        .footer-column {
            width: 33%;
            vertical-align: top;
        }
        .blue-bar {
            height: 10px;
            background: linear-gradient(to right, #ffc107 30%, #062963 30%);
            width: 100%;
            position: fixed;
            bottom: -20px;
        }
    </style>
</head>
<body>

    <table class="header-table">
        <tr>
            <td width="60%">
                <div class="logo-text">ALFA PRIMA</div>
            </td>
            <td class="iso-icons">
                <img src="https://via.placeholder.com/40" alt="ISO Logo"> 
                <img src="https://via.placeholder.com/40" alt="DGI Logo">
                <br>
                ISO 9001:2015 &nbsp;&nbsp; ISO 21001:2018
            </td>
        </tr>
    </table>

    <table class="meta-data">
        <tr>
            <td width="80px">Nomor</td>
            <td width="10px">:</td>
            <td>104/PEM/AP-DPS/AKD/I/XII/2025</td>
        </tr>
        <tr>
            <td>Hal</td>
            <td>:</td>
            <td><b>Permohonan Izin Tidak Mengikuti Perkuliahan</b></td>
        </tr>
    </table>

    <div class="recipient">
        Kepada<br>
        Yth. <b>Bapak/Ibu Dosen Pengampu</b><br>
        di -<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tempat
    </div>

    <div class="content-body">
        Dengan hormat,<br><br>
        Sehubungan dengan adanya keperluan yang tidak dapat ditinggalkan, maka bersama ini saya yang bertanda tangan di bawah ini:
    </div>

    <table class="details-table">
        <tr>
            <td width="120px">Nama</td>
            <td>:</td>
            <td><b><?= $surat['nama_mahasiswa'] ?></b></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><?= $surat['nim'] ?></td>
        </tr>
        <tr>
            <td>Prodi</td>
            <td>:</td>
            <td><?= $surat['prodi'] ?></td>
        </tr>
        <tr>
            <td>Semester</td>
            <td>:</td>
            <td><?= $surat['semester'] ?> (TA: <?= $surat['tahun_ajaran'] ?>)</td>
        </tr>
    </table>

    <div class="content-body">
        Bermaksud untuk memohon izin tidak mengikuti perkuliahan pada:<br>
    </div>

    <table class="details-table">
        <tr>
            <td width="120px">Hari/Tanggal</td>
            <td>:</td>
            <td><b><?= $surat['tanggal_izin'] ?></b></td>
        </tr>
        <tr>
            <td>Alasan</td>
            <td>:</td>
            <td><?= $surat['alasan'] ?></td>
        </tr>
    </table>

    <div class="content-body">
        Demikian surat permohonan izin ini saya sampaikan. Atas perhatian dan kebijaksanaannya, saya ucapkan terimakasih.
    </div>

    <table width="100%" style="margin-top: 50px; font-size: 14px;">
        <tr>
            <td width="60%"></td>
            <td style="text-align: center;">
                Hormat saya,<br><br><br><br>
                <b>( <?= $surat['nama_mahasiswa'] ?> )</b>
            </td>
        </tr>
    </table>

    <div class="footer-info">
        <table width="100%">
            <tr>
                <td class="footer-column">
                    <b>KAMPUS ALFA PRIMA DENPASAR</b><br>
                    Jl. Hayam Wuruk 186 Denpasar<br>
                    (0361) 232422
                </td>
                <td class="footer-column">
                    <b>KAMPUS ALFA PRIMA SINGARAJA</b><br>
                    Jl. Serma Karma No. 88, Buleleng<br>
                    (0362) 3435453
                </td>
                <td class="footer-column">
                    <b>KAMPUS ALFA PRIMA KARANGASEM</b><br>
                    Jl. Nenas, Subagan, Karangasem<br>
                    (0363) 2787499
                </td>
            </tr>
        </table>
        <div style="text-align: center; margin-top: 5px; color: #062963; font-weight: bold;">
            www.alfaprima.id
        </div>
    </div>

    <div class="blue-bar"></div>

</body>
</html>