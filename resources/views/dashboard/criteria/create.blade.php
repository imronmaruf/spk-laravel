@extends('layout.main')


@section('content')
    <div class="bg-primary pt-10 pb-21"></div>

    <div class="container-fluid mt-n22 px-6">
        <div class="row mt-6">
            <div class="col-md-12 col-12">
                <!-- card  -->
                <div class="card">
                    <!-- card header  -->
                    <div class="card-header bg-white py-4 d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Tambah Kriteria</h4>
                    </div>

                    <!-- form  -->
                    <form class="col-lg-11 mx-auto mb-4 mt-4" method="POST" action="/dashboard/criterias">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" value="{{ old('name') }}" autofocus required>

                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="attribute" class="form-label">Attribut</label>
                            <select class="form-select @error('attribute') is-invalid @enderror" id="attribute"
                                name="attribute" required>
                                <option value="" disabled selected>Pilih Salah Satu</option>
                                <option value="CORE FACTOR" {{ old('attribute') === 'CORE FACTOR' ? 'selected' : '' }}>Core
                                    Factor</option>
                                <option value="SECONDARY FACTOR"
                                    {{ old('attribute') === 'SECONDARY FACTOR' ? 'selected' : '' }}>Secondary
                                    Factor</option>
                            </select>

                            @error('attribute')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mb-3">Simpan</button>
                        <a href="/dashboard/criterias" class="btn btn-danger mb-3">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-center align-items-center py-3 my-4 border-top">
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <span class="mb-3 mb-md-0 text-muted">© 2024 Sukia</span>
                </div>
            </footer>
        </div>
    </div>
@endsection
