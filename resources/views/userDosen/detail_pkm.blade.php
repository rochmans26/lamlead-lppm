@extends('layouts.main-userDosen')

@section('page')
    <div class="mb-3">
        <a href="/pkm" class="btn btn-danger">Kembali</a>
    </div>
    <div class="row">
        <div class="col-12 col-lg-5 col-xxl-4 d-flex">
            <div class="card flex-fill w-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">Detail PKM</h5>
                </div>
                <div class="card-body">
                    <table class="table my-0">
                        <tr>
                            <td>Judul PKM</td>
                            <td>:</td>
                            <td>Perancangan Aplikasi Disabilitas Berbasis Mobile Application</td>
                        </tr>
                        <tr>
                            <td>Bidang</td>
                            <td>:</td>
                            <td>PKM-T</td>
                        </tr>
                        <tr>
                            <td>Jenis Skim</td>
                            <td>:</td>
                            <td>Skim_1</td>
                        </tr>
                        <tr>
                            <td>Lokasi Kegiatan</td>
                            <td>:</td>
                            <td>dsajdhbsgyav</td>
                        </tr>
                        <tr>
                            <td>Tahun Usulan</td>
                            <td>:</td>
                            <td>dsajdhbsgyav</td>
                        </tr>
                        <tr>
                            <td>Tahun Kegiatan</td>
                            <td>:</td>
                            <td>dsajdhbsgyav</td>
                        </tr>
                        <tr>
                            <td>Tahun Pelaksanaan</td>
                            <td>:</td>
                            <td>dsajdhbsgyav</td>
                        </tr>
                        <tr>
                            <td>Pendanaan</td>
                            <td>:</td>
                            <td>Dana Dikti</td>
                        </tr>
                        <tr>
                            <td>No. SK</td>
                            <td>:</td>
                            <td>Dana Dikti</td>
                        </tr>
                        <tr>
                            <td>Tanggal SK</td>
                            <td>:</td>
                            <td>Dana Dikti</td>
                        </tr>
                        <tr>
                            <td>Mitra PKM</td>
                            <td>:</td>
                            <td>Dana Dikti</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-7 col-xxl-8 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <div class="hstack gap-2">
                        <h5 class="card-title mb-0">Anggota PKM</h5>
                        <a href="" data-bs-target="#tambahAnggotaPkm" data-bs-toggle="modal"><i
                                data-feather="plus-circle" class="align-top"></i></a>
                    </div>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover my-0">
                            <thead>
                                <tr>
                                    <th>NPM/NIDN/NIP</th>
                                    <th>Nama</th>
                                    <th>Kategori</th>
                                    <th>Peran</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>110933190032</td>
                                    <td>Nurdin Jaya S.Kom, M.T</td>
                                    <td>Dosen Lokal</td>
                                    <td><span class="badge bg-success">Ketua</span></td>
                                </tr>
                                <tr>
                                    <td>41155050190036</td>
                                    <td>Rochman Setiono</td>
                                    <td>Mahasiswa</td>
                                    <td><span class="badge bg-success">Anggota</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="my-3">
                        <h2>Jumlah Anggota : 2</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-12 col-lg-6 col-xxl-6 d-flex">
            <div class="card flex-fill w-100">
                <div class="card-header">
                    <div class="hstack gap-2">
                        <h5 class="card-title mb-0">Request Anggota Mahasiswa</h5>
                        <a href="" data-bs-target="#reqAnggotaMhs" data-bs-toggle="modal"><i
                                data-feather="plus-circle" class="align-top"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover my-0">
                            <thead>
                                <tr>
                                    <th>NPM</th>
                                    <th>Nama</th>
                                    <th>Prodi</th>
                                    <th>Tahun Masuk</th>
                                    <th>Status Request</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>41155050190036</td>
                                    <td>Rochman Setiono</td>
                                    <td>Fakultas Teknik - Informatika</td>
                                    <td>2019</td>
                                    <td>
                                        <span class="badge bg-success">Disetujui</span>
                                    </td>
                                    <td>
                                        <div class="vstack gap-1">
                                            <a href="" class="btn badge bg-primary" data-bs-toggle="modal"
                                                data-bs-target="#editMhs">Edit</a>
                                            <a href="" class="btn badge bg-danger" data-bs-toggle="modal"
                                                data-bs-target="#hapus">Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-6 col-xxl-6 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <div class="hstack gap-2">
                        <h5 class="card-title mb-0">Request Anggota Dosen Luar</h5>
                        <a href="" data-bs-target="#reqAnggotaDosenLuar" data-bs-toggle="modal"><i
                                data-feather="plus-circle" class="align-top"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover my-0">
                            <thead>
                                <tr>
                                    <th>NIDN/NIP</th>
                                    <th>Nama</th>
                                    <th>Telp.</th>
                                    <th>Email</th>
                                    <th>Fakultas</th>
                                    <th>Prodi</th>
                                    <th>Universitas</th>
                                    <th>Status Rquest</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>110933190032</td>
                                    <td>Semprul S.Kom, M.T</td>
                                    <td>081xxxxxxx</td>
                                    <td>semprul.id@gmail.com</td>
                                    <td>Fakultas Kedokteran</td>
                                    <td>Dokter Umum</td>
                                    <td>Maranatha</td>
                                    <td><span class="badge bg-warning">Diproses</span></td>
                                    <td>
                                        <div class="vstack gap-1">
                                            <a href="" class="btn badge bg-primary" data-bs-toggle="modal"
                                                data-bs-target="#editAnggotaDosenLuar">Edit</a>
                                            <a href="" class="btn badge bg-danger" data-bs-toggle="modal"
                                                data-bs-target="#hapus">Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11093319006</td>
                                    <td>Sopandi S.Kom, M.T</td>
                                    <td>081xxxxxxx</td>
                                    <td>sopandiggs@gmail.com</td>
                                    <td>Fakultas Teknik</td>
                                    <td>Informatika</td>
                                    <td>Universitas Padjajaran</td>
                                    <td><span class="badge bg-danger">Ditolak</span></td>
                                    <td>
                                        <div class="vstack gap-1">
                                            <a href="" class="btn badge bg-danger" data-bs-toggle="modal"
                                                data-bs-target="#hapus">Hapus</a>
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


    <!-- Modal Tambah Anggota PKM -->
    <div class="modal fade" id="tambahAnggotaPkm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #222E3C">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Tambah Anggota</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="bidang" class="form-label">Pilih Kategori Anggota</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Kategori</option>
                                <option value="1">Mahasiswa</option>
                                <option value="2">Dosen Luar</option>
                                <option value="3">Dosen Lokal</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="bidang" class="form-label">Pilih Anggota</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Anggota</option>
                                <option value="1">Rochman Setiono</option>
                                <option value="2">Charless</option>
                                <option value="3">Layla</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jenis_skim" class="form-label">Peran</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Peran</option>
                                <option value="1">Ketua</option>
                                <option value="2">Pembimbing</option>
                                <option value="3">Anggota</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <small>&copy; LPPM-UNLA 2023</small>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Request Tambah Anggota Mahasiswa -->
    <div class="modal fade" id="reqAnggotaMhs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #222E3C">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Tambah Anggota Mahasiswa</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="bidang" class="form-label">NPM</label>
                            <input type="text" name="npm" class="form-control" id=""
                                placeholder="411xxxxx">
                        </div>
                        <div class="mb-3">
                            <label for="namaMhs" class="form-label">Nama</label>
                            <input type="text" name="namaMhs" class="form-control" id=""
                                placeholder="Udin Sedunia">
                        </div>
                        <div class="mb-3">
                            <label for="bidang" class="form-label">Prodi</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Prodi</option>
                                <option value="1">Fakultas Teknik - Informatika</option>
                                <option value="2">Fakultas Ekonomi - Manajemen Ekonomi</option>
                                <option value="3">Fakultas FKIP - PGSD</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="thnMskMhs" class="form-label">Tahun Masuk</label>
                            <select class="form-select" id="exampleFormControlSelect1"
                                aria-label="Default select example" name="keyword">
                                <option value="" selected>Tahun</option>
                                @for ($i = date('Y'); $i >= date('Y') - 8; $i -= 1)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <small>&copy; LPPM-UNLA 2023</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Request Anggota Mahasiswa -->
    <div class="modal fade" id="editMhs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #222E3C">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Edit Anggota Mahasiswa</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="bidang" class="form-label">NPM</label>
                            <input type="text" name="npm" class="form-control" id=""
                                placeholder="411xxxxx">
                        </div>
                        <div class="mb-3">
                            <label for="namaMhs" class="form-label">Nama</label>
                            <input type="text" name="namaMhs" class="form-control" id=""
                                placeholder="Udin Sedunia">
                        </div>
                        <div class="mb-3">
                            <label for="bidang" class="form-label">Prodi</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Prodi</option>
                                <option value="1">Fakultas Teknik - Informatika</option>
                                <option value="2">Fakultas Ekonomi - Manajemen Ekonomi</option>
                                <option value="3">Fakultas FKIP - PGSD</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="thnMskMhs" class="form-label">Tahun Masuk</label>
                            <select class="form-select" id="exampleFormControlSelect1"
                                aria-label="Default select example" name="keyword">
                                <option value="" selected>Tahun</option>
                                @for ($i = date('Y'); $i >= date('Y') - 8; $i -= 1)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Edit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <small>&copy; LPPM-UNLA 2023</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Request Tambah Anggota Dosen Luar -->
    <div class="modal fade" id="reqAnggotaDosenLuar" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #222E3C">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Request Anggota Dosen Luar</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="nidnDosL" class="form-label">NIDN</label>
                            <input type="text" name="nidnDosL" class="form-control" id=""
                                placeholder="11032xxxxxx">
                        </div>
                        <div class="mb-3">
                            <label for="namaDosL" class="form-label">Nama Dosen</label>
                            <input type="text" name="namaDosL" class="form-control" id=""
                                placeholder="Prof. Dr. Trimulyadi S.Kom, M.H">
                        </div>
                        <div class="mb-3">
                            <label for="tlpDosL" class="form-label">No. Telp</label>
                            <input type="tel" name="telDosL" id="" class="form-control"
                                placeholder="081xxxxxxxx">
                        </div>
                        <div class="mb-3">
                            <label for="emailDosL" class="form-label">Email</label>
                            <input type="email" name="emailDosL" id="" class="form-control"
                                placeholder="email@gmail.com">
                        </div>
                        <div class="mb-3">
                            <label for="fakDosL" class="form-label">Fakultas</label>
                            <input type="text" name="fakDosL" id="" class="form-control"
                                placeholder="Fakultas Example">
                        </div>
                        <div class="mb-3">
                            <label for="prodiDosL" class="form-label">Prodi</label>
                            <input type="text" name="prodiDosL" id="" class="form-control"
                                placeholder="Dokter Umum">
                        </div>
                        <div class="mb-3">
                            <label for="univDosL" class="form-label">Universitas</label>
                            <input type="text" name="univDosL" id="" class="form-control"
                                placeholder="Universitas Example">
                        </div>
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <small>&copy; LPPM-UNLA 2023</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Request Anggota Dosen Luar -->
    <div class="modal fade" id="editAnggotaDosenLuar" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #222E3C">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Edit Anggota Dosen Luar</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="nidnDosL" class="form-label">NIDN</label>
                            <input type="text" name="nidnDosL" class="form-control" id=""
                                placeholder="11032xxxxxx">
                        </div>
                        <div class="mb-3">
                            <label for="namaDosL" class="form-label">Nama Dosen</label>
                            <input type="text" name="namaDosL" class="form-control" id=""
                                placeholder="Prof. Dr. Trimulyadi S.Kom, M.H">
                        </div>
                        <div class="mb-3">
                            <label for="tlpDosL" class="form-label">No. Telp</label>
                            <input type="tel" name="telDosL" id="" class="form-control"
                                placeholder="081xxxxxxxx">
                        </div>
                        <div class="mb-3">
                            <label for="emailDosL" class="form-label">Email</label>
                            <input type="email" name="emailDosL" id="" class="form-control"
                                placeholder="email@gmail.com">
                        </div>
                        <div class="mb-3">
                            <label for="fakDosL" class="form-label">Fakultas</label>
                            <input type="text" name="fakDosL" id="" class="form-control"
                                placeholder="Fakultas Example">
                        </div>
                        <div class="mb-3">
                            <label for="prodiDosL" class="form-label">Prodi</label>
                            <input type="text" name="prodiDosL" id="" class="form-control"
                                placeholder="Dokter Umum">
                        </div>
                        <div class="mb-3">
                            <label for="univDosL" class="form-label">Universitas</label>
                            <input type="text" name="univDosL" id="" class="form-control"
                                placeholder="Universitas Example">
                        </div>
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <small>&copy; LPPM-UNLA 2023</small>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Delete -->
    <div class="modal fade" id="hapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Penghapusan Data Terdeteksi!</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body bg-danger bg-opacity-10 text text-center">
                    <h5>Apakah Anda Yakin?</h5>
                    <button type="button" class="btn btn-danger">Ya</button>
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Tidak</button>
                </div>
            </div>
        </div>
    </div>
@endsection
