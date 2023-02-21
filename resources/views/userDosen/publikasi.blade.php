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
    {{-- <h1 class="h3 mb-4">Pengajuan PKM</h1>
    <span>
        <a href="" class="btn btn-success text text-center mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i data-feather="plus-circle" class="mb-1 me-1"></i><span class="mb-1">Pengajuan Judul</span>
        </a>
    </span> --}}
    {{-- End Second Desain Button dan Title Pengajuan Judul --}}

    {{-- Third Desain Button dan Title Pengajuan Judul --}}
    {{-- <h1 class="h3 mb-4 text-center">Pengajuan Proposal</h1>
    <span>
        <a href="" class="btn btn-success text text-center mb-3" data-bs-toggle="modal" data-bs-target="#tambahProposal">
            <i data-feather="plus-circle" class="mb-1 me-1"></i><span class="mb-1">Pengajuan Proposal</span>
        </a>
    </span> --}}
    {{-- End Third Desain Button dan Title Pengajuan Judul --}}
    <div class="row">
        <div class="col-12 col-md-3 mb-1">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Jurnal Sinta</h5>
                    <h3>Perancangan Aplikasi Disabilitas Berbasis Mobile Application</h3>
                    <div class="d-flex flex-row mb-3">
                        <small class="text-muted pe-5">Vol. 10 - No.10</small>
                        <small class="text-muted">20 Februari 2023</small>
                    </div>
                    <hr>
                    <h5>Penulis</h5>
                    <p class="card-text">
                    <ul>
                        <li>Dr.Prof. Stria Utama</li>
                        <li>Rochman Setiono</li>
                        <li>Riswan Utomo</li>
                    </ul>
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Status : <p class="badge bg-success">Publish</p>
                    </li>
                    <li class="list-group-item"><a href="" class="btn btn-primary">Link</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
