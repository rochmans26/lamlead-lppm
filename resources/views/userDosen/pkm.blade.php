@extends('layouts.main-userDosen')

@section('page')
    {{-- default Button dan Title Pengajuan Judul --}}
    {{-- <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1 class="h3 mb-4">Pengajuan Judul</h1>
            </div>
            <div class="col-md-8">
                <div class="d-flex justify-content-end">
                    <a href="" class="btn btn-success text text-center mb-3" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i data-feather="plus-circle" class="mb-1 me-1"></i><span class="mb-1">Pengajuan Judul</span>
                    </a>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- End default Button dan Title Pengajuan Judul --}}

    {{-- Second Desain Button dan Title Pengajuan Judul --}}
    {{-- <div class="container">
        <h1 class="h3 mb-4">Pengajuan Judul</h1>
        <span>
            <a href="" class="btn btn-success text text-center mb-3" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                <i data-feather="plus-circle" class="mb-1 me-1"></i><span class="mb-1">Pengajuan Judul</span>
            </a>
        </span>
    </div> --}}
    {{-- End Second Desain Button dan Title Pengajuan Judul --}}

    {{-- Third Desain Button dan Title Pengajuan Judul --}}
    <h1 class="h3 mb-4 text-center">Pengajuan PKM</h1>
    <span>
        <a href="" class="btn btn-success text text-center mb-3" data-bs-toggle="modal" data-bs-target="#tambahProposal">
            <i data-feather="plus-circle" class="mb-1 me-1"></i><span class="mb-1">Pengajuan PKM</span>
        </a>
    </span>
    {{-- End Third Desain Button dan Title Pengajuan Judul --}}




    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header" style="background-color: #222E3C">
                    <h5 class="text text-center text-white">Daftar PKM Yang Diajukan</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive table-scrollable">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Judul PKM</th>
                                    <th scope="col">Bidang</th>
                                    <th scope="col">Skim</th>
                                    <th scope="col">Lokasi Kegiatan</th>
                                    <th scope="col">Tahun Usulan</th>
                                    <th scope="col">Tahun Kegiatan</th>
                                    <th scope="col">Tahun Pelaksanaan</th>
                                    <th scope="col">Pendanaan</th>
                                    <th scope="col">No.SK PKM</th>
                                    <th scope="col">Tanggal SK PKM</th>
                                    <th scope="col">Mitra PKM</th>
                                    <th scope="col">Dokumen</th>
                                    <th scope="col">Reviewer</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Perancangan Aplikasi Disabilitas Berbasis Mobile Application</td>
                                    <td>Teknologi</td>
                                    <td>
                                        Skim_1
                                    </td>
                                    <td>Bandung</td>
                                    <td>2023</td>
                                    <td>2023</td>
                                    <td>2024</td>
                                    <td>Dana Dikti</td>
                                    <td>10/01.Xdsadjhu</td>
                                    <td>23 Desember 2022</td>
                                    <td>Rumah Sakit Immanuel</td>
                                    <td><a href="" class="btn badge bg-primary">Link</a></td>
                                    <td>Agin Ginanjar S.Kom, M.T</td>
                                    <td><span class="badge bg-success">Disetujui</span></td>
                                    <td>
                                        <div class="vstack gap-1">
                                            <a href="" class="btn badge bg-danger" data-bs-toggle="modal"
                                                data-bs-target="#editProposal">Edit</a>
                                            <a href="/detail-pkm" class="btn badge bg-primary">Detail</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Rancang Bangun Sistem Informasi Buruh Tani</td>
                                    <td>Teknologi</td>
                                    <td>
                                        Skim_2
                                    </td>
                                    <td>Purwokerto</td>
                                    <td>2023</td>
                                    <td>2023</td>
                                    <td>2024</td>
                                    <td>Dana UNLA</td>
                                    <td>11/01.UNCH/2023</td>
                                    <td>23 Januari 2023</td>
                                    <td>Pertanian Pak Latip Majalengka</td>
                                    <td><a href="" class="btn badge bg-primary">Link</a></td>
                                    <td>Siti Nurjanah S.E, M.H</td>
                                    <td><span class="badge bg-warning">Direvisi</span></td>
                                    <td>
                                        <div class="vstack gap-1">
                                            <a href="" class="btn badge bg-danger" data-bs-toggle="modal"
                                                data-bs-target="#editProposal">Edit</a>
                                            <a href="" class="btn badge bg-primary" data-bs-toggle="modal"
                                                data-bs-target="#detailProposal">Detail</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Perancangan Aplikasi Tanamin Berbasis Mobile Application</td>
                                    <td>Teknologi</td>
                                    <td>
                                        Skim_3
                                    </td>
                                    <td>Banjarmasin</td>
                                    <td>2023</td>
                                    <td>2023</td>
                                    <td>2024</td>
                                    <td>Dana Dikti</td>
                                    <td>10/01.Xdsadjhu</td>
                                    <td>23 Desember 2022</td>
                                    <td>Rumah Sakit Immanuel</td>
                                    <td><a href="" class="btn badge bg-primary">Link</a></td>
                                    <td>-</td>
                                    <td><span class="badge bg-secondary">Proses</span></td>
                                    <td>
                                        <div class="vstack gap-1">
                                            <a href="" class="btn badge bg-danger">Edit</a>
                                            <a href="" class="btn badge bg-primary" data-bs-toggle="modal"
                                                data-bs-target="#detailProposal">Detail</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Perancangan Jembatan Kaki Lima</td>
                                    <td>Pengabdian Masyarakat</td>
                                    <td>
                                        Skim_4
                                    </td>
                                    <td>Pacitan</td>
                                    <td>2023</td>
                                    <td>2023</td>
                                    <td>2030</td>
                                    <td>Dana Dikti</td>
                                    <td>10/01.Xdsadjhu</td>
                                    <td>23 Desember 2022</td>
                                    <td>Rumah Sakit Immanuel</td>
                                    <td><a href="" class="btn badge bg-primary">Link</a></td>
                                    <td>Husniah S.Ikom, M.T</td>
                                    <td><span class="badge bg-secondary">Proses</span></td>
                                    <td>
                                        <div class="vstack gap-1">
                                            <a href="" class="btn badge bg-danger">Edit</a>
                                            <a href="" class="btn badge bg-primary" data-bs-toggle="modal"
                                                data-bs-target="#detailProposal">Detail</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Perancangan Jalan Dengan IoT</td>
                                    <td>Teknologi</td>
                                    <td>
                                        Skim_5
                                    </td>
                                    <td>Riau</td>
                                    <td>2023</td>
                                    <td>2023</td>
                                    <td>2030</td>
                                    <td>Dana Dikti</td>
                                    <td>10/01.Xdsadjhu</td>
                                    <td>23 Desember 2022</td>
                                    <td>Rumah Sakit Immanuel</td>
                                    <td><a href="" class="btn badge bg-primary">Link</a></td>
                                    <td>Husniah S.Ikom, M.T</td>
                                    <td><span class="badge bg-danger">Ditolak</span></td>
                                    <td>
                                        <div class="vstack gap-1">
                                            <a href="" class="btn badge bg-danger">Edit</a>
                                            <a href="" class="btn badge bg-primary" data-bs-toggle="modal"
                                                data-bs-target="#detailProposal">Detail</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Pengajuan Judul -->
    <div class="modal fade" id="tambahProposal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #222E3C">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Pengajuan PKM</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="bidang" class="form-label">Ref.Proposal</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Referensi</option>
                                {{-- option berasal dari get pengajuan proposal yang disetujui --}}
                                <option value="1">Perancangan Aplikasi Disabilitas Berbasis Mobile Application
                                </option>
                                {{-- End option berasal dari get pengajuan proposal --}}
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="inputJudul" placeholder="Masukkan Judul">
                        </div>
                        <div class="mb-3">
                            <label for="bidang" class="form-label">Bidang</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Bidang</option>
                                <option value="1">PKM-T</option>
                                <option value="2">PKM-S</option>
                                <option value="3">PKM-U</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jenis_skim" class="form-label">Jenis Skim</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Jenis Skim</option>
                                <option value="1">Skim_1</option>
                                <option value="2">Skim_2</option>
                                <option value="3">Skim_3</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="lokasi_kegiatan" class="form-label">Lokasi Kegiatan</label>
                            <input type="text" class="form-control" name="lok_kegiatan"
                                placeholder="Lokasi Kegiatan">
                        </div>
                        <div class="mb-3">
                            <label for="lokasi_kegiatan" class="form-label">Tahun Usulan</label>
                            <select class="form-select" id="exampleFormControlSelect1"
                                aria-label="Default select example" name="keyword">
                                <option value="" selected>Tahun</option>
                                @for ($i = date('Y'); $i >= date('Y') - 3; $i -= 1)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="lokasi_kegiatan" class="form-label">Tahun Kegiatan</label>
                            <select class="form-select" id="exampleFormControlSelect1"
                                aria-label="Default select example" name="keyword">
                                <option value="" selected>Tahun</option>
                                @for ($i = date('Y'); $i <= date('Y') + 10; $i += 1)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tahunPelaksanaan" class="form-label">Tahun Pelaksanaan</label>
                            <select class="form-select" id="exampleFormControlSelect1"
                                aria-label="Default select example" name="thnpelaksanaan">
                                <option value="" selected>Tahun</option>
                                @for ($i = date('Y'); $i <= date('Y') + 10; $i += 1)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="pendanaan" class="form-label">Pendanaan</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Pendanaan</option>
                                <option value="1">Dana Dikti</option>
                                <option value="2">Dana Unla</option>
                                <option value="3">Dana Lain</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="keteranganDana" class="form-label">Keterangan Dana <small style="font-size: 7pt"
                                    class="text-danger">*Diisi
                                    jika menggunakan
                                    dana lain</small></label>
                            <input type="text" class="form-control" name="lok_kegiatan" placeholder="Dana ...">
                        </div>
                        <div class="mb-3">
                            <label for="noskpkm" class="form-label">No. SK PKM</label>
                            <input type="text" class="form-control" name="no_skpkm" placeholder="No. SK ../../..">
                        </div>
                        <div class="mb-3">
                            <label for="tglskpkm" class="form-label">Tanggal SK PKM</label>
                            <input type="date" name="" class="form-control" id="">
                        </div>
                        <div class="mb-3">
                            <label for="noskpkm" class="form-label">Mitra PKM</label>
                            <input type="text" class="form-control" name="no_skpkm" placeholder="Mitra PKM">
                        </div>
                        <div class="mb-3">
                            <label for="file" class="form-label">Upload Link File</label>
                            <input type="url" class="form-control" name="link_file" id=""
                                placeholder="http://127.0.0.1:8000/pengajuan-proposal">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <small>&copy; LPPM-UNLA 2023</small>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Detail --}}
    <div class="modal fade" id="detailProposal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #222E3C">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Log Detail Proposal</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Bidang</th>
                                    <th scope="col">Skim</th>
                                    <th scope="col">Lokasi Kegiatan</th>
                                    <th scope="col">Tahun Usulan</th>
                                    <th scope="col">Tahun Kegiatan</th>
                                    <th scope="col">Tahun Pelaksanaan</th>
                                    <th scope="col">Link Dokumen</th>
                                    <th scope="col">Reviewer</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Catatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Perancangan Aplikasi Disabilitas Berbasis Mobile Application</td>
                                    <td>Teknologi</td>
                                    <td>
                                        Skim_1
                                    </td>
                                    <td>Bandung</td>
                                    <td>2023</td>
                                    <td>2023</td>
                                    <td>2024</td>
                                    <td><a href="" class="btn badge bg-primary">Link</a></td>
                                    <td>Agin Ginanjar S.Kom, M.T</td>
                                    <td><span class="badge bg-success">Disetujui</span></td>
                                    <td>
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident adipisci eaque,
                                        fugit officia ea omnis voluptates cumque nobis expedita doloribus quos quam. Fugiat
                                        odio repellat ad quasi beatae, obcaecati, molestiae quod officiis accusantium
                                        repellendus soluta, deleniti sed voluptates quam corrupti! Delectus enim doloremque,
                                        laudantium rerum soluta veniam. Amet, hic reprehenderit.
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Perancangan Aplikasi Disabilitas Berbasis Mobile Application</td>
                                    <td>Teknologi</td>
                                    <td>
                                        Skim_1
                                    </td>
                                    <td>Bandung</td>
                                    <td>2023</td>
                                    <td>2023</td>
                                    <td>2024</td>
                                    <td><a href="" class="btn badge bg-primary">Link</a></td>
                                    <td>Agin Ginanjar S.Kom, M.T</td>
                                    <td><span class="badge bg-warning">Revisi</span></td>
                                    <td>
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore, exercitationem!
                                        Ut, doloremque. Dignissimos ut fugit minus alias molestias? Fugit nesciunt
                                        perferendis distinctio assumenda eveniet temporibus repellendus voluptatibus cumque
                                        placeat quaerat.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <small>&copy; LPPM-UNLA 2023</small>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Edit Pengajuan Proposal -->
    <div class="modal fade" id="editProposal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #222E3C">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Edit Pengajuan Proposal PKM</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="inputJudul" placeholder="Masukkan Judul">
                        </div>
                        <div class="mb-3">
                            <label for="bidang" class="form-label">Bidang</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Bidang</option>
                                <option value="1">PKM-T</option>
                                <option value="2">PKM-S</option>
                                <option value="3">PKM-U</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jenis_skim" class="form-label">Jenis Skim</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Jenis Skim</option>
                                <option value="1">Skim_1</option>
                                <option value="2">Skim_2</option>
                                <option value="3">Skim_3</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="lokasi_kegiatan" class="form-label">Lokasi Kegiatan</label>
                            <input type="text" class="form-control" name="lok_kegiatan"
                                placeholder="Lokasi Kegiatan">
                        </div>
                        <div class="mb-3">
                            <label for="lokasi_kegiatan" class="form-label">Tahun Usulan</label>
                            <select class="form-select" id="exampleFormControlSelect1"
                                aria-label="Default select example" name="keyword">
                                <option value="" selected>Tahun</option>
                                @for ($i = date('Y'); $i >= date('Y') - 3; $i -= 1)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="lokasi_kegiatan" class="form-label">Tahun Kegiatan</label>
                            <select class="form-select" id="exampleFormControlSelect1"
                                aria-label="Default select example" name="keyword">
                                <option value="" selected>Tahun</option>
                                @for ($i = date('Y'); $i <= date('Y') + 10; $i += 1)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tahunPelaksanaan" class="form-label">Tahun Pelaksanaan</label>
                            <select class="form-select" id="exampleFormControlSelect1"
                                aria-label="Default select example" name="thnpelaksanaan">
                                <option value="" selected>Tahun</option>
                                @for ($i = date('Y'); $i <= date('Y') + 10; $i += 1)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="file" class="form-label">Upload Link File</label>
                            <input type="url" class="form-control" name="link_file" id=""
                                placeholder="http://127.0.0.1:8000/pengajuan-proposal">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Delete -->
    <div class="modal fade" id="delJudul" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Pembatalan Terdeteksi!</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body bg-danger bg-opacity-10 text text-center">
                    <h5>Apakah Anda Yakin Ingin Membatalkan Pengajuan ?</h5>
                    <button type="button" class="btn btn-danger">Ya</button>
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Tidak</button>
                </div>
            </div>
        </div>
    </div>
@endsection
