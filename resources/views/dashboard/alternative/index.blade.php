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
    <div class="bg-primary pt-10 pb-21"></div>
    <div class="container-fluid mt-n22 px-6">
        <div class="row mt-6">
            <div class="col-md-12 col-12">
                <!-- card  -->
                <div class="card">
                    <!-- card header  -->
                    <div class="card-header bg-white py-4 d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Alternatif</h4>
                        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                            data-bs-target="#addAlternativeModal">
                            <span data-feather="plus"></span>
                            Tambah Alternatif Baru
                        </button>
                    </div>

                    <!-- table  -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped text-nowrap mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <th class="text-center align-middle" rowspan="2">#</th>
                                    <th class="text-center align-middle" rowspan="2">Nama Alternatif</th>
                                    <th class="text-center" colspan="{{ $criterias->count() }}">Kriteria</th>
                                    <th class="text-center align-middle" rowspan="2">Action</th>
                                </tr>
                                <tr>
                                    @if ($criterias->count())
                                        @foreach ($criterias as $criteria)
                                            <th class="text-center">{{ $criteria->name }}</th>
                                        @endforeach
                                    @else
                                        <th class="text-center">No Criteria Data Found</th>
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

                                            <td class="text-center">
                                                <a href="/dashboard/alternatives/{{ $alternative->id }}/edit"
                                                    class="badge bg-success text-decoration-none">
                                                    Edit
                                                </a>
                                                <form action="/dashboard/alternatives/{{ $alternative->id }}" method="POST"
                                                    class="d-inline" onsubmit="return confirmDelete()">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="badge bg-danger btnDelete"
                                                        data-object="Alternative"
                                                        style="cursor: pointer; background: none; border: none;">
                                                        Delete
                                                    </button>
                                                </form>

                                                <script>
                                                    function confirmDelete() {
                                                        return confirm('Apakah Anda yakin ingin menghapus item ini?');
                                                    }
                                                </script>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="{{ 3 + $criterias->count() }}" class="text-center text-danger">
                                            No Data
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- card footer  -->
                    <div class="card-footer bg-white text-center">
                        <h4 class=" link-primary">Alternatif</h4>
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
                                    <option disabled selected>--Pilih Salah Satu--</option>
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
