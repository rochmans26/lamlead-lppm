@extends('layouts.main-userDosen')

@section('page')
    {{-- default Button dan Title Pengajuan Judul --}}
    <div class="container">
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
    </div>
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
    {{-- <h1 class="h3 mb-4 text-center">Pengajuan Judul</h1>
    <span>
        <a href="" class="btn btn-success text text-center mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i data-feather="plus-circle" class="mb-1 me-1"></i><span class="mb-1">Pengajuan Judul</span>
        </a>
    </span> --}}
    {{-- End Third Desain Button dan Title Pengajuan Judul --}}




    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header" style="background-color: #222E3C">
                    <h5 class="text text-center text-white">Daftar Judul Yang Diajukan</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Tanggal Pengajuan</th>
                                    <th scope="col">Catatan</th>
                                    <th scope="col">Reviewer</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Perancangan Aplikasi Disabilitas Berbasis Mobile Application</td>
                                    <td>18 Februari 2023 - 18.00 pm</td>
                                    <td>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis blanditiis ab
                                        neque quibusdam illo quasi, fuga impedit tenetur ad doloribus! Deserunt autem.
                                    </td>
                                    <td>Dr. Marshel S.kom, M.T</td>
                                    <td><span class="badge bg-success">Disetujui</span></td>
                                    <td><small>No Action Needed</small></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Sistem Parkir Kampus Berbasis IoT</td>
                                    <td>17 Februari 2023 - 09.00 am</td>
                                    <td>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis non nemo
                                        numquam obcaecati incidunt dolorum, praesentium sint harum id repellat iusto sit
                                        eligendi, magnam perferendis ea temporibus illo asperiores possimus! Ex animi
                                        voluptate asperiores atque aliquam temporibus fugit mollitia consectetur?
                                    </td>
                                    <td>Prof. Ida Suliarti S.E, M.T</td>
                                    <td><span class="badge bg-danger">Ditolak</span></td>
                                    <td><small>No Action Needed</small></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Rancang Bangun Aplikasi Buruh Tani</td>
                                    <td>16 Februari 2023 - 13.00 pm</td>
                                    <td>Tidak Ada Catatan</td>
                                    <td>Prof. Hjh. Hennie Sieta S.T, M.T</td>
                                    <td><span class="badge bg-warning">Diproses</span></td>
                                    <td class="text-center">
                                        <div class="vstack gap-1">
                                            <a href="#" class="badge btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#editJudul"><i class="align-middle" data-feather="edit"></i>
                                                <span class="align-middle">Edit</span>
                                            </a>
                                            <a href="#" class="badge btn bg-danger" data-bs-toggle="modal"
                                                data-bs-target="#delJudul"><i class="align-middle"
                                                    data-feather="x-circle"></i> <span class="align-middle">Batalkan</span>
                                            </a>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #222E3C">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Pengajuan Judul</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="inputJudul" placeholder="Masukkan Judul">
                            <div id="notesJudul" class="form-text">Isilah Form Pengajuan Judul dengan Benar dan Teliti!
                            </div>
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


    <!-- Modal Edit Pengajuan Judul -->
    <div class="modal fade" id="editJudul" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #222E3C">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Edit Judul</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="inputJudul" placeholder="Masukkan Judul"
                                value="Rancang Bangun Aplikasi Buruh Tani">
                            <div id="notesJudul" class="form-text">Isilah Form Pengajuan Judul dengan Benar dan Teliti!
                            </div>
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
