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
                        <h4 class="mb-0">Normalisasi Kriteria</h4>

                        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                            data-bs-target="#modalChoose">
                            <span data-feather="check-square"></span>
                            Pilih Kriteria
                        </button>
                    </div>

                    <!-- table  -->
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered text-nowrap mb-0">
                            <thead class=" table  table-success">
                                <tr>
                                    <th scope="col" class="text-center fw-bold">#</th>
                                    <th scope="col" class="text-center fw-bold">Created By</th>
                                    <th scope="col" class="text-center fw-bold">Created At</th>
                                    <th scope="col" class="text-center fw-bold">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($comparisons->count())
                                    @foreach ($comparisons as $comparison)
                                        <tr>
                                            {{-- $loop->iteraion => nomor / urutan loop keberapa nya --}}
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">{{ $comparison->user->name }}</td>
                                            <td class="text-center">{{ $comparison->created_at->toFormattedDateString() }}
                                            </td>
                                            <td class="text-center">
                                                <a href="/dashboard/criteria-comparisons/{{ $comparison->id }}"
                                                    class="badge bg-success text-decoration-none">
                                                    Lihat Hasil Normalisasi
                                                </a>
                                                <form action="/dashboard/criteria-comparisons/{{ $comparison->id }}"
                                                    method="POST" class="d-inline" onsubmit="return confirmDelete()">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="badge bg-danger btnDelete"
                                                        data-object="Comparison Data"
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
                                        <td colspan="4" class="text-danger text-center p-4">
                                            <h4>You haven't create any comparisons yet</h4>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- card footer  -->
                    <div class="card-footer bg-white text-center">
                        <h4 class=" link-primary">Kriteria</h4>
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



    <!-- Modal Choose Criteria -->
    <div class="modal fade" id="modalChoose" tabindex="-1" aria-labelledby="modalChooseLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalChooseLabel">Pilih Kriteria</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/dashboard/criteria-comparisons" method="POST">
                    @csrf
                    <div class="modal-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center" colspan="2">Nama</th>
                                    <th scope="col" class="text-center">Attribut</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($criterias->count())
                                    @foreach ($criterias as $criteria)
                                        <tr>
                                            <th scope="row" class="text-center">
                                                <input type="checkbox" value="{{ $criteria->id }}" name="criteria_id[]">
                                            </th>
                                            <td class="text-center">{{ $criteria->name }}</td>
                                            <td class="text-center">{{ Str::ucfirst(Str::lower($criteria->attribute)) }}
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td class="text-center text-danger" colspan="4">Tidak Ada Kriteria</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
