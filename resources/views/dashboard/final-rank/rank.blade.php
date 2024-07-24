@extends('layout.main')


@section('content')
    <style>
        .badge:hover {
            color: #fff !important;
            text-decoration: none;
        }

        .bg-success:hover {
            background: #2f9164 !important;
        }

        .bg-danger:hover {
            background: #e84a59 !important;
        }
    </style>
    {{-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Perhitungan Profile Matching</h1>
    </div> --}}

    <div class="bg-primary pt-10 pb-21"></div>
    <div class="container-fluid mt-n22 px-6">
        <div class="row mt-6">
            <div class="col-lg-12 col-md-12 col-12">
                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mb-2 mb-lg-0">
                            <h3 class="mb-0 text-white">Perhitungan Profile Matching</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-12 mt-4">
                <!-- card  -->
                <div class="card">
                    <!-- card header  -->
                    <div class="card-header bg-white py-4 d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Data Alternarif Kriteria</h4>
                    </div>

                    <!-- table  -->
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered text-nowrap mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <th class="text-center align-middle" rowspan="2">#</th>
                                    <th class="text-center align-middle" rowspan="2">Nama Alternatif</th>
                                    <th class="text-center" colspan="{{ $criterias->count() }}">Kriteria</th>
                                </tr>
                                <tr>
                                    @if ($criterias->count())
                                        @foreach ($criterias as $criteria)
                                            <th class="text-center">{{ $criteria->name }}</th>
                                        @endforeach
                                    @else
                                        <th class="text-center">Tidak Ada Data Kriteria</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @if ($alternatives->count())
                                    @foreach ($alternatives as $alternative)
                                        <tr>
                                            <th scope="row" class="text-center">
                                                {{ $loop->iteration }}
                                            </th>
                                            <td class="text-center">
                                                {{ $alternative->name }}
                                            </td>
                                            @foreach ($criterias as $key => $value)
                                                @if (isset($alternative->alternatives[$key]))
                                                    <td class="text-center">
                                                        {{ floatval($alternative->alternatives[$key]->alternative_value) }}
                                                    </td>
                                                @else
                                                    <td class="text-center">
                                                        Empty
                                                    </td>
                                                @endif
                                            @endforeach
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="{{ 3 + $criterias->count() }}" class="text-center text-danger">
                                            No Data
                                        </td>
                                    </tr>
                                @endif

                                <!-- Menampilkan data PV -->
                                <tr class="table-info">
                                    <th class="text-center" colspan="2">Bobot</th>
                                    @foreach ($criterias as $key => $value)
                                        @php
                                            $pvValue = $pv->firstWhere('criteria_id', $value->id)->value ?? 'Empty';
                                        @endphp
                                        <td class="text-center">{{ $pvValue }}</td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- card footer  -->
                    <div class="card-footer bg-white text-center">
                        <h4 class=" link-primary">Data Alternarif Kriteria</h4>
                    </div>
                </div>

            </div>

            <div class="col-md-12 col-12 mt-4">
                <!-- card  -->
                <div class="card">
                    <!-- card header  -->
                    <div class="card-header bg-white py-4 d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Melakukan Normalisasi Perbandingan Berpasangan</h4>
                    </div>

                    <!-- table  -->
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered text-nowrap mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Nama Alternatif</th>
                                    @foreach ($criterias as $criteria)
                                        <th class="text-center">C{{ $criteria->id }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alternatives as $index => $alternative)
                                    <tr>
                                        <td class="text-center">{{ $index + 1 }}</td>
                                        <td class="text-center">{{ $alternative->name }}</td>
                                        @foreach ($criterias as $criteria)
                                            @php
                                                $altValue = $alternative->alternatives
                                                    ->where('criteria_id', $criteria->id)
                                                    ->first();
                                                $criteriaWeight =
                                                    $pv->firstWhere('criteria_id', $criteria->id)->value ?? 0;
                                            @endphp
                                            <td class="text-center">
                                                @if ($altValue)
                                                    {{ floatval($altValue->alternative_value) - $criteriaWeight }}
                                                @else
                                                    Empty
                                                @endif
                                            </td>
                                        @endforeach
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- card footer  -->
                    <div class="card-footer bg-white text-center">
                        <h4 class=" link-primary">Melakukan Normalisasi Perbandingan Berpasangan</h4>
                    </div>
                </div>

            </div>

            <div class="col-md-12 col-12 mt-4">
                <!-- card  -->
                <div class="card">
                    <!-- card header  -->
                    <div class="card-header bg-white py-4 d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Melakukan Pembobotan Gap</h4>
                    </div>

                    <!-- table  -->
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered text-nowrap mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Nama Alternatif</th>
                                    @foreach ($criterias as $criteria)
                                        <th class="text-center">C{{ $criteria->id }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alternatives as $index => $alternative)
                                    <tr>
                                        <td class="text-center">{{ $index + 1 }}</td>
                                        <td class="text-center">{{ $alternative->name }}</td>
                                        @foreach ($criterias as $criteria)
                                            @php
                                                $altValue = $alternative->alternatives
                                                    ->where('criteria_id', $criteria->id)
                                                    ->first();
                                                $criteriaWeight =
                                                    $pv->firstWhere('criteria_id', $criteria->id)->value ?? 0;
                                                $result = intval(
                                                    floatval($altValue->alternative_value) - $criteriaWeight,
                                                );

                                                // Ubah hasil pengurangan sesuai aturan yang ditentukan
                                                if ($result === 0) {
                                                    $result = 5;
                                                } elseif ($result === 1) {
                                                    $result = 4.5;
                                                } elseif ($result === -1) {
                                                    $result = 4;
                                                } elseif ($result === 2) {
                                                    $result = 3.5;
                                                } elseif ($result === 3) {
                                                    $result = 2.5;
                                                } elseif ($result === -3) {
                                                    $result = 2;
                                                } elseif ($result === 4) {
                                                    $result = 1.5;
                                                } elseif ($result === -4) {
                                                    $result = 1;
                                                }
                                            @endphp
                                            <td class="text-center">
                                                @if ($altValue)
                                                    {{ $result }}
                                                @else
                                                    Empty
                                                @endif
                                            </td>
                                        @endforeach
                                    </tr>
                                @endforeach
                                <!-- Baris tambahan untuk jenis kriteria -->
                                <tr>
                                    <td colspan="{{ count($criterias) + 2 }}"></td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    @foreach ($criterias as $criteria)
                                        <td class="text-center">{{ $criteria->attribute }}</td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- card footer  -->
                    <div class="card-footer bg-white text-center">
                        <h4 class=" link-primary">Melakukan Pembobotan Gap</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-12 mt-4">
                <!-- card  -->
                <div class="card">
                    <!-- card header  -->
                    <div class="card-header bg-white py-4 d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Menghitung CF dan SF</h4>
                    </div>

                    <!-- table  -->
                    <div class="table-responsive">
                        <table id="pembobotan-table" class="table table-striped table-bordered text-nowrap mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Nama Alternatif</th>
                                    <th class="text-center">NCF</th>
                                    <th class="text-center">NSF</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    // Hitung jumlah kriteria benefit dan cost
                                    $benefitCount = $criterias
                                        ->filter(function ($criteria) {
                                            return $criteria->attribute === 'CORE FACTOR';
                                        })
                                        ->count();

                                    $costCount = $criterias
                                        ->filter(function ($criteria) {
                                            return $criteria->attribute === 'SECONDARY FACTOR';
                                        })
                                        ->count();
                                @endphp
                                @foreach ($alternatives as $index => $alternative)
                                    <tr>
                                        <td class="text-center">{{ $index + 1 }}</td>
                                        <td class="text-center">{{ $alternative->name }}</td>
                                        @php
                                            $totalBenefit = 0;
                                            $totalCost = 0;
                                        @endphp
                                        @foreach ($criterias as $criteria)
                                            @php
                                                $altValue = $alternative->alternatives
                                                    ->where('criteria_id', $criteria->id)
                                                    ->first();
                                                $criteriaWeight =
                                                    $pv->firstWhere('criteria_id', $criteria->id)->value ?? 0;
                                                $result = intval(
                                                    floatval($altValue->alternative_value) - $criteriaWeight,
                                                );

                                                // Ubah hasil pengurangan sesuai aturan yang ditentukan
                                                if ($result === 0) {
                                                    $result = 5;
                                                } elseif ($result === 1) {
                                                    $result = 4.5;
                                                } elseif ($result === -1) {
                                                    $result = 4;
                                                } elseif ($result === 2) {
                                                    $result = 3.5;
                                                } elseif ($result === 3) {
                                                    $result = 2.5;
                                                } elseif ($result === -3) {
                                                    $result = 2;
                                                } elseif ($result === 4) {
                                                    $result = 1.5;
                                                } elseif ($result === -4) {
                                                    $result = 1;
                                                }

                                                if ($criteria->attribute === 'CORE FACTOR') {
                                                    $totalBenefit += $result;
                                                } elseif ($criteria->attribute === 'SECONDARY FACTOR') {
                                                    $totalCost += $result;
                                                }
                                            @endphp
                                        @endforeach
                                        <td class="text-center">
                                            @if ($benefitCount > 0)
                                                {{ $totalBenefit / $benefitCount }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if ($costCount > 0)
                                                {{ $totalCost / $costCount }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- card footer  -->
                    <div class="card-footer bg-white text-center">
                        <h4 class=" link-primary">Menghitung CF dan SF</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-12 mt-4">
                <!-- card  -->
                <div class="card">
                    <!-- card header  -->
                    <div class="card-header bg-white py-4 d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Menghitung Total</h4>
                    </div>

                    <!-- table  -->
                    <div class="table-responsive">
                        <table id="pembobotan-table" class="table table-striped table-bordered text-nowrap mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Nama Alternatif</th>
                                    <th class="text-center">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    // Hitung jumlah kriteria benefit dan cost
                                    $benefitCount = $criterias
                                        ->filter(function ($criteria) {
                                            return $criteria->attribute === 'CORE FACTOR';
                                        })
                                        ->count();

                                    $costCount = $criterias
                                        ->filter(function ($criteria) {
                                            return $criteria->attribute === 'SECONDARY FACTOR';
                                        })
                                        ->count();
                                @endphp
                                @foreach ($alternatives as $index => $alternative)
                                    <tr>
                                        <td class="text-center">{{ $index + 1 }}</td>
                                        <td class="text-center">{{ $alternative->name }}</td>
                                        @php
                                            $totalBenefit = 0;
                                            $totalCost = 0;
                                        @endphp
                                        @foreach ($criterias as $criteria)
                                            @php
                                                $altValue = $alternative->alternatives
                                                    ->where('criteria_id', $criteria->id)
                                                    ->first();
                                                $criteriaWeight =
                                                    $pv->firstWhere('criteria_id', $criteria->id)->value ?? 0;
                                                $result = intval(
                                                    floatval($altValue->alternative_value) - $criteriaWeight,
                                                );

                                                // Ubah hasil pengurangan sesuai aturan yang ditentukan
                                                if ($result === 0) {
                                                    $result = 5;
                                                } elseif ($result === 1) {
                                                    $result = 4.5;
                                                } elseif ($result === -1) {
                                                    $result = 4;
                                                } elseif ($result === 2) {
                                                    $result = 3.5;
                                                } elseif ($result === 3) {
                                                    $result = 2.5;
                                                } elseif ($result === -3) {
                                                    $result = 2;
                                                } elseif ($result === 4) {
                                                    $result = 1.5;
                                                } elseif ($result === -4) {
                                                    $result = 1;
                                                }

                                                if ($criteria->attribute === 'CORE FACTOR') {
                                                    $totalBenefit += $result;
                                                } elseif ($criteria->attribute === 'SECONDARY FACTOR') {
                                                    $totalCost += $result;
                                                }
                                            @endphp
                                        @endforeach
                                        @php
                                            $ncf = $benefitCount > 0 ? $totalBenefit / $benefitCount : 0;
                                            $nsf = $costCount > 0 ? $totalCost / $costCount : 0;
                                            $total = $ncf * 0.6 + $nsf * 0.4;
                                        @endphp
                                        <td class="text-center">{{ $total }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- card footer  -->
                    <div class="card-footer bg-white text-center">
                        <h4 class=" link-primary">Menghitung Total</h4>
                    </div>
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

    <!-- Add Alternative -->
    <div class="modal fade" id="addAlternativeModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="addAlternativeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addAlternativeModalLabel">Tambah Alternatif</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/dashboard/alternatives" method="post">
                    <div class="modal-body">
                        <span class="mb-2">Rules :</span>
                        <ul class="list-group mb-2">
                            <li class="list-group-item bg-success text-white">
                                Nilai Minimum 0
                            </li>
                            <li class="list-group-item bg-success text-white">
                                Nilai Maksimum 9
                            </li>
                            <li class="list-group-item bg-success text-white">
                                Input Nilai Desimal
                            </li>
                        </ul>

                        @csrf
                        <div class="my-2">
                            <label for="tourism_object_id" class="form-label">Alternatif</label>
                            <select class="form-select @error('tourism_object_id') 'is-invalid' : ''  @enderror"
                                id="tourism_object_id" name="tourism_object_id" required>
                                @if ($tourism_objects->count())
                                    <option disabled selected>--Choose One--</option>
                                    @foreach ($tourism_objects as $tourism)
                                        <option value="{{ $tourism->id }}">
                                            {{ $tourism->name }}
                                        </option>
                                    @endforeach
                                @else
                                    <option disabled value="" selected>--NO DATA FOUND--</option>
                                @endif
                            </select>

                            @error('tourism_object_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        @if ($criterias->count())
                            @foreach ($criterias as $key => $criteria)
                                <input type="hidden" name="criteria_id[]" value="{{ $criteria->id }}">

                                <div class="my-2">
                                    <label for="{{ str_replace(' ', '', $criteria->name) }}" class="form-label">
                                        Value of {{ $criteria->name }}
                                    </label>
                                    <input type="text" id="{{ str_replace(' ', '', $criteria->name) }}"
                                        class="form-control @error('alternative_value') 'is-invalid' : '' @enderror"
                                        name="alternative_value[]" placeholder="Enter the value"
                                        onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57)|| event.charCode == 46)"
                                        maxlength="5" autocomplete="off" required>

                                    @error('alternative_value')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            @endforeach
                        @endif

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="{{ $criterias->count() ? 'submit' : 'button' }}" class="btn btn-primary">Tambah
                            Alternatif</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
