<!-- Sidebar Mahasiswa -->
<div class="sidebar-heading">Surat</div>

<!-- Dropdown Surat Diproses Sendiri -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSendiri"
       aria-expanded="true" aria-controls="collapseSendiri">
        <i class="fas fa-envelope"></i>
        <span>Surat Diproses Sendiri</span>
    </a>
    <div id="collapseSendiri" class="collapse" data-parent="#accordionSidebar">
        <div class="collapse-inner">
            <ul class="list-unstyled mb-0">
                <li><a class="nav-link" href="<?= base_url('mahasiswa/surat_izin_kuliah') ?>">Surat Izin Kuliah</a></li>
                <li><a class="nav-link" href="<?= base_url('mahasiswa/surat_pinjam_ruangan') ?>">Surat Izin Meminjam Ruangan</a></li>
                <li><a class="nav-link" href="<?= base_url('mahasiswa/surat_cuti') ?>">Surat Izin Cuti</a></li>
            </ul>
        </div>
    </div>
</li>

<!-- Dropdown Surat Diproses Akademik -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAkademik"
       aria-expanded="true" aria-controls="collapseAkademik">
        <i class="fas fa-envelope"></i>
        <span>Surat Diproses Akademik</span>
    </a>
    <div id="collapseAkademik" class="collapse" data-parent="#accordionSidebar">
        <div class="collapse-inner">
            <ul class="list-unstyled mb-0">
                <li><a class="nav-link" href="<?= base_url('mahasiswa/surat_magang') ?>">Surat Permohonan Magang</a></li>
                <li><a class="nav-link" href="<?= base_url('mahasiswa/surat_survey') ?>">Surat Izin Survey Matakuliah</a></li>
                <li><a class="nav-link" href="<?= base_url('mahasiswa/surat_aktif_kuliah') ?>">Surat Keterangan Aktif Kuliah</a></li>
            </ul>
        </div>
    </div>
</li>
