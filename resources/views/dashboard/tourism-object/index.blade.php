@extends('layout.main')


@section('content')
    {{-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tanaman</h1>
    </div> --}}
    <div class="bg-primary pt-10 pb-21"></div>
    <div class="container-fluid mt-n22 px-6">
        <div class="row mt-6">
            <div class="col-md-12 col-12">
                <!-- card  -->
                <div class="card">
                    <!-- card header  -->
                    <div class="card-header bg-white py-4 d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Tanaman</h4>
                        <a href="/dashboard/tourism-objects/create" class="btn btn-primary mb-3">
                            <span data-feather="plus"></span>
                            Tambah Tanaman
                        </a>
                    </div>

                    <!-- table  -->
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered text-nowrap mb-0">
                            <thead class="table table-success">
                                <tr>
                                    <th scope="col" class="text-center fw-bold">#</th>
                                    <th scope="col" class="text-center fw-bold">Nama</th>
                                    <th scope="col" class="text-center fw-bold">Address</th>
                                    <th scope="col" class="text-center fw-bold">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($objects->count())
                                    @foreach ($objects as $object)
                                        <tr>
                                            {{-- $loop->iteraion => nomor / urutan loop keberapa nya --}}
                                            <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                            <td class="text-center">{{ $object->name }}</td>
                                            <td class="text-center">{{ $object->address }}</td>
                                            <td class="text-center">
                                                <a href="/dashboard/tourism-objects/{{ $object->id }}/edit"
                                                    class="text-decoration-none text-success">
                                                    <span data-feather="edit"></span>
                                                </a>
                                                <form action="/dashboard/tourism-objects/{{ $object->id }}" method="POST"
                                                    class="d-inline" onsubmit="return confirmDelete()">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit"
                                                        class="text-decoration-none text-danger btnDelete"
                                                        data-object="tourism object"
                                                        style="background: none; border: none; cursor: pointer;">
                                                        <span data-feather="x-circle"></span>
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
                                            <h4>You haven't create any tourism objects yet</h4>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- card footer  -->
                    <div class="card-footer bg-white text-center">
                        <h4 class=" link-primary">Tanaman</h4>
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
@endsection
