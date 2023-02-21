<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="/user">
            <span>
                <img src="assets/src/img/logounla/logoUnla.png" alt="" width="30">
            </span>
            <span class="align-middle">LPPM-UNLA</span>
        </a>
        <ul class="sidebar-nav">
            <hr class="text text-white">
            <li class="sidebar-header">
                Menu
            </li>

            <li class="sidebar-item active">
                <a class="sidebar-link" href="/user">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            {{-- Menu Pengajuan --}}
            <li class="sidebar-header">
                Pengajuan
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/pengajuan-judul">
                    <i class="align-middle" data-feather="file-text"></i> <span class="align-middle">Pengajuan
                        Judul</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/pengajuan-proposal">
                    <i class="align-middle" data-feather="file-text"></i> <span class="align-middle">Pengajuan
                        Proposal</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/pkm">
                    <i class="align-middle" data-feather="file-text"></i> <span class="align-middle">Pengajuan
                        PKM</span>
                </a>
            </li>
            {{-- End Menu Pengajuan --}}

            {{-- Menu Publikai --}}
            <li class="sidebar-header">
                Publikasi
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/publikasi">
                    <i class="align-middle" data-feather="list"></i> <span class="align-middle">Publikasi Anda</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/add-publikasi">
                    <i class="align-middle" data-feather="edit"></i> <span class="align-middle">Tambah Publikasi</span>
                </a>
            </li>
            {{-- End Menu Publikasi --}}


            {{-- Menu Jadwal --}}
            <li class="sidebar-header">
                Jadwal
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/jadwal-sempro">
                    <i class="align-middle" data-feather="calendar"></i> <span class="align-middle">Seminar
                        Proposal</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="maps-google.html">
                    <i class="align-middle" data-feather="calendar"></i> <span class="align-middle">Seminar
                        Hasil</span>
                </a>
            </li>
            {{-- End Menu Jadwal --}}

            {{-- Menu Info Hasil --}}
            <li class="sidebar-header">
                Hasil
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="maps-google.html">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Hasil Seminar
                        Proposal</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="maps-google.html">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle"> Hasil Seminar
                        Hasil</span>
                </a>
            </li>
            {{-- End Menu Info Hasil --}}

            <hr class="text text-white">

            {{-- Button Logout --}}
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <button class="btn btn-danger"><i class="align-middle text text-white"
                            data-feather="log-out"></i>Logout</button>
                </a>
            </li>
            {{-- End Button Logout --}}

        </ul>
    </div>
</nav>
