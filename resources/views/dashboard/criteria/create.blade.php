@extends('layout.main')


@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Kriteria Baru</h1>
  </div>

  <form class="col-lg-8" method="POST" action="/dashboard/criterias">
    @csrf

    <div class="mb-3">
      <label for="name" class="form-label">Nama</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" autofocus required>

      @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="attribute" class="form-label">Attribut</label>
      <select class="form-select @error("attribute") is-invalid @enderror" id="attribute" name="attribute" required>
        <option value="" disabled selected>Pilih Salah Satu</option>
        <option value="CORE FACTOR" {{ old('attribute') === 'CORE FACTOR' ?  'selected' : '' }}>Core Factor</option>
        <option value="SECONDARY FACTOR" {{ old('attribute') === 'SECONDARY FACTOR' ?  'selected' : '' }}>Secondary Factor</option>
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
@endsection