@extends('layouts.main-userDosen')

@section('page')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header" style="background-color: #222E3C">
                    <h5 class="card-title mb-0 text-center text-white">Form Publikasi</h5>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6">
                            <div class="card">
                                <div class="card bg-dark text-white">
                                    <img src="assets/src/img/tron/unsplash-space.jpg" class="card-img" alt="...">
                                    <div class="card-img-overlay text text-center">
                                        <img src="assets/src/img/tron/unlaantibohong.png" alt="" width="200">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Judul</label>
                                            <input type="text" class="form-control" id="judul">
                                        </div>
                                        <div class="mb-3">
                                            <label for="namaJurnal" class="form-label">Nama Jurnal</label>
                                            <input type="text" class="form-control" name=""
                                                placeholder="Jurnal Sinta ..">
                                        </div>
                                        <div class="mb-3">
                                            <label for="namaJurnal" class="form-label">Volume</label>
                                            <input type="number" class="form-control" name="" placeholder="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="namaJurnal" class="form-label">No.</label>
                                            <input type="number" class="form-control" name="" placeholder="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="namaJurnal" class="form-label">Tanggal Terbit</label>
                                            <input type="date" name="" class="form-control" id="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="namaJurnal" class="form-label">Jumlah Penulis</label>
                                            <input type="number" name="" class="form-control" id="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="namaJurnal" class="form-label">Link Dokumen</label>
                                            <input type="url" name="" class="form-control" id="">
                                        </div>
                                        <div class="mb-3 text text-center">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                        <div class="text text-start">
                                            <a href="/publikasi" class="">
                                                <span class="p-2 fs-6"><img src="assets/src/img/icons/back-arrow-24.png"
                                                        alt="" class="me-2">Kembali</span>
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
