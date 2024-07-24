@extends('layout.main')

@push('css')
@endpush

@section('content')
    <div class="d-flex flex-column min-vh-100">
        <div class="bg-primary pt-10 pb-21"></div>
        <div class="container-fluid mt-n22 px-6 flex-grow-1">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mb-2 mb-lg-0">
                                <h3 class="mb-0 text-white">Welcome back, {{ auth()->user()->name }}!</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 col-12 mt-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h4 class="mb-0">Tanaman</h4>
                                </div>
                                <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                                    <i class="bi bi-feather fs-4"></i>
                                </div>
                            </div>
                            <div>
                                <h1 class="fw-bold">{{ $tanamanCount }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 col-12 mt-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h4 class="mb-0">Kriteria</h4>
                                </div>
                                <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                                    <i class="bi bi-clipboard-data-fill fs-4"></i>
                                </div>
                            </div>
                            <div>
                                <h1 class="fw-bold">{{ $kriteriaCount }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 col-12 mt-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h4 class="mb-0">Alternatif</h4>
                                </div>
                                <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                                    <i class="bi bi-journal-text fs-4"></i>
                                </div>
                            </div>
                            <div>
                                <h1 class="fw-bold">{{ $alternatifCount }}</h1>
                                {{-- <p class="mb-0"><span class="text-dark me-2">1</span>Completed</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="d-flex flex-wrap justify-content-center align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex justify-content-center align-items-center">
                <span class="mb-3 mb-md-0 text-muted">© 2024 Sukia</span>
            </div>
        </footer>
    </div>
@endsection
